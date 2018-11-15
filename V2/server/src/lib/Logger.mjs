import bunyan from 'bunyan'

import config from '../../config/config'

/** @class */
class Logger {
	constructor() {
		this.options = config
		this.logger = bunyan.createLogger({
			name: this.options.LOG_FILENAME,
			level: this.options.LOG_LEVEL
		})
	}

	/**
   * @description The service/app is going to stop or become unusable now.
   * @param {String|Object} args - The content to log.
   */
	fatal(...args) {
		this.logger.fatal(...args)
	}

	/**
   * @description Fatal for a particular request, but the service/app continues servicing other requests.
   * @param {String|Object} args - The content to log.
   */
	error(...args) {
		this.logger.error(...args)
	}

	/**
   * @description A note on something that should probably be looked at by an operator eventually.
   * @param {String|Object} args - The content to log.
   */
	warn(...args) {
		this.logger.warn(...args)
	}

	/**
   * @description Detail on regular operation.
   * @param {String|Object} args - The content to log.
   */
	info(...args) {
		this.logger.info(...args)
	}

	/**
   * @description Anything else, i.e. too verbose to be included in "info" level.
   * @param {String|Object} args - The content to log.
   */
	debug(...args) {
		this.logger.debug(...args)
	}

	/**
   * @description Logging from external libraries used by your app or very detailed application logging.
   * @param {String|Object} args - The content to log.
   */
	trace(...args) {
		this.logger.trace(...args)
	}
}

export default new Logger()
