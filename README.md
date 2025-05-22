# Web Programming Project – PHP Website

## 📚 Overview

This is a basic **PHP-based web application** that allows users to register by filling out a form with their **Name, Email, and Password**. It stores user information in a **MySQL database**, checks for duplicates, and gives visual feedback. Additional pages like **About**, **Services**, and **Contact** are included for a complete frontend flow.


## 📁 Project Files

| File            | Description                                |
|-----------------|--------------------------------------------|
| `index.php`     | Homepage                                   |
| `register.php`  | User registration form and logic           |
| `about.php`     | About Us page                              |
| `Service.php`   | Services page                              |
| `contact.php`   | Contact form page                          |
| `userinfo.php`  | Displays registered users from the DB      |
| `navbar.php`    | Common navigation bar included in pages    |

---

## 🛠️ How to Set Up

### 🔧 Prerequisites
- PHP (WAMP/XAMPP/LAMP Server)
- MySQL or MariaDB
- Web browser

### 🗃️ Database Setup

1. Open **phpMyAdmin**.
2. Run these SQL commands:

## sql
CREATE DATABASE usersDetails;
USE usersDetails;

CREATE TABLE mydata (
  name VARCHAR(40),
  email VARCHAR(40),
  password VARCHAR(40)
);



## 🔧 Technologies Used
- Frontend: HTML, CSS , Bootstrap
- Backend: PHP
- Database: MySQL
- Server: WAMP/XAMPP (localhost)


## 📋 Features
- User registration with form validation
- Duplicate check for email or name
- Data stored securely in MySQL database
- Session and Cookie support (for learning/demo purpose)
- Displays success alert and redirects after submission


## Setup Instructions
1. **Install WAMP or XAMPP**
2. **Place the project folder** (`php-project/`) in `www` (WAMP) or `htdocs` (XAMPP)
3. **Start Apache and MySQL** via WAMP/XAMPP Control Panel
4. **Create Database:**
