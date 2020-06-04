let user = {
    fullname: "Miracle Ozukalu",
    HNG_Id: "HNG-03127",
    language: "javascript",
    email: "miraclekalu1212@gmail.com",
  };
  user['output'] = `Hello World, this is ${user.fullname} with HNGi7 ID ${user.HNG_Id} using ${user.language} for stage 2 task and ${user.email}`;
  if (user.hasOwnProperty("output")) {
   console.log(user.output);
  }