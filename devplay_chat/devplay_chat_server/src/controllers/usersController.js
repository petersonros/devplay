const usersServices = require("../services/usersServices");
const ApiError = require("../utils/errors/apiError");

const usersController = {
    findAll(req, res) {
        const users = usersServices.findAll();
        return res.json(users);
    },
    findOne(req, res, next) {
        try {
        const id = Number(req.params.id);
        const user = usersServices.findOne(id);
        return res.json(user);
        } catch (error) {
            return res.status(error.status).json({error: error.message});
        };
    },
    create(req, res, next) {
        try {
            const user = usersServices.create(req.body);
            return res.json(user);
        } catch (error) {
            next(error);
        };
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