FROM nginx:1.11-alpine
RUN echo "success"
COPY application/index.php /usr/share/nginx/html
COPY index.html /usr/share/nginx/html
EXPOSE 80

CMD ["nginx","-g","daemon off;"]