# Greeting Program

## Overview

This PHP program greets the user by name. It uses cookies to remember the user's name across sessions. If the user has previously entered their name, the program will greet them; otherwise, it will prompt them to enter their name.

## Features

- Uses cookies to store the username for one hour.
- Greets the user with a personalized message if their name is stored in a cookie.
- Provides a form for the user to enter their name if it is not already stored.

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

3. **Run the PHP Script**

   Make sure you have a local server environment set up (like XAMPP or WAMP). Place the files in the server's root directory (e.g., `htdocs` for XAMPP).

   - Open your browser and navigate to `http://localhost/Greet.php` to access the greeting program.

## Example Usage

1. **Initial Visit**

   When the user first visits the page, they will see a form to enter their name:

   ```html
   <form method="post">
       <input type="text" name="username" placeholder="Enter your name" required>
       <button type="submit">Submit</button>
   </form>
   ```

2. **After Submitting the Name**

   After entering their name, the user will see a personalized greeting:

   ```html
   <h1>Hello, [username]!</h1>
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

