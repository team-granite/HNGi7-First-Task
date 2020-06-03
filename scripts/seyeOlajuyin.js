const myData = {
  fullName: "Seye Olajuyin",
  id: "HNG-02053",
  email: "seyeolajuyinlive@gmail.com",
  language: "JavaScript",
};

function myTask() {
  return `Hello World, this is ${myData.fullName} with HNG ID ${myData.id} using ${myData.language} and ${myData.email}`;
}

console.log(myTask());

