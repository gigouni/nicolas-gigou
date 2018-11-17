import pgPromise from 'pg-promise'

import config from '../../config/config'

/** @class */
class Database {
	/**
     * @constructor
     * @param {Object} options - The database configuration, including hosting, credentials, etc...
     */
	constructor(options) {
		const pgp = pgPromise({})
		this.connection = pgp(options.URI)
	}    
}

export default new Database(config.DB)