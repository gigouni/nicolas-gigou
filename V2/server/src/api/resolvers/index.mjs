import statsQueries from './queries/stats.queries'

import statsMutations from './mutations/stats.mutations'

export default {
	Query: {
		...statsQueries
	},
  
	Mutation: {
		...statsMutations
	}
}