const mongoose = require('mongoose');
const { Schema } = mongoose;

const PirSchema = new Schema({
    date: {type: String, require: true},
    hour: {type: String, require: true},
    state: {type: Boolean, require: true}

    // {
    //     "date":"31-05-2021",
    //     "hour": "1:10:53",
    //     "state": true
    // }

},{
    timestamps: true
});

module.exports = mongoose.model('pir',PirSchema);