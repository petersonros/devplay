let users = [];
let lastId = 0;

const usersServices = {
    findAll(){
        return users;
    },
    findOne(id){
        const user = users.find((user) => user.id === id);
        return user;
    },
    create(params){
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