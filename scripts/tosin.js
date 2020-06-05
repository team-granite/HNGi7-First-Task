let intern = {
    fullName: "Olutosin Olunloyo",
    ID: "HNG-04947",
    language: "JavaScript",
    email: "olutosin.olunloyo@yahoo.com"
}
let output = `Hello World, this is ${intern.fullName} with HNGi7 ID ${intern.ID} using ${intern.language} for stage 2 task and my email address is ${intern.email}`;
function giveOutput() {
    console.log(output);
    return output;
}
giveOutput();