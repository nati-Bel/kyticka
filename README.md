# Kyticka_back

![alt text](https://res.cloudinary.com/dk8lzhnjb/image/upload/v1696161040/kyticka/mysoumvtaamengkgdeid.png)

** an ongoing project **

Welcome to the backend repository of Kyticka. This project is the server-side of the KYTICKA flowershop's website. Here you will find information on how to run the project and the technologies used.

## Technologies

Kyticka_back project makes use of the following technologies:

- Composer
- php
- Laravel
- mySQL

## Data Model
The project uses the following data model:

![alt text](https://res.cloudinary.com/dk8lzhnjb/image/upload/v1696160934/kyticka/j86jid1aiy9f7izrx1ev.jpg)

## Usage Instructions

To run this project locally, make sure you have php and composer downloaded on your computer. Then, follow these steps:

1.  Clone this repository to your local machine.
2.  Run "composer install" to install all the necessary dependencies.
3.  Make a copy of env.example, rename it as .env and make all the necessary changes to configure the connection to your database (DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)
4.  Run "php artisan key:generate" so than and API key is automatically added to your .env file.
5.  Run "php artisan migrate" to create all the necessary tables in your database.
6. You're ready to go!
