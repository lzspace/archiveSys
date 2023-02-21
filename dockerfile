FROM nginx:1.11-alpine
COPY index.php /usr/share/nginx/html

EXPOSE 80

CMD ["nginx","-g","daemon off;"]