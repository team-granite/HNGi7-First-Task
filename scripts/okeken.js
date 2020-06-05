let fullName = 'Oke Kehinde',
  id = 'HNG-05678',
  language = 'Javascript',
  email = 'okekehinde@gmail.com';

let outputStatement = `Hi there, this is ${fullName}, with the HNG ID:${id}, using ${language} for stage 2 and ${email}`;

outputFunc = () => {
  console.log(outputStatement);
};

outputFunc();
