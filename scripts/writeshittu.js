const name = "Shittu Akeem";
const email = "writeshittu@gmail.com";
const HNGi7_Id = "HNG-00268";
const Lang = "JavaScript";

let myInfo = { name, HNGi7_Id, email, Lang };

const outputData = ({ name, HNGi7_Id, email, Lang }) => {
  console.log(`Hello World, this is ${name} with HNGi7 ID ${HNGi7_Id} using ${Lang} for stage 2 task,
    Name : ${name},
    id : ${HNGi7_Id},
    email: ${email},
    Language : ${Lang}
   `);
};

outputData(myInfo);
