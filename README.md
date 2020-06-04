# HNGi7-First-Task

## Link to the Live Server
<!-- http://34.69.193.111/index.php -->

## Useful Links

## [How To Create A Pull Request](https://www.digitalocean.com/community/tutorials/how-to-create-a-pull-request-on-github)

## Get Started
Fork the repo by clicking on the fork button 

You will be redirected to a URL like this

```
https://github.com/yourgithubusername/HNGi7-First-Task
```

Click on the clone or download button to select to copy the link 

```
https://github.com/yourgithubusername/HNGi7-First-Task.git
```
open your terminal and change directory into the directory you want to use for the project. run

```
git clone https://github.com/yourgithubusername/HNGi7-First-Task.git
```

change directory into the newly cloned `HNGi7-First-Task` folder using the command 
```
cd HNGi7-First-Task
```

create a new branch with your name.

```
git checkout -b yourgithubusername
```

Add your script inside the `scripts` folder

Start the developmenet server.
```
php -S localhost:4000
```

The command above will create a localserver for you. Showing something like this in your terminal.
``` 
PHP 7.3.18-1+ubuntu18.04.1+deb.sury.org+1 Development Server started at Thu Jun  4 08:20:58 2020
Listening on http://localhost:4000
```

open your browser and enter the address
```
http://localhost:4000
```

kindly wait till the page stop loading then find your name using `Ctrl + f` on windows or `command + f` on MacOs.
If your script is passed. Great!!! Congratulations.
You are free to continue the next steps.

Make your changes know to git.
```
git add .
```

Write a commit message 
```
git commit -m "your message goes here"
```

Push your branch to github 
```
git push --set-upstream origin yourbranchname
```

Open Github and create a new pull request. Select the `New Pull request` button. select your branch name by clicking on the `compare: master`. 

NOTE: Kindly use your first name and last name. **