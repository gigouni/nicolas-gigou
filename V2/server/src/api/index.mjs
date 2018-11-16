import apolloServerExpress from 'apollo-server-express'
import express from 'express'

import Logger from '../lib/Logger'
import schema from './schema'

const { ApolloServer } = apolloServerExpress

const server = new ApolloServer({ schema })

const app = express()
server.applyMiddleware({ app })

const port = 8001

app.listen({ port }, () =>
	Logger.info(`🚀 Server ready at http://localhost:${port}${server.graphqlPath}`),
)
