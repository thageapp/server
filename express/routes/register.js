var express = require('express')
var router = express.Router()

/* GET register page. */
router.get('/', function (req, res, next) {
  res.render('register', {
    title: 'Public Thage API registration',
    button_text: 'Get your API Key'
  })
})

/* POST register request. */
router.post('/', function (req, res, next) {
  res.render('registered', {
    title: 'Public Thage API registration',
    text: 'Your request is on its way and it will be reviewed by one member of our team. If your application is accepted we\'ll send you a confirmation email.',
    button_text: 'Go back'
  })
})

module.exports = router