FROM php:8.2-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./your-script.php" ]

FROM nginx:1.15.8-alpine
RUN echo "loading nginx config"
COPY ./nginx.conf /etc/nginx/nginx.conf
RUN echo "success"
RUN echo "loading html file"
COPY ./*.html /usr/share/nginx/html
RUN echo "success"
EXPOSE 80

CMD ["nginx","-g","daemon off;"]