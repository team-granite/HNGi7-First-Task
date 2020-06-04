//HNGi-7: Task 1
//Expected output: Hello World, this is [full name] with HNGi7 ID [ID] using [language] for stage 2 task
const myFullName = "Adoniram Muvukor";
const myHNGId = "HNG-00137";
const language = "JavaScript";
const email = "donimuvukor@gmail.com";

//Create and return required output
function returnOutput() {
    const outputStr = `Hello world, this is ${myFullName} with HNGi7 ID ${myHNGId} using ${language} for stage 2 task and ${email}`;
    return outputStr;
}

returnOutput();