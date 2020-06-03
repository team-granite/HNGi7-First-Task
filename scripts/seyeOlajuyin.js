const myData = {
  fullName: "Seye Olajuyin",
  id: "HNG-02053",
  email: "seyeolajuyinlive@gmail.com",
  language: "JavaScript",
};

function myTask() {
  return `Hello World, this is ${myData.fullName} with HNGi7 ID ${myData.id} using ${myData.language} for stage 2 task and ${myData.email}`;
}

console.log(myTask());
