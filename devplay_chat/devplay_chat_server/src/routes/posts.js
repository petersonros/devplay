const {Router} = require("express");

const routes = Router();

const posts = [];

routes.get("/posts", (req, res) => {
    return res.json(posts);
});

routes.post("/posts", (req, res) => {
    const post = {
        texto: "Olá",
    };
    posts.push(post);
    return res.json(post);
});

module.exports = routes;
