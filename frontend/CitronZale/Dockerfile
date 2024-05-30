FROM node:18-alpine as build

# Create destination directory
RUN mkdir -p /usr/src/app
WORKDIR /usr/src/app

# Update and install dependency
RUN apk update && apk upgrade
RUN apk add git

# Copy the app, note .dockerignore
COPY . /usr/src/app/
RUN npm install

# Debugging step to list files
RUN ls -l /usr/src/app/src/assets/Images

RUN npm run build

FROM nginx:stable-alpine
COPY --from=build /usr/src/app/dist /bin/www
COPY nginx/nginx.conf /etc/nginx/conf.d/default.conf
EXPOSE 3000
CMD ["nginx", "-g", "daemon off;"]
