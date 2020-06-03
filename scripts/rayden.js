// A simple script to print out the name and language used for HNG stage 2 task

//object with my details
const details = {"full name" : "Aniekan Inyang","ID" : "HNG-03943","language" : "javascript", "email":"rayden.ai@gmail.com"};

// An arrow function that returns my details and language used
const myIntro = ()=> {     
    let introduction = `Hello World, this is ${details["full name"]} with HNGi7 ID ${details.ID} using ${details.language} for stage 2 task and ${details.email} `;
    return introduction;    
}
console.log(myIntro())


