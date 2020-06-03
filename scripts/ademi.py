import json


def intern_info():
    info = {
        "full_name": "Adenike Salau",
        "HNGi7_ID": "HNG-01592",
        "email": "kifademi@gmail.com",
        "language": "python"   
    }
    output = "Hello World, this is " + info['full_name'] +" with HNGi7 ID " + info['HNGi7_ID'] + " using python for stage 2 task and " + info['email']
    print(output)

intern_info()