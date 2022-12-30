const dotenv = require('dotenv');
dotenv.config();

const express = require('express');
const cors = require('cors');
const morgan = require('morgan');
const { logger, loggerStream } = require('./utils/logger');
const prisma = require('./utils/database');

const port = process.env.PORT;
const app = express();

app.use(express.json());
app.use(cors());
app.use(morgan('tiny', { stream: loggerStream }));

app.get('/', async (req, res) => {
    const users = await prisma.user.findMany();
    return res.json({ message: 'Welcome to chat server!', users });
});

app.listen(port, () => {
    logger.info(`Servidor rodando na porta: ${port}`);
});