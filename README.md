<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Steps

Steps to use this project.

1. Clone the repo with: `git clone https://github.com/franbarreneche/twitter-bot.git`
2. Use composer to install dependencies: `composer install`
3. Run any of the available commands.

## Commands Available
To run any of this commands you need to use artisan, writing `php artisan`
 - `tweet:btc-percentage-completed` : Tweets the percentage of blocks already mined of the total blocks that are needed to mine every one of the 21M btc.

## Run the Scheduler
Run the scheduler to automatically run the commands at the designed time intervals with the code: `php artisan schedule:work`
 - `tweet:btc-percentage-completed` : It's scheduled to run every 1st of the month at 00:00 UTC.
