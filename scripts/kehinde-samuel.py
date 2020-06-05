#import json

#info = {
       # "full_name":"Kehinde Samuel", "ID":"HNG-05408", "email":"khesaog@gmail.com", "language":"python" }

#output = "Hello World, this is " + info["full_name"] + " with HNGi7 ID " + info["ID"]  + " and email " +info["email"] + " using "+ info["language"] + " for stage 2 task"
#print(output)

class HngFirstTask: 
      
      
    # The init method or constructor 
    def __init__(constr, tID): 
          
        # Instance Variable 
        constr.tID = tID   
        
     # Adds an instance variable  
    def setID(constr, ID):     
        constr.ID = ID
        
    # Retrieves instance variable     
    def getID(constr):     
        return constr.ID
  
    def setName(constr, name): 
        constr.name = name 
      
    def getName(constr):     
        return constr.name

    def setEmail(constr, email):     
        constr.email = email 

    def getEmail(constr):     
        return constr.email

    def setLanguage(constr, lang): 
        constr.lang = lang
        
    def getLanguage(constr):     
        return constr.lang 

# Driver Code 
task = HngFirstTask("Task01") 
task.setID("HNG-05408") 
task.setName("Kehinde Samuel") 
task.setEmail("khesaog@gmail.com") 
task.setLanguage("python") 

print("Hello World, this is " + task.getName() +" with HNGi7 ID " + task.getID() + " using " + task.getLanguage() + " for stage 2 task and " + task.getEmail())