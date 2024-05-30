# Dockerfile
FROM node:18-alpine as build

# create destination directory
RUN mkdir -p /usr/src/app
WORKDIR /usr/src/app

# update and install dependency
RUN apk update && apk upgrade
RUN apk add git

# copy the app, note .dockerignore
COPY . /usr/src/app/
RUN yarn install
RUN yarn run build

FROM nginx:stable-alpine
COPY --from=build /usr/src/app/dist /bin/www
COPY nginx/nginx.conf /etc/nginx/conf.d/default.conf
EXPOSE 3000
CMD [ "nginx", "-g", "daemon off;" ]
