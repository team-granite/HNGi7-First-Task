
function task(){

var profileDetails = 
`{
    "fullname": "Onyedikachi Ibeabuchi",
    "id": "HNG-04135",
    "language": "JavaScript",
    "email":"ibeabuchionyedikachii@gmail.com"
}`

var json = JSON.parse(profileDetails);

console.log(`Hello World, this is ${json.fullname} with HNGi7 ID ${json.id} using ${json.language} for stage 2 task and ${json.email}`);
}

task();