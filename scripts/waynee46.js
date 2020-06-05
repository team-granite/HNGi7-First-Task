var myInfo = `{
    "fullname":  "Omobola Wayne Lawal",
    "myID": "HNG-06166",
    "launguage": "Javascript",
    "email": "omobolalawal6@gmail.com"
  }`;
  var json = JSON.parse(myInfo);
    output = `Hello World, this is ${json.fullname} with HNGi7 ID ${json.myID} using ${json.launguage} for stage 2 task and ${json.email}`
  console.log(output);
  