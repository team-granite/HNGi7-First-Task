
let person = {
    fullName: "Falola Ibrahim",
    hngID: "HNG-03833",
    progLanguage: "javascript",
    email: "ayofalola240@gmail.com"
};
let cl = console.log;


const printOutput = () => {
    cl(`Hello World, this is ${person.fullName} with HNGi7 ID ${person.hngID} using ${person.progLanguage} for stage 2 task  and ${person.email}`);
};

printOutput();
