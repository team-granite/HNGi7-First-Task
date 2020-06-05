//HNGi-7: Task 1
//Expected output: Hello World, this is [fullname] with HNGi7 ID [HNG-ID] using [language] for stage 2 task and [email]
const myFullName = "Adoniram Muvukor";
const myHNGId = "HNG-00137";
const language = "JavaScript";
const email = "donimuvukor@gmail.com";

//Create and return required output
function returnOutput() {
    const outputStr = `Hello World, this is ${myFullName} with HNGi7 ID ${myHNGId} using ${language} for stage 2 task and ${email}`;
    console.log(outputStr);
}

returnOutput();