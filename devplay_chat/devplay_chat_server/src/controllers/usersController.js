const { info } = require("winston");
const usersServices = require("../services/usersServices");
const ApiError = require("../utils/errors/apiError");
const {logger}= require("../utils/logger");

const usersController = {
    findAll(req, res) {
        const emailFilter = req.query.email;
        const users = usersServices.findAll(emailFilter);
        logger.info(`Buscando ${users.length} usuários!`);
        return res.json(users);
    },
    findOne(req, res, next) {
        try {
        const id = Number(req.params.id);
        const user = usersServices.findOne(id);
        logger.info( `Buscando usuários ${users.name}.`);
        return res.json(user);
        } catch (error) {
            next(error);
        };
    },
    create(req, res, next) {
        try {
            const user = usersServices.create(req.body);
            logger.info({message: `Usuário criado! ${user.name}`, user});
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