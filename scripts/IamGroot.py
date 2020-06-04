
data = {'Name': "Habeeb Olokoto",
    'ID': 'HNG-02590',
    'language': 'Python',
    'email': 'olokotoh@gmail.com'}

def result():
    output = ('Hello world, this is {} with HNG-ID {} using {} for stage 2 task. {}'.format(data['Name'],data['ID'],data['language'],data['email']))
    print(output)
result()
