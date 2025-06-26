FROM nextcloud:latest

# config.php를 컨테이너에 삽입
COPY config/config.php /var/www/html/config/config.php

# 퍼미션 설정
RUN chown -R www-data:www-data /var/www/html/config

