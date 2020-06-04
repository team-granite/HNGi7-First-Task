import json
data = {
    "name": "Chidera Ani",
    "HNG-ID": "HNG-06034",
    "language": "python",
    "email": "chideraani27@gmail.com"
}


def task_one():
    return "Hello World, this is {} with HNG ID {} using {} for stage 2 task and {}".format(data["name"],
                                                                                            data["HNG-ID"],
                                                                                            data["language"],
                                                                                            data["email"])


print(task_one())