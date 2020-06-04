// create a fucntion print credential to print json data
function printCredentials() {
    const credentials = `{
        "fullname": "KARIRADEV",
        "id": "HNG-00122",
        "language": "Javascript",
        "email": "karira.charles@gmail.com"
    }`

    const json = JSON.parse(credentials);


    console.log(`HelloWorld this is ${json.fullname} with HNGi ID ${json.id} using ${json.language} for stage 2 task and ${json.email}`);
}
printCredentials();
