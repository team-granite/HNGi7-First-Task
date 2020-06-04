class Lateo:
  def __init__(self,fullName, hngId, language, email):
    self.fullName = fullName
    self.hngId = hngId
    self.language = language
    self.email = email

  def myInfo(self):
    print("Hello World, this is " +  \
          self.fullName + " with HNGi7 ID " + self.hngId + " using " \
          + self.language + " for stage 2 task and " + self.email)

lateo = Lateo("Obah Lateo Frederick", "HNG-04973", "Python", "lateofrederick@gmail.com")
lateo.myInfo()