const details = {
  name: 'oluwatobi oyejide',
  id: 'HNG-04222',
  language: 'javascript',
  email: 'moyejide2016@gmail.com'
};

const readDetails = (details) =>{
  let {name, id, language, email} = details;
  let output = `Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task`;
  console.log(output);
};

readDetails(details);