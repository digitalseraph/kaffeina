<p align="center"><img src="./public/assets/img/logo_400x144.png" width="400"></p>

# Kaffeina

This is a sample application created for MJ Freeway.

## About

Welcome to Kaffeina! With this application you may track your caffeine intake from various drinks and beverages. 

It's this simple:

1. Manage or Create New Beverages
    * You can add beverages with the following information: Name, Description, Caffeine Amount per serving, and Servings per container. You may access this through the dashboard links or the top navigation bar
2. Manage or Create New Log entries to track your caffeine Intake
    * You can add new log entries that contain: a beverage and a date and time, both selected by you. You can manage your Beverage Log entries through the dashboard links or the top navigation bar

## Features

* Kaffeina summarizes the most important information as Status Cards, located on the dashboard. These cards include:
  * How much more caffeine you safely intake
  * How much caffeine you currently have in your system
  * The total caffeine you have consumed over the lifetime of using this app
  * Your maximum caffeine limit
* User Registration and Logins
* UI CRUD features for Beverages
* UI CRUD features for Beverage Logs
* Easy User and data seeding using environment variables (dotenv/.env)
* Custom Kaffeina configuration file with defaults and using .env (config/kaffeina.php)
* Polymorphic relationships and utility functions for users, beverages, and log entries
* Vue Bootstrap DateTime Picker component, customized to show a more complete Vue component
* Custom Webpack config with versioning, browsersync, autoloading, and sourcemaps
* Progess bar indicating percentage towards maximum caffeine amount
* Mobile and responsive
* User cannot add log entries that would take them over their maximum caffeine amount
* Caffiene intake allows log entries to fall off after a specific time, so that the current intake is calculated only from log entries within a specified time. This is easily set in either `config/kaffeina.php` or `.env` as `kaffeina.settings.caffeine_expiration_time` and `KAFFEINA_CAFFEINE_EXPIRATION_TIME`, respectively. A default of 6 hours ensures user safety, but 4 hours is used in .env as a standard.

## Setup

### Requirements

1. PHP
2. Composer
3. Node.JS and NPM
4. MySQL
5. Homestead Vagrant Box (didn't have time to setup docker script for this)

### Application Setup

1. Clone this repository: `git clone <REPLACE>`
2. Copy and modify .env: `cp .env.example .env`
    1. Make sure the following are set correctly for your system, defaults are shown:
        * `APP_URL=http://localhost`What you have to work with
        * `DB_CONNECTION=mysql`
        * `DB_HOST=127.0.0.1`
        * `DB_PORT=3306`
        * `DB_DATABASE=kaffeina`
        * `DB_USERNAME=homestead`
        * `DB_PASSWORD=secret`
    2. Additional variables, specific to Kaffeina:
        * `KAFFEINA_CAFFEINE_EXPIRATION_TIME=4`             # How long for caffeine to leave your system. This is anywhere from 4-6 hours typically
        * `KAFFEINA_CREATE_TEST_USER=TRUE`                  # create the test user?
        * `KAFFEINA_TEST_USER_NAME="Kara Thrace"`           # test user name
        * `KAFFEINA_TEST_USER_EMAIL="demo@kaffeina.test"`   # test user email
        * `KAFFEINA_TEST_USER_PASSWORD="secret"`            # test user password
        * `KAFFEINA_TEST_USER_MAX_CAFFEINE_AMT=500`         # test user maximum caffeine amount
        * `KAFFEINA_DEV_SEED_BEVERAGE_DEFAULTS=TRUE`        # Seed predefined beverages
        * `KAFFEINA_DEV_SEED_BEVERAGE_AMOUNT=0`             # Additional random beverages
        * `KAFFEINA_DEV_SEED_USER_AMOUNT=0`                 # Additional random users
3. Generate a new application key: `php artisan key:generate`
4. Create a new database for Kaffeina (named kaffeina or whatever you put in .env)
5. Install PHP dependencies: `composer install`
6. Install Node dependencies: `npm install`
7. Run the live server: `npm run watch`

At this point, you should have an open browser with the website open. You can either register a new user, or use the default user listed in your `.env`

There are further directions upon logging in. Enjoy!

### Notes

The section title `What you have to work with` above, says i was supplied with some resources, but this was not the case, so I actually used the most up-to-date versions of all software, libraries, and tools.
This application was developed with:

1. Homestead Vagrant Box
    1. Vagrant 2.2.6
    2. VirtualBox 5.2.24_Debian r128122
    3. laravel/homstead 9.0.1
2. PHP 7.4
3. Composer 1.9.1
4. MySQL ver 14.14, distribution 5.7.28-0ubuntu0.18.04.4
5. Laravel 6.2
6. Node.JS v12.13.1
7. npm v6.13.1

### Palette

> Not fully used

* Dark Tan
  * Swatch: <span style="width: 1em; height: 1em; display: inline-block; background-color: #DB7D58; vertical-align: middle;"></span>
  * Hex: `#DB7D58`
  * RGB: `rgb(219, 125, 88)`
  * HSL: `hsl(309, 49%, 35%)`
* Bright Tan
  * Swatch: <span style="width: 1em; height: 1em; display: inline-block; background-color: #FBAB60; vertical-align: middle;"></span>
  * Hex: `#FBAB60`
  * RGB: `rgb(251, 171, 96)`
  * HSL: `hsl(354, 67%, 38%)`
* Blue
  * Swatch: <span style="width: 1em; height: 1em; display: inline-block; background-color: #5A609F; vertical-align: middle;"></span>
  * Hex: `#5A609F`
  * RGB: `rgb(90, 96, 159)`
  * HSL: `hsl(127, 38%, 62%)`
* Light Gray
  * Swatch: <span style="width: 1em; height: 1em; display: inline-block; background-color: #FADDD9; vertical-align: middle;"></span>
  * Hex: `#FADDD9`
  * RGB: `rgb(250, 221, 217)`
  * HSL: `hsl(353, 87%, 85%)`
* Dark Gray
  * Swatch: <span style="width: 1em; height: 1em; display: inline-block; background-color: #636B6F; vertical-align: middle;"></span>
  * Hex: `#636B6F`
  * RGB: `rgb(99, 107, 111)`
  * HSL: `hsl(140, 42%, 44%)`
* Off White
  * Swatch: <span style="width: 1em; height: 1em; display: inline-block; background-color: #FAE9D6; vertical-align: middle;"></span>
  * Hex: `#FAE9D6`
  * RGB: `rgb(250, 233, 214)`
  * HSL: `hsl(353, 91%, 84%)`

### Logo

The logos were created using [Wix Logo Maker](https://www.wix.com/logo/maker/esh)

<hr>

## Project Information

The below information comes from the project document, but is formatted in markdown now.

### Description

Welcome to the MJ Freeway Engineering Skills Assessment. Below is the instructions for completing the skills assessment. If at any
time you have any questions, feel free to contact David McCullough at david@mjfreeway.com. We look forward to seeing what you
produce!

## Minimum Requirements

Below are the minimum requirements for your application. Please feel free to go beyond the minimum requirements and showcase some of the skills!

### Application Description

I love caffeine... I need an application that will tell me if I am having safe levels of caffeine. Assuming that 500mg of caffeine is safe. I need to be able to select one of my favorite drinks, tell you how many I consumed. You need to tell me how many more of my favorite drinks I can have to stay in a safe limit.

### Favorite Caffeinated Drinks

| Drink | Description |
| ----- | ----------- |
| Monster Ultra Sunrise | A refreshing orange beverage that has 75mg of caffeine per serving. Every can has two servings. |
| Black Coffee | The classic, the average 8oz. serving of black coffee has 95mg of caffeine. |
| Americano | Sometimes you need to water it down a bit... and in comes the americano with an average of 77mg. of caffeine per serving |
| Sugar free NOS | Another orange delight without the sugar. It has 130 mg. per serving and each can has two servings. |
| 5 Hour Energy | And amazing shot of get up and go! Each 2 fl. oz. container has 200mg of caffeine to get you going. |

### What you have to work with

You have been provided your own development box. It has Amazon Linux installed with, nginx, PHP, mysql setup for you. If you install your linux project into /var/www/project, it should just work for you. If you need to adjust your nginx config, it is located at /etc/nginx/conf.d/project.conf. A blank MySQL db has been created for you if you need it called project. The mysql instance is installed locally and you should have received your credentials separately.

| Item | Description |
| ---- | ----------- |
| Linux | Amazon Linux AMI release 2017.09 |
| Nginx | nginx version: nginx/1.12.1 |
| MySQL | Server version: 5.5.59 |
| Composer | Composer version 1.6.3 |
| GIT | git version 2.13.6 |
| PHP | PHP 7.1.17 goto phpinfo.php on your box to review php specs. |
| PHP-FPM | PHP 7.1.17 fpm­fcgi |
| VPN Access | To review your site on the server, you need to be connected to the VPN. Create a host entry locally to the IP of your box. It must start with project (example project.myname.test) in order for the application to work. |

### Min. Requirements

| Requirement | Description |
| ----------- | ----------- |
| Data entry page | A place for me to select a beverage and tell you how many I have consumed. |
| Response | A response, it can be same page or another page where I can see how much more I can consume. |

### Scoring

This project is very geenv('AUTH0_CLIENT_SECRET')neral. It has room for many improvements and a lot of creativity. You are more then welcome to apply as much as you would like to showcase your skills. Below is what we will be scoring your application on.

| Type | Parameter | Description | Y/N |
| ---- | --------- | ----------- | --- |
| Code | MVC | Does your code follow common MVC practices? | Yes |
| Code | Security | Does your code have vulnerabilities? | Most Likely, due to time, but good luck finding them! |
| Code | Validation | Can your application be broken and does it tell me how to fix my errors? | Yes |
| Application | Logic | Does the logic used in your application work and is it correct? | Yes |
| Application | Design | Is your application designed in a way that is easy to use and make sense? | Yes |
| Application | Functionality | Does the application function as expected? | Yes |
| Bonus | API Based | Bonus if you build the application so that it is API driven with API endpoints. | NO |
| Bonus | Database | Bonus if your application uses the MySQL instance that is installed locally. | Yes |

Thank you for taking the MJ Freeway Skills Assessment. We look forward to seeing what you produce!

## Credits

* Logos created using [Wix Logo Maker](https://www.wix.com/logo/maker/esh)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
