#!/usr/bin/python3

MY_BIODATA = {
    'FULLNAME':'Okwudike Emmanuel',
    'INTERNSHIP_ID':'HNG-02006',
    'PROG_LANG':'Python',
    'EMAIL':'emmanuelokwudike@gmail.com'
    }

to_output = "Hello World, this is {0} with HNGi7 ID {1} using {2} for stage 2 task and {3}"\
    .format(MY_BIODATA["FULLNAME"], MY_BIODATA["INTERNSHIP_ID"], MY_BIODATA["PROG_LANG"], MY_BIODATA["EMAIL"])

def print_out():
    print(to_output)

if __name__ == "__main__":
    print_out()
