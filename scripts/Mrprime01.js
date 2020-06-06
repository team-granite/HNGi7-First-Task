

//My Details
let myDetails = {
    fullName: "Kabir Abdulsalam",
    internId: "HNG-05020",
    language: "Javascript",
    email: "abdulsalamkabir99@gmail.com"
};

let cl = console.log;

//Output statement
const showText = () => {

    cl(`Hello World, this is ${myDetails.fullName} with HNGi7 ID ${myDetails.internId} using ${myDetails.language} for stage 2 task and ${myDetails.email}`);
};

showText();
