# 1. Nicolas Gigou server

GraphQL server for the [nicolasgigou.fr](http://nicolasgigou.fr) website. :computer:

## 1.1. Prerequisites

- Node.js ~ 10.13.0 (latest LTS)

## 1.2. Usage

```shell
npm i
npm start # run in production-like mode
npm run dev # run in development mode, with nodemon
npm run docker:build # build the Docker image using the current source
npm run docker:run # run the built Docker image
```

## 1.3. Under the hood

- API
  - GraphQL: [https://graphql.org/](https://graphql.org/)

### 1.3.1. Requesting the API

See [the resolvers](./RESOLVERS.md).

## 1.4. Changelog

See [CHANGELOG](./CHANGELOG.md).

## 1.5. Resources

- Node.js GraphQL & PostgreSQL Quickstart: http://jamesmensch.com/tutorials/graphql-and-postgresql-node-quickstart/