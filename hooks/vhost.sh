#!/usr/bin/env bash

################################
# do not use, do not work !!!! #
################################

validate="^([a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]\.)+[a-zA-Z]{2,}$"

checkDomain () {
    if [[ $DOMAIN =~ $validate ]]; then
        return true
    else
        return false
    fi
}

http() {
        cat << EOF > /etc/nginx/sites-available/${DOMAIN}
server {
        listen 80;
        listen [::]:80;

        root /var/www/${DOMAIN};
        index index.php index.html index.htm;
        server_name www.${DOMAIN} ${DOMAIN};

        access_log /var/log/nginx-${DOMAIN}-access.log;
        error_log  /var/log/nginx-${DOMAIN}-error.log error;

        location / {
            #try_files \$uri \$uri/ =404;
            try_files \$uri \$uri/ /index.php\$is_args\$args;
        }

        # pass the PHP scripts to FastCGI server listening on 127.0.0.1:9000
        location ~ \.php$ {

            fastcgi_split_path_info ^(.+\.php)(/.+)$;
            fastcgi_pass 127.0.0.1:9000;
            fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
            fastcgi_param SCRIPT_NAME \$fastcgi_script_name;
            fastcgi_param PATH_INFO \$fastcgi_path_info;
            fastcgi_index index.php;
            include fastcgi_params;

            #fastcgi_split_path_info ^(.+\.php)(/.+)$;
            #fastcgi_pass unix:/run/php/php7.4-fpm.sock;
            #fastcgi_index index.php;
            #include fastcgi.conf;

            #try_files \$uri =404;
            #fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
            #include fastcgi_params;
        }

        location /database {
            deny all;
        }
}
EOF
}

repeat(){
	local start=1
	local end=${1:-80}
	local str="${2:-=}"
	local range=$(seq $start $end)
	for i in $range ; do echo -n "${str}"; done
}

db() {

    if [[ -z $DB_SERVER ]]; then DB_SERVER="localhost"; fi
    if [[ -z $DB_NAME ]]; then DB_NAME="app"; fi
    if [[ -z $DB_USERNAME ]]; then DB_USERNAME="root";  fi
    if [[ -z $DB_PASSWORD ]]; then DB_PASSWORD="password"; fi

    echo -e "[*] DB_SERVER: $DB_SERVER\n[*] DB_NAME: $DB_NAME\n[*] DB_USERNAME: $DB_USERNAME\n[*] DB_PASSWORD: $(repeat ${#DB_PASSWORD} '*')"

    cat << EOF
<?php
    \$servername = "$DB_SERVER";
    \$database =  "$DB_NAME";
    \$username = "$DB_USERNAME";
    \$password = "$DB_PASSWORD";
?>
EOF
}

main () {
    BASEPATH=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && cd .. && pwd )
    # Default Mode
    if [[ -z $MODE ]]; then
        MODE="simple" 
    fi

    if [[ $MODE == "docker" ]]; then

        if [[ -z $DOMAIN ]]; then
            DOMAIN="app.localhost"
        fi

    elif [[ $MODE == "simple" ]]; then
        while true; do
            read -p "[+] Domain: " DOMAIN
            if [[ checkDomain ]]; then
                break
            else
                echo "[-] not valid ${DOMAIN,,} name"
            fi
        done
    else
        echo "[-] not found mode"
    fi

    echo -e "[*] BasePath: ${BASEPATH}"
    echo -e "[*] Domain: ${DOMAIN}"
    echo -e "[*] Site-Path: ${BASEPATH}"
    #mkdir -p /var/www/${DOMAIN}
    echo -e "[*] Virtual-Host: /etc/nginx/sites-available/${DOMAIN}"
    #ln -s /etc/nginx/sites-available/${DOMAIN} /etc/nginx/sites-enabled/ &>/dev/null
    #echo -e "[*] Restart WebServer"
    #systemctl restart nginx

    db

}

# MAIN

if [[ $UID == 0 ]]; then
    #main
    echo -e " "
    echo -e "\t################################"
    echo -e "\t# do not use, do not work !!!! #"
    echo -e "\t################################"
    echo -e " "
else
    echo "Please run script as root. Try using sudo."
    exit 2
fi
