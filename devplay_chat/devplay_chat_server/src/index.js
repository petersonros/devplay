const express = require("express");
const usersRoutes = require("./routes/users");
const postsRoutes = require("./routes/posts");
const logMiddleware = require("./middlewares/log");
const chalk = require("chalk");

const port = 4000;
const app = express();
app.use(logMiddleware());
app.use(express.json());


//   RESTful
//   Entidades:
// - Usuários, - Postagens, - Comentários.

app.use(postsRoutes);
app.use(usersRoutes);
app.get("/", (req, res) => {
    return res.json({msg: "Bem vindo!"});
});

app.use((error, req, res, next) => {
    console.log(`Houve um erro! ${chalk.red(error.message)}`);
    return res.status(error.status || 500).json({error: error.message});
});

// Iniciando o servidor

app.listen(port, () => {
    console.log(`Servidor rodando na porta: ${port}`);
});