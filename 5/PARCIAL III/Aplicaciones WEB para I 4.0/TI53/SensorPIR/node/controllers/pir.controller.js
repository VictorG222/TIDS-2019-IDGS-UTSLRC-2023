const pirModel = require('../models/pir.model');
const pirController = {};

pirController.getData = async (req, res) => {
    const pir = await pirModel.find();
    res.json(pir);
};

pirController.addData = async (req, res) => {
    const pir = new pirModel(req.body);
    await pir.save();
    res.json({
        'status': 'Data Saved'
    });
};

pirController.getDataWhitId = async (req, res) => {
    const pir = await pirModel.findById(req.params.id);
    res.json(pir);
};

pirController.putData = async (req, res) => {
    const {id} = req.params;
    const pir = {
        date: req.body.name,
        hour: req.body.type,
        state: req.body.email,
    };
    await pirModel.findByIdAndUpdate(id, {$set:pir}, {new: true});

    res.json({status: 'Data Updated'});

};

pirController.deleteData = async (req, res) => {
    await pirModel.findByIdAndDelete(req.params.id);
    res.json({status: 'Data Deleted'});
};

module.exports = pirController;