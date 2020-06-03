#!/usr/bin/env python3

import json
import sys

name = 'Gbolahan Awoseyila'
hng_id = 'HNG-02446'
language = 'Python'
email = 'iamgbolahan@yahoo.com'

content = 'Hello World, this is ' + name + ' with HNGi7 ID ' + hng_id + ' using ' + language + ' for stage 2 task and ' + email

formatted = {
    "data": content
}

print(content)