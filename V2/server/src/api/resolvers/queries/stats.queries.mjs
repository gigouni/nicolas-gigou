const statsQueries = {
	/**
   * @async
   * @description Get all the stats.
   * @param {Object} _ - The result of the previous resolver call.
   * @param {Object} args - The arguments of the resolver's field.
   * @returns {Array<Stat>} - The stats.
   */
	async stats(_, args) {
		try {
			throw new Error('Need to be implemented...')
		} catch (err) {
			throw err
		}
	}
}

export default statsQueries
