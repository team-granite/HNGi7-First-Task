import json

data = {
    "name": "Idowu Toluwani",
    "ID": "HNG-04337",
    "Language": "CSharp",
    "email": "toluwanieaidowu@gmail.com"
}

y = json.dumps(data)

print("Hello World, this is " + data['name'] + " with HNGi7 ID" + data['ID'] + " using " + data['Language'] + 
" for stage 2 task and email " + data['email'] + " ." )
