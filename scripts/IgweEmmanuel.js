const displayInfo = (function () {
  let myName = "Emmanuel Igwe";
  let hngId = "HNG-06162";
  let ProgramLanguage = "javascript";
  let Email = "emmanuel.igwe38@gmail.com";
  return function () {
    console.log(` Hello World, this is ${myName} with HNGi7 ID ${hngId} using ${ProgramLanguage}
    for stage 2 task and ${Email}`);
  };
})();
displayInfo();
