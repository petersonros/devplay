const winston = require("winston");
const path = require("path");

const logsDir = path.join(process.cwd(), "Logs");

const logger = winston.createLogger({
    transports: [
        winston.transports.Console(),
        winston.transports.File({filename: path.join(logsDir, "app.log")}),
    ]
});

module.exports = logger;