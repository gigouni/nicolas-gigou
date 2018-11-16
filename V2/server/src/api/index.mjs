import apolloServerExpress from 'apollo-server-express'
import express from 'express'

import Logger from '../lib/Logger'

const { ApolloServer, gql } = apolloServerExpress

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

const port = 8001

app.listen({ port }, () =>
	Logger.info(`🚀 Server ready at http://localhost:${port}${server.graphqlPath}`),
)