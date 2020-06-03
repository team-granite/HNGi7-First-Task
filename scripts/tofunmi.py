#!/usr/bin/env python3
import json
my_data = {
  "data": "Hello World, this is Jesutofunmi Adewole with HNGi7 ID HNG-03321 using Python for stage 2 task and tofdebby@gmail.com"
}

def my_data_to_json():
    my_data_json = json.dumps(my_data)
    print(my_data_json)
my_data_to_json()
