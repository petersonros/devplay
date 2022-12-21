const express = require("express");
const usersRoutes = require("./routes/users");
const postsRoutes = require("./routes/posts");
const logMiddleware = require("./middlewares/log");

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
    return res.status(400).send(`Olá, servidor rodando na porta: ${port}`);
});

// Iniciando o servidor

app.listen(port, () => {
    console.log(`Servidor rodando na porta: ${port}`);
});