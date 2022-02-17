
var express = require('express');
var app  = express();
const axios = require('axios');
var mysql = require('mysql');
var bodyParser = require('body-parser');
var cors = require('cors')
app.use(cors());

app.use(bodyParser.json({type:'application/json'}));
app.use(bodyParser.urlencoded({extended:true}));

var con = mysql.createConnection({

  host     : 'mysql-69153-0.cloudclusters.net',
  user     : 'hackathon',
  password : 'bourse123',
  database : 'Hackathon',
  port     : '16568'

});

var server = app.listen(3001, function(){
  var host = server.address().address
  var port = server.address().port
  console.log("start");

});

con.connect(function(error){
  if(error) console.log(error);
  else console.log("connected");
});

app.get('/utilisateurs', function(req, res){
  con.query('select * from utilisateur', function(error, rows, fields){
        if(error) console.log(error);

        else{
            console.log(JSON.stringify(rows));
            res.send(JSON.stringify(rows));
        }

  });
});
