<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## project scenario

 - An api request sent to system for sending mail to users. Using queue in redis server this system  send thousand s of mail without bothering user  and a great benefit is when a mail send to user , system will generate a Real time notification to admin is ' mail sent to user name'  with the help of websocket server,pusher, for frontend data getting, i am using laravel echo in this system.
 - [N.B. Api is JWT protected, so first log in and set bearer token to header]


 ## Api Endpoint & Url for frontend notification
 -http://127.0.0.1:8000/api/auth/send-mail/10 
 
 [N.B: here 10 is the number , how many mail u want to send to lattest user. U can use any number here]

 Forntend Url for ral time notificition: 
 
 -http://127.0.0.1:8000/get-realtime-response

## system requirements
-php 8.1 
-composer


## Installing project (part 1)
-set .env file

 -QUEUE_CONNECTION=redis
 
 -BROADCAST_DRIVER=pusher
 
 -set pusher key and mail settings for your mail

 - create database


-command 
 - composer update
 - npm install
 - npm install pusher js and laravel echo
 - php artisan migrate
 - php artisan db:seed   for 20000 user



## Installing redis to your system locally and run
- -sudo apt-add-repository ppa:redislabs/redis
- 
 -sudo apt-get update
  
 -sudo apt-get upgrade
 
 -sudo apt-get install redis-server
 

 -sudo service redis-server start
 
 -sudo service redis-server stop
 
 -sudo service redis-server restart
 

 - for windows first install wsl 2










