const dotenv = require('dotenv');
dotenv.config();

const express = require('express');
const cors = require('cors');
const morgan = require('morgan');
const logger = require('./utils/logger');

const port = process.env.PORT;
const app = express();

app.use(express.json());
app.use(cors());
app.use(
    morgan('tiny', {
      stream: {
        write(info) {
          logger.http(info);
        },
      },
    })
);

app.get('/', (req, res) => {
    logger.info('Requisição feita!');
    return res.json({ message: 'Welcome to chat server!' });
});

app.listen(port, () => {
    console.log(`Servidor rodando na porta: ${port}`);
});