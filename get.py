import json

with open("./detail.json") as dt:
    get_dt = json.load(dt)

print(get_dt)

print("Hello world, this is " + get_dt["FULLNAME"] + " with id: " + get_dt["HNGi7_ID"] + " using " +
      get_dt["LANGUAGE"] + " for stage 2 task. " + get_dt["E_MAIL"])
