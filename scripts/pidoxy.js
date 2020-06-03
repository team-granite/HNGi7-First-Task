let intern_pidoxy = {
    fullName: "Emmanuel Idoko",
    ID: "HNG-00247",
    language: "JavaScript",
    email: "pidox31102002@gmail.com"
}

let output = `Hello World, this is ${intern_pidoxy.fullName} with HNGi7 ID ${intern_pidoxy.ID} using ${intern_pidoxy.language} for stage 2 task`;

function giveOutput() {
    console.log(output);
    return output;

}

giveOutput();