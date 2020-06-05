def introduction(name, ID, language, Email):
    result = "Hello world, this is {} with HNGi7 ID {} using {} for stage 2 task and {}"
    return (result.format(name, ID, language, Email))


message = introduction("Ogunsipe Oladolapo", "HNG-00590",
                       "python", "dolapoogunsipe@gmail.com")
print(message)

