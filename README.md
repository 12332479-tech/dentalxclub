# DentalXClub

A dental clinic website project built with HTML, CSS, JavaScript, PHP, and MySQL integration.

## Features

- Clinic information and doctor profiles
- Appointment form
- Responsive page styling
- PHP form handling with database integration

## Tech stack

HTML5, CSS3, JavaScript, PHP, and MySQL.

## Project walkthrough

The public pages introduce the clinic and its doctors, while the appointment form collects a visitor's request and passes it to the PHP handling layer. Database configuration is kept local so the public repository contains no credentials or private appointment records.

## Notes

The local database configuration and appointment submissions are intentionally excluded from this public repository.

## Run locally

1. Install PHP and MySQL.
2. Create a local database and configure a private `db_connect.local.php` file.
3. Serve the project with Apache, XAMPP, or `php -S localhost:8000`.
4. Open `http://localhost:8000` and test the appointment form with sample data only.