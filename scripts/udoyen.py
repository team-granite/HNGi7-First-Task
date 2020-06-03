#!/usr/bin/env python3

import  json
import sys

bio_data = "Hello World, this is George Udosen with HNGi7 ID HNG-05073 using Python for stage 2 task"
user_info =  {
    "data":"Hello World, this is George Udosen with HNGi7 ID HNG-05073 using Python for stage 2 task"
        }

args = sys.argv[1:]

if args:
    data = [json.dumps(user_info, indent=2) if arg == '?json' else bio_data for arg in args]
    print(data[0])
else:
    print(bio_data)

