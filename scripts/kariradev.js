
// create a fucntion print credential to print json data
let person = {
    fullname : "Karira Dev",
    id: "HNG-00122",
    language: "Javascript",
    email: "karira.charles@gmail.com"
};

const printCredentials = () => {
    console.log(`Hello World, this is ${person.fullname} with HNGi7 ID ${person.id} using ${person.language} for stage 2 task and ${person.email}`);
};

printCredentials();
//const obj = JSON.stringify(person);

//console.log(obj);
//console.log(JSON.parse(obj));

