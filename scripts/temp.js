const json = `{
    "fullname" : "Jonathan Simon", 
    "id" :"HNG-00862", 
    "language" : "javascript",
    "email" : "enyejonathansimon@yahoo.com"}`;
const obj = JSON.parse(json);
var display = "Hello World, my name is"+" "+obj.fullname+" "+ "with HNG ID:"+" "+obj.id+" "+"using"+" "+obj.language+" " +"for stage-2 task"+" "+"and my email is"+" "+obj.email;
console.log(display);