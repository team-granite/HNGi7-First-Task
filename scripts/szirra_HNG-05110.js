console.log("Hello World, this is Shaphan Zirra with HNGi7 ID HNG-05110 using JavaScript for stage 2 task and francisshaphan@gmail.com");

let myDetails = `{
	"fullName": "Shaphan Zirra",
	"hngId": "HNG-05110",
	"language": "JavaScript",
	"email": "francisshaphan@gmail.com"
}`

let details = JSON.parse(myDetails);

console.log("Hello World, this is " + details.fullName + " with HNGi7 ID " + details.hngId + " using " + details.language + " for stage 2 task and " + details.email);