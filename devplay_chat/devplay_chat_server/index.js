const express = require("express");

const app = express();
const port = 4000;

app.get("/", (req, res) => {
    return res.send(`Olá, servidor rodando: ${port}`);
});

app.post("/", (req, res) => {
    return res.send("Olá, servidor rodando!");
});

app.put("/", (req, res) => {
    return res.send("Olá, servidor rodando!");
});

app.delete("/", (req, res) => {
    return res.send("Olá, servidor rodando!");
});

app.listen(port, () => {
    console.log(`Servidor rodando na porta: ${port}`);
});