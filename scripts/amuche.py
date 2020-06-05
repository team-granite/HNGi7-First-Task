<<<<<<< HEAD
x = "Ogbonna Amuche"
y = "HNG-03870"
w = "Python"
z = "amuche247cynthia@gmail.com"
=======
import json

my_info = {
    "full_name":"Ogbonna Amuche",
    "ID":"HNG-03870",
    "language":"Python",
    "email":"amuche247cynthia@gmail.com"
}
my_info_json = json.dumps(my_info)

# print(my_info_json)
x = my_info["full_name"]
y = my_info["ID"]
w = my_info["language"]
z = my_info["email"]
>>>>>>> 8648c6d8190b5124beebcd7de0fde96878605f22
print(f"Hello World, this is {x} with HNGi7 ID {y} using {w}  for stage 2 task and email {z}.")

