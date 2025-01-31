# Login System Program

## Overview

This PHP program implements a simple login system using sessions. It allows users to log in with a username and password, and redirects them to a welcome page upon successful login. If the login fails, an error message is displayed.

## Features

- User authentication with a predefined username and password.
- Session management to keep users logged in.
- Redirects users to a welcome page after successful login.
- Displays an error message for invalid login attempts.

## How to Use

1. **Clone the Repository**

   You can clone this repository using the following command:

   ```bash
   git clone https://github.com/FenilGalani07/Laravel-Assignment-2.git
   ```

2. **Navigate to the Project Directory**

   ```bash
   cd Laravel-Assignment-2
   ```

3. **Run the PHP Scripts**

   Make sure you have a local server environment set up (like XAMPP or WAMP). Place the files in the server's root directory (e.g., `htdocs` for XAMPP).

   - Open your browser and navigate to `http://localhost/login.php` to access the login form.

## Example Usage

1. **Login Form**

   The login form will prompt for a username and password:

   ```html
   <h2>Login Form</h2>
   <form method="post" action="process_login.php">
       <label for="username">Username:</label><br>
       <input type="text" id="username" name="username" required><br><br>
       <label for="password">Password:</label><br>
       <input type="password" id="password" name="password" required><br><br>
       <input type="submit" value="Login">
   </form>
   ```

2. **Successful Login**

   If the username is `user` and the password is `password`, the user will be redirected to the welcome page:

   ```html
   <h2>Welcome, user!</h2>
   <p>You are now logged in.</p>
   <a href="logout.php">Logout</a>
   ```

3. **Invalid Login**

   If the credentials are incorrect, an error message will be displayed:

   ```html
   <h3>Invalid username or password. Please try again.</h3>
   <a href="login.php">Back to Login</a>
   ```

## Contributing

If you would like to contribute to this project, feel free to fork the repository and submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author

- **Fenil Galani**  
  [GitHub Profile](https://github.com/FenilGalani07)  
  Email: fenilgalani111@gmail.com

## Acknowledgments

- Thanks to the PHP community for their support and resources.
```

