FROM nginx:1.16

ADD vhost.conf /etc/nginx/conf.d/default.conf