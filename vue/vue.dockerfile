FROM node:16 as dev-stage
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY ./ .

COPY --chown=node:node package.json .
COPY .env /usr/src/app/


RUN npm install
RUN npm install vue-router

COPY --chown=node:node . .
USER node

EXPOSE 8080

CMD [ "npm", "run", "serve"]

# FROM node:16 as build-stage
# WORKDIR /app
# COPY package*.json ./
# RUN npm install
# COPY ./ .
# RUN npm run build

# FROM nginx as production-stage
# EXPOSE 3000
# RUN mkdir /app
# COPY nginx.conf /etc/nginx/conf.d/default.conf
# COPY --from=build-stage /app/dist /app
