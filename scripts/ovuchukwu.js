let task = {
    fullName: "Ovu Samuel",
    ID: "HNG-03196",
    language: "JavaScript",
    email: "ovusamuel@gmail.com"
}

let final = `Hello World, this is ${task.fullName} with HNGi7 ID ${task.ID} and ${task.email} using ${task.language} for stage 2 task`;

function callOutput() {
    console.log(final);
    return final;
}
callOutput(
    );