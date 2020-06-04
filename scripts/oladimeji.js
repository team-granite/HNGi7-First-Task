let data_oladimeji = {
    fullName: "Ayodeji Oladimeji",
    ID: "HNG-01047",
    language: "JavaScript",
    email: "alayosingers@gmail.com"
}

let result = `Hello World, this is ${data_oladimeji.fullName} with HNGi7 ID ${data_oladimeji.ID} using ${data_oladimeji.language} for stage 2 task and ${data_oladimeji.email}`;

function printOutput() {
    console.log(result);
    return result;

}
// Printing the output
printOutput();
