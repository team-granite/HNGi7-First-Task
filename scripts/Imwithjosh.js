const bio_data = `{
    "name": "Oyewale Tayo",
    "id":"HNG-03316",
    "email":"tayooyewale@gmail.com",
    "language": "JavaScript"
    
    }`
    const json = JSON.parse(bio_data);
    console.log(`Hello World, this is ${json.name} with HNGi7 ID ${json.id} using ${json.language} for stage 2 task and ${json.email}`);