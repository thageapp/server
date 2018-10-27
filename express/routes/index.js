var express = require('express')
var router = express.Router()

/* GET home page. */
router.get('/', function (req, res, next) {
  res.render('index', {
    title: 'Public Thage API',
    text: 'This is the root of the Thage API.\nYou need to register for an API Key in order to get data from the API.',
    button_text: 'Get your API Key'
  })
})

module.exports = router
