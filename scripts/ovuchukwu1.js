let task = {
    fullName: "Ovu Samuel",
    ID: "HNG-03196",
    language: "JavaScript",
    email: "ovusamuel@gmail.com"
}

let final = `Hello World, this is ${task.fullName} with HNGi7 ID ${task.ID} using ${task.language} for stage 2 task and ${task.email}`;

function callOutput() {
    console.log(final);
    return final;
}
callOutput(
    );