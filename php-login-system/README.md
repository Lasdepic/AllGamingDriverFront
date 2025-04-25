# PHP Login System

This project is a simple PHP login system that allows users to log in and access a dashboard. It includes user authentication, session management, and a basic user interface.

## Project Structure

```
php-login-system
├── src
│   ├── Index.php        # Homepage that checks user login status
│   ├── login.php        # Handles user authentication
│   ├── logout.php       # Manages user logout
│   └── dashboard.php     # Displays user-specific content for logged-in users
├── style.css            # Styles for the application
└── README.md            # Documentation for the project
```

## Features

- User authentication with session management
- Login and logout functionality
- Protected dashboard accessible only to logged-in users
- Simple and clean user interface

## Setup Instructions

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Ensure you have a local server environment set up (e.g., XAMPP, WAMP).
4. Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).
5. Open your web browser and navigate to `http://localhost/php-login-system/src/Index.php`.

## Usage

- To log in, enter your username and password on the homepage.
- If the credentials are correct, you will be redirected to the dashboard.
- You can log out by clicking the logout link, which will redirect you back to the homepage.

## Notes

- This project uses a simple array for user credentials. For production use, consider implementing a database for user management.
- Ensure that PHP sessions are enabled on your server for the login system to function correctly.