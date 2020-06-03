let displayContent = {
    firstName: 'Frances',
    lastName : 'Oparaocha',
    email :'francesoparaocha@gmail.com',
    internId :'HNG-00114',
    scriptingLanguage:'Javascript'

};
const greeting=(displayContent) => {
   return `Hello world this is ${displayContent.firstName} ${displayContent.lastName} with HNGi7 Id of ${displayContent.internId} using ${displayContent.scriptingLanguage} for stage 2 task and ${displayContent.email}`;
    
        };
console.log(greeting(displayContent));