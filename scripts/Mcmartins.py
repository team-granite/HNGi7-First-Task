# -*- coding: utf-8 -*-
"""
Created on Wed Jun  3 22:29:37 2020

@author: McMartins
"""
import json

detail = {
        'name': 'Obinna Aguwa',
        'hng_id': 'HNGi7 ID HNG-00129',
        'language': 'Python',
        'email': 'macmartins081@gmail.com'
        }


output = (f"Hello World, this is {detail['name']} with {detail['hng_id']} using {detail['language']} for stage 2 task and {detail['email']}")


json_output = json.dumps(detail, indent = 2)
print(output)