const express = require('express');
const morgan = require('morgan');
const cors = require('cors');
const {mongoose} = require('./database');

const app = express();

// Setting
app.set('port', process.env.PORT || 3000);

// Middlewares
app.use(morgan('dev'));
app.use(express.json());
app.use(cors({origin: '*'}));

// Routes
app.use('/api/pir', require('./routes/sensor.routes'));

//Server
app.listen(app.get('port'), () =>{
    console.log('Server on port: ', app.get('port'));
});