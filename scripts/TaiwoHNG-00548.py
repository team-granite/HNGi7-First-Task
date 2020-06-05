import json

data = {"fullname": "Taiwo Awe",
        "HNGi7 ID": "HNG-00548",
         "language": "python"}

j_data = json.dumps(data)
print("Hello World, this is " + data["fullname"] + " with HNGi7 ID "
      + data["HNGi7 ID"] + " using " + data["language"] + " for stage 2 task and schorls55@gmail.com")