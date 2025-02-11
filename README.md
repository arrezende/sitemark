<p align="center"><h1 align="center">SITEMARK</h1></p>

<p align="center"><!-- default option, no dependency badges. -->
</p>
<p align="center">
	<!-- default option, no dependency badges. -->
</p>
<br>

## 🔗 Table of Contents

- [📍 Overview](#-overview)
- [👾 Features](#-features)
- [📁 Project Structure](#-project-structure)
  
- [🚀 Getting Started](#-getting-started)
  - [☑️ Prerequisites](#-prerequisites)
  - [⚙️ Installation](#-installation)


---

## 📍 Overview

The Sitemark is a web platform designed to help users track and share what they are watching. Registered users can add movies and TV series to their personal list, specifying:

The title of the movie or series
The streaming platform (Netflix, Amazon Prime, Max, Disney+, etc.)
An image representing the content
A link to the streaming page
This platform serves as a centralized hub for users to organize their watchlists and discover new content through community interaction.

---

## 👾 Features

 User Registration & Authentication – Users can create an account and log in securely
 
✅ Content Submission – Users can add series/movies with details like title, platform, image, and link

---

## 📁 Project Structure

```sh
└── sitemark/
    ├── README.md
    ├── app
    │   ├── Http
    │   ├── Models
    │   ├── Policies
    │   └── Providers
    ├── artisan
    ├── bootstrap
    │   ├── app.php
    │   ├── cache
    │   └── providers.php
    ├── composer.json
    ├── composer.lock
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── cache.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── logging.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── services.php
    │   └── session.php
    ├── database
    │   ├── .gitignore
    │   ├── factories
    │   ├── migrations
    │   └── seeders
    ├── package-lock.json
    ├── package.json
    ├── phpunit.xml
    ├── postcss.config.js
    ├── public
    │   ├── .htaccess
    │   ├── favicon.ico
    │   ├── index.php
    │   ├── logo.svg
    │   └── robots.txt
    ├── resources
    │   ├── css
    │   ├── js
    │   └── views
    ├── routes
    │   ├── console.php
    │   └── web.php
    ├── storage
    │   ├── app
    │   ├── framework
    │   └── logs
    ├── tailwind.config.js
    ├── tests
    │   ├── Feature
    │   ├── Pest.php
    │   ├── TestCase.php
    │   └── Unit
    └── vite.config.js
```


---
## 🚀 Getting Started

### ☑️ Prerequisites

Before getting started with sitemark, ensure your runtime environment meets the following requirements:

- **Programming Language:** PHP
- **Package Manager:** Npm, Composer


### ⚙️ Installation

Install sitemark using one of the following methods:

**Build from source:**

1. Clone the sitemark repository:
```sh
❯ git clone https://github.com/arrezende/sitemark
```

2. Navigate to the project directory:
```sh
❯ cd sitemark
```

3. Install the project dependencies:


**Using `npm`** &nbsp; [<img align="center" src="https://img.shields.io/npm/v/npm.svg?style={badge_style}&logo=NPM&logoColor=white" />]()

```sh
❯ npm run build
```


**Using `composer`** &nbsp; [<img align="center" src="https://img.shields.io/badge/PHP-777BB4.svg?style={badge_style}&logo=php&logoColor=white" />](https://www.php.net/)

```sh
❯ composer install
```
4. Create the database:
```sh
❯ touch database/database.sqlite | php artisan migrate
```

5. Create the .env file
```sh
❯ cp .env.example .env
```

6. Create the token key
```sh
❯ php artisan key:generate
``` 

7. Create the storage link
```sh
❯ php artisan storage:link
``` 


