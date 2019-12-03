<p align="center"><img src="./public/assets/img/logo_400x144.png" width="400"></p>

# Kaffeina

This is a sample application created for MJ Freeway.

## Description

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
| Code | MVC | Does your code follow common MVC practices? | [ ] |
| Code | Security | Does your code have vulnerabilities? | [ ] |
| Code | Validation | Can your application be broken and does it tell me how to fix my errors? | [ ] |
| Application | Logic | Does the logic used in your application work and is it correct? | [ ] |
| Application | Design | Is your application designed in a way that is easy to use and make sense? | [ ] |
| Application | Functionality | Does the application function as expected? | [ ] |
| Bonus | API Based | Bonus if you build the application so that it is API driven with API endpoints. | [ ] |
| Bonus | Database | Bonus if your application uses the MySQL instance that is installed locally. | [ ] |

Thank you for taking the MJ Freeway Skills Assessment. We look forward to seeing what you produce!

## Design Information

### Palette

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

### Models

* `App\Models\User`
* `App\Models\Beverage`
* `App\Models\BeverageLog`

## Credits

* Logos created using [Wix Logo Maker](https://www.wix.com/logo/maker/esh)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
