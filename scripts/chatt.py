import json
person = '{"student":[{"fullname": "Mohamed Ali", "hngi7": "HNG-05487", "language": "Python", "email": "alaricdemahom11@gmail.com" }]}'
#print(person)

person2 = json.loads(person)
person3 = person2["student"]
print("Hello world, this is" + person3[0]["fullname"] + "with HNGi7 ID" + person3[0]["hngi7"] + "using" + person3[0]["language"] + "for stage 2 task and" + person3[0]["email"])