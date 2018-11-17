import apolloServerExpress from 'apollo-server-express'
import express from 'express'

import Logger from '../lib/Logger'
import config from '../../config/config'
import schema from './schema'

const { ApolloServer } = apolloServerExpress

const server = new ApolloServer({ schema })

const app = express()
server.applyMiddleware({ app })

const port = config.API.PORT

app.listen({ port }, () =>
	Logger.info(`🚀 Server ready at http://localhost:${port}${server.graphqlPath}`),
)
