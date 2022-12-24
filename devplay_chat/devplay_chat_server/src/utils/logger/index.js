const winston = require("winston");
const path = require("path");

const logsDir = path.join(process.cwd(), "logs");

const logger = winston.createLogger({
    format: winston.format.combine(winston.format.timestamp(), winston.format.json()),
    transports: [
        new winston.transports.Console(),
        new winston.transports.File({filename: path.join(logsDir, "app.log")}),
    ]
});

const loggerStream = {
    write(message) {
        logger.info(message);
    }
}

module.exports ={ logger, loggerStream };