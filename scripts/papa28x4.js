const greetings=()=>{
    const intern = {
        "name": "Ekeoma EbiriOkoro",
        "id":"HNG-02752",
        "language":"JavaScript",
        "email":"swissfair@yahoo.co.uk",
    };
    const {name, id, language, email } = intern;
    return `Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task and ${email}`
}

console.log(greetings())