var Person = function(fullName, ID, email, language) {
  this.fullName = fullName;
  this.ID = ID;
  this.email = email;
  this.language = language;
};

var eben = new Person(
  "Oseneboh Ebenezer",
  "HNG-06199",
  "ebenezerosezele@gmail.com",
  "JavaScript"
);
function task(person) {
  console.log(
    `Hello World, this is ${person.fullName} with HNGi7 ID ${person.ID} using ${person.language} for stage 2 task`
  );
}
task(eben);
