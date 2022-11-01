# README

HELLO!
Here is a simple deployment of the Janrain Social Login application. To
demonstrate, I have made a mock website which a user may log into using Google+
or Facebook.

Step-by-step instructions can be found on the Janrain website:
http://developers.janrain.com/how-to/social-login/implementation-steps/

Helper functions courtesy of Janrain's github repo:
https://github.com/janrain/Janrain-Sample-Code

## DOCKER
```sh
# build:
docker build -t amandaryman/magnificent-beluga .
# run
docker run --rm -it -p 8082:80 amandaryman/magnificent-beluga
```

After staring a Docker container, the app can be viewed at http://localhost:8082

View 'API diagram.jpg' for a simplified graphical overview of the process.
This project can also be viewed online at http://www.amandaryman.com/apitest/

THANK YOU!
Amanda Ryman
amandaryman@gmail.com
February 2016
