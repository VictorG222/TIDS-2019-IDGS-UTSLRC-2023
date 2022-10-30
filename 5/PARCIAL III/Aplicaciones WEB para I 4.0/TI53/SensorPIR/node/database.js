const mongoose = require('mongoose');
const URL = 'mongodb+srv://admin:123654789@cluster0.jdpnh.mongodb.net/mean'


mongoose.connect(URL, {
    useNewUrlParser: true,
    useUnifiedTopology: true
}).then(db => console.log('MongoDB Connected'))    
.catch(err => console.log(err))

module.exports = mongoose;