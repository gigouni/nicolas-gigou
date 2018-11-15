import { ApolloServer, gql } from 'apollo-server-express'
import express from 'express'

import Logger from '../lib/Logger'

// Construct a schema, using GraphQL schema language
const typeDefs = gql`
  type Query {
    hello: String
  }
`

// Provide resolver functions for your schema fields
const resolvers = {
	Query: {
		hello: () => 'Hello world!',
	},
}

const server = new ApolloServer({ typeDefs, resolvers })

const app = express()
server.applyMiddleware({ app })

const port = 4000

app.listen({ port }, () =>
	Logger.info(`🚀 Server ready at http://localhost:${port}${server.graphqlPath}`),
)