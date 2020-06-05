let profile = {
    fullName:'Davidson Ayo',
    Id:'HNG-06359',
    language:'javascript',
    email:'davidbrain162@gmail.com'
}

const details = ({fullName, Id, language,email}) => {
    console.log('Hello World, this is ' + fullName + ' with HNGi7 ID ' + Id + ' using ' + language + ' for stage 2 task and ' + email)
}

details(profile)