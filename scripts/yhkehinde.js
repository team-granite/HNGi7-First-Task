let person = {
    fullName :"Yahaya Kehinde",
    hngID : "HNG-01939",
    progLanguage : "javascript",
    email: "y.hkehinde@yahoo.com"
};
let cl = console.log;


const showText = () => {
    cl(`Hello World, this is ${person.fullName} with HNGi7 ID ${person.hngID} using ${person.progLanguage} for stage 2 task`);
};

showText();