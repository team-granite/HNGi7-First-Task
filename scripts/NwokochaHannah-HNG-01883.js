//An object to declare the variables used

let myDetails = {
    name: 'Nwokocha Hannah',
    HNG_ID: 'HNG-01883',
    language: 'Javascript',
    emailAddress: 'nwokochahannah@gmail.com'
};

// Function to get the variables and input them in the message

function printMyDetails(){
    let message = (`Hello World, this is ${myDetails.name} with HNGi7 ID ${myDetails.HNG_ID} using ${myDetails.language} for stage 2 task and my email is ${myDetails.emailAddress}`)
    
    console.log(message);
};

//Calls the function

printMyDetails();