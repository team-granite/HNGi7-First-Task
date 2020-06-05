import json


x = {
  "name": "Victor Mba",
  "ID": "HNG-02691",
  "email": "kalumba366@gmail.com",
  "lang": "python"
}

# convert into JSON:
y = json.dumps(x)


print("Hello World, this is " + x['name'] + " with HNGi7 ID " + x['ID'] + " using " + x['lang'] + " for stage 2 task and " + x['email'])
