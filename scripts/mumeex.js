//Calling out the function to print
printOutScript();


//declearation of variables
var hngdetails = {
	fullName: "Muhammad Abdullahi",
	id: "HNG-00178",
	language: "JavaScript",
	email: "codedprogrammer00@gmail.com",

};

//sending output
var report = `Hello World, this is ${hngdetails.fullName} with HNGi7 ID ${hngdetails.id} using ${hngdetails.language} for stage 2 task and ${hngdetails.email}`;

//display output
console.log(report);