const express = require("express");
const usersRoutes = require("./routes/users");
const postsRoutes = require("./routes/posts");
const logMiddleware = require("./middlewares/log");
const chalk = require("chalk");
const morgan = require("morgan");
const {logger, loggerStream} = require("./utils/logger");

const port = 4000;
const app = express();
app.use(morgan("tiny", {stream: loggerStream}));
app.use(express.json());


//   RESTful
//   Entidades:
// - Usuários, - Postagens, - Comentários.

app.use(postsRoutes);
app.use(usersRoutes);
app.get("/", (req, res, next) => {
    return next (new Error("Houve um erro!"));
    return res.status(500).json({msg: "Bem vindo!"});
});

// lidando com erros

app.use((error, req, res, next) => {
        logger.error(error.message);
    console.log(`Houve um erro! ${chalk.red(error.message)}`);
    return res.status(error.status || 500).json({error: error.message});
});

// Iniciando o servidor

app.listen(port, () => {
    console.log(`Servidor rodando na porta: ${port}`);
});