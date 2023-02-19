# Debian

#debian-build: db www
#
#debian-www: php
#	apt install -y nginx php7.4 php7.4-common php7.4-cli php7.4-json php7.4-curl php7.4-mysql php7.4-fpm php7.4-zip
#	apt install -y -f mysql-client=5.7* mysql-community-server=5.7* mysql-server=5.7*
#
#php:
#	apt install -y software-properties-common
#	add-apt-repository -y ppa:ondrej/php
#	echo "deb https://ppa.launchpadcontent.net/ondrej/php/ubuntu/ jammy main" > /etc/apt/sources.list.d/ondrej-ubuntu-php-kinetic.list
#	apt update
#
#debian-db: SHELL:=/bin/bash
#debian-db:
#	apt install -y gnupg
#	wget https://dev.mysql.com/get/mysql-apt-config_0.8.12-1_all.deb -P ./tmp/
#	dpkg -i ./tmp/mysql-apt-config_0.8.12-1_all.deb
#	apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 467B942D3A79BD29
#	apt update
#	rm -fr ./tmp
#
#debian-clean:
#	apt remove -y --purge --autoremove nginx mysql-* php* gnupg software-properties-common
#
#.SILENT: run
#.ONESHELL:
#debian-cfg: SHELL:=/bin/bash
#debian-cfg:
#	@./hooks/vhost.sh


NAME := ""
build: SHELL:=/bin/bash
.SILENT: run
build:
	@if [[ ${NAME} == "" ]]; then echo ">>> NAME is not set"; exit 1; fi
	@docker build --no-cache --build-arg BUILD_DATE=`date -u +%Y-%m-%dT%H:%M:%SZ` -t ${NAME} .

NAME := ""
rmi: SHELL:=/bin/bash
.SILENT: run
rmi:
	@if [[ ${NAME} == "" ]]; then echo ">>> NAME is not set"; exit 1; fi
	@docker rmi -f ${NAME}