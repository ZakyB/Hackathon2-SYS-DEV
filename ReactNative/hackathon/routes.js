var mysql      = require('mysql');
const express  = require("express");
const app      = express();
var connection = mysql.createConnection({
  host     : 'mysql-69153-0.cloudclusters.net',
  user     : 'hackathon',
  password : 'bourse123',
  database : 'Hackathon',
  port     : '16568'
});

connection.connect();

connection.query('SELECT * FROM service', function (error, results, fields) {
  if (error) throw error;
  console.log('The solution is: ', results);
});


app.get("/app/test",(req, res) => {
  res.send("hello world");
});

app.get("/",(req,res) => {
    const sqlSelect = "SELECT * from utilisateur";
    connection.query(sqlSelect,(err,result) => {
    res.send(result);
  });
});

app.listen(3001, () => {
  console.log("running on port 3001");
});


connection.end();
