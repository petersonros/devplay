const { Router } = require("express");

const routes = Router();

const users = [];

routes.get("/users", (req, res) => {
    return res.json(users);
});

routes.post("/users", (req, res) => {
    const user = {
        nome: "Arthur",
    };
    users.push(user);
    return res.json(user);
});

module.exports = routes;
