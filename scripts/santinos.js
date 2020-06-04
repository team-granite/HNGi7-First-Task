var myInfo = `{
    "fullname":  "Ephraim Ibatt",
    "myID": "HNG-03519",
    "launguage": "Javascript",
    "email": "aniekanephraim@gmail.com"
  }`;
  var json = JSON.parse(myInfo);
    output = `Hello World, this is ${json.fullname} with HNGi7 ID ${json.myID} using ${json.launguage} for stage 2 task and ${json.email}`
  console.log(output);