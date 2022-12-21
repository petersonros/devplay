const chalk = require("chalk");

function logMiddleware() {
    return (req, res, next) => {
        res.on("finish", () => {
            let log = chalk.green(res.statusCode);

            
            if(res.statusCode >= 400) {
                log = chalk.red(res.statusCode);
            }
            console.log(req.path, log);
        });

        next()
    };
};

module.exports = logMiddleware;