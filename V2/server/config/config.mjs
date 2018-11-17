const db = {
	PROTOCOL: 'postgresql',
	USER: 'nicolasgigou-server',
	HOST: 'localhost',
	PORT: 5432,
	NAME: 'nicolasgigou-server-db',
}

export default {
	/** Logs settings */
	LOG: {
		FILENAME: 'Server',
		LEVEL: 'debug',
	},

	/** Database settings */
	DB: {
		URI: `${db.PROTOCOL}://${db.USER}@${db.HOST}:${db.PORT}/${db.NAME}`
	},

	/** Server settings */
	API: {
		PORT: 8001
	}
}
