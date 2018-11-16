import pgPromise from 'pg-promise'

const connStr = 'postgresql://user@host:port/database'

const pgp = pgPromise({})
const psql = pgp(connStr)

export default psql