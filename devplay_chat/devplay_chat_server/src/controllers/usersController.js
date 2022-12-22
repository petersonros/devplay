const usersServices = require("../services/usersServices");

const usersController = {
    findAll(req, res) {
        const users = usersServices.findAll();
        return res.json(users);
    },
    findOne(req, res) {
        const id = Number(req.params.id);
        const user = usersServices.findOne(id);
        return res.json(user);
    },
    create(req, res) {
        const user = usersServices.create(req.body);
        return res.json(user);
    },
    update(req, res) {
        const id = Number(req.params.id);
        const user = usersServices.update(id, req.body);
        return res.json(user);
    },
    delete(req, res) {
        const id = Number(req.params.id);
        const user = usersServices.delete(id);
        return res.json(user);
    },
};

module.exports = usersController;