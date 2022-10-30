const express = require('express');
const router = express.Router();
const pirController = require('../controllers/pir.controller');

router.get('/', pirController.getData);
router.post('/', pirController.addData);
router.put('/:id', pirController.putData);
router.delete('/:id', pirController.deleteData);
router.get('/:id', pirController.getDataWhitId);

module.exports = router;