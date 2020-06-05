#!/usr/bin/python3

MY_BIODATA = {
    'FULLNAME':'OLUWASEYI OYELAMI',
    'HNG_ID':'HNG-03435',
    'PROG_LANG':'Python',
    'EMAIL':'seyi.oyelami@gmail.com'
    }

to_output = "Hello World, this is {0} with HNGi7 ID {1} using {2} for stage 2 task and {3}"\
    .format(MY_BIODATA["FULLNAME"], MY_BIODATA["HNG_ID"], MY_BIODATA["PROG_LANG"], MY_BIODATA["EMAIL"])

def print_out():
    print(to_output)

if __name__ == "__main__":
    print_out()
