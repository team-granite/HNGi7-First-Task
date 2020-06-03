let profile = {
    fullName:'Tochukwu Okeke',
    Id:'HNG-00219',
    language:'javascript',
    email:'teeceemum@gmail.com'
}

const details = ({fullName, Id, language,email}) => {
    console.log('Hello World, this is ' + fullName + ' with HNGi7 ID ' + Id + ' using ' + language + ' for stage 2 task and ' + email)
}

details(profile)