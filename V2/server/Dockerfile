FROM node:10.13.0

COPY ./config /app/config
COPY ./package.json /app/package.json
COPY ./src /app/src

WORKDIR /app

RUN npm i --verbose

CMD npm run dev
