const express = require("express");
const usersRoutes = require("./routes/users");
const postsRoutes = require("./routes/posts");

const app = express();
const port = 4000;

//   RESTful
//   Entidades:
// - Usuários, - Postagens, - Comentários.

app.use(postsRoutes);
app.use(usersRoutes);
app.get("/", (req, res) => {
    return res.send(`Olá, servidor rodando na porta: ${port}`);
});

// Iniciando o servidor

app.listen(port, () => {
    console.log(`Servidor rodando na porta: ${port}`);
});