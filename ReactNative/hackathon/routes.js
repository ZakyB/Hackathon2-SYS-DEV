var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'mysql-69153-0.cloudclusters.net',
  user     : 'hackathon',
  password : 'bourse123',
  database : 'Hackathon',
  port     : '16568'
});

connection.connect();

connection.query('SELECT * FROM `service`', function (error, results, fields) {
  if (error) throw error;
  console.log('The solution is: ', results[0]);
});
export function getServices(test) {
  connection.query('SELECT * FROM `service`', function (error, results, fields) {
    if (error) throw error;
    return results;
  });
}

connection.end();
