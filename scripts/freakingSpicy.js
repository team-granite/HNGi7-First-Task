
var data = '{"first_name":"Victoria", "last_name":"Adedayo", "id":"HNG-01723", "email":"adedayovicky123@gmail.com", "language":"Javascript"}';

var j = JSON.parse(data);
console.log("Hello World, this is " + j.first_name + " " + j.last_name + " with HNGi7 ID " + j.id + " using " + j.language + " for stage 2 task and " + j.email);