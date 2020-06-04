
var info = 
`{
    "fullname": "Abdulmatin Adeniji",
    "id": "HNG-04536",
     "email":"abdulmatinadeniji@gmail.com",
    "language": "JavaScript"
}`

var json = JSON.parse(info);

console.log(`Hello World, this is ${json.fullname} with HNGi7 ID ${json.id} using ${json.language} for stage 2 task and ${json.email}`);