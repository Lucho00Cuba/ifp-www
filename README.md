## WebApp PHP - iFP

_Aplicacion Web para la practica UF1_

### Notes

```sql
--- Create Database
CREATE DATABASE app CHARACTER SET utf8 COLLATE utf8_general_ci;
```

### Dependencies

 - NGINX
 - MYSQL (5.7)
 - PHP (8.1 or 7.4)


### Build Image Docker

```bash
user@node:~$ hooks/build.sh "ifp-www:$TAG"
```

### Envs

```yaml
--- default values
DB_SERVER: localhost
DB_NAME: app
DB_USERNAME: root
DB_PASSWORD: root
```

### Reference
- https://github.com/erseco/alpine-php-webserver