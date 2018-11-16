const statsMutations = {
	/**
   * @async
   * @description Add new stats.
   * @param {Object} _ - The result of the previous resolver call.
   * @param {Object} args - The arguments of the resolver's field.
   * @returns {Number} - The number of affected rows.
   */
	async createStats(_, args) {
		try {
			throw new Error('Need to be implemented...')
		} catch (err) {
			throw err
		}
	}
}

export default statsMutations
