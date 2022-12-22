const { Router } = require("express");
const usersController = require("../controllers/usersController");

const routes = Router();

routes.get("/users", usersController.findAll);
routes.get("/users/:id", usersController.findOne);
routes.post("/users", usersController.create);
routes.put("/users/:id", usersController.update);
routes.delete("/users/:id", usersController.delete);

module.exports = routes;
