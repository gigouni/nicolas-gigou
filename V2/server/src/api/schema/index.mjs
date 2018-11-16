import graphqlTools from 'graphql-tools'

import resolvers from '../resolvers'

const { makeExecutableSchema } = graphqlTools

const typeDefs = `
  type Query {
    stats: String
  }
  type Mutation {
    createStats: String
  }
`

export default makeExecutableSchema({
	typeDefs,
	resolvers,
})
