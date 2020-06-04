//Profile payload

const Profile = {
    fullName: 'Elgiva Stephen',
    HNGId: 'HNG-00808',
    lang: 'Javascript',
    email: 'elgiva.stephen@gmail.com'
};

//A self-invoked function
(() => {
    const response = (`Hello World, this is ${Profile.fullName} with HNGi7 ID ${Profile.HNGId} using ${Profile.lang} for stage 2 task and my email is ${Profile.email}`)
    console.log(response);
})();