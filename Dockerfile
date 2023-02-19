FROM erseco/alpine-php-webserver

ARG BUILD_DATE

LABEL maintainer="lomv0209@gmail.com" \
      owner="JustMe" \
      org.label-schema.build-date=$BUILD_DATE \
      org.label-schema.vcs-url="https://github.com/Lucho00Cuba/ifp-www.git"

COPY --chown=nobody src /var/www/html

# Configure a healthcheck to validate that everything is up&running
HEALTHCHECK --timeout=10s CMD curl --silent --fail http://127.0.0.1:8080/fpm-ping