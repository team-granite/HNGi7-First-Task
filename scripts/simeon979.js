const process = require("process");

let stdout = process.stdout;

const name = "Adegbola Simeon";
const hngId = "HNG-02271";
const language = "JavaScript";
const email = "adegbolasimeon@gmail.com";

stdout.write(`Hello World, this is ${name} with HNGi7 ID ${hngId} using ${language} for stage 2 task and ${email}`);
stdout.end();
