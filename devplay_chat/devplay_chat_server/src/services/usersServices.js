const ApiError = require("../utils/errors/apiError");

let users = [];
let lastId = 0;

const usersServices = {
    findAll(emailFilter){
        if (!emailFilter) return users;

        console.log(emailFilter);
        return users.filter((user) => {
            return user.email.includes(emailFilter);
        });
    },
    findOne(id){
        const user = users.find((user) => user.id === id);
        if(!user) throw new ApiError("Usuário não encontrado!", 404)
        return user;
    },
    create(params){
        if(!params.name) throw new ApiError("Nome é obrigatório!", 400);
        if(!params.email) throw new ApiError("Email é obrigatório!", 400);
        if(!params.password) throw new ApiError("Senha é obrigatória!", 400);

        const newUser = { id: lastId, ...params };
        users.push(newUser);
        lastId++;
        return newUser;
    },
    update(id, params){
        users = users.map((user) => {
            return user.id === id ? {...user, ...params}: user;
        });

        return usersServices.findOne(id);
    },
    delete(id){
        const user = usersServices.findOne(id);
        users = users.filter((user) => user.id != id);
        return user;
    },
};

module.exports = usersServices;