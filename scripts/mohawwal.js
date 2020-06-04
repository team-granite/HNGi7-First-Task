let info = {
  full_name: 'Bankole Awwal',
  id: 'HNG-00537',
  lang: 'Javascript',
  email_address: 'awwalbankole@gmail.com',
};

let displayOutput = ({ full_name, id, lang, email_address }) => {
  console.log(
    `Hello World, this is ${full_name} with HNGi7 ID ${id} using ${lang} for stage 2 task and ${email_address}.`
  );
};

displayOutput(info);
