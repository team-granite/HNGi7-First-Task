var myData = `{
    "fullname": "Oyinkansola Alabi",
    "id": "HNG-03340",
    "email":"jessyinks14@gmail.com",
    "language": "JavaScript"
}`;

var json = JSON.parse(myData);

console.log(
  `Hello World, this is ${json.fullname} with HNGi7 ID ${json.id} using ${json.language} for stage 2 task and ${json.email}`
);
