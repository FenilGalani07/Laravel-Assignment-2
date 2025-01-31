# Vowel Counter Program

This is a simple PHP program that counts the number of vowels in a given string. It demonstrates basic string manipulation and function usage in PHP.

## Features

- Counts both uppercase and lowercase vowels.
- Simple and easy to understand code structure.
- Outputs the number of vowels found in the input string.

## How It Works

The program defines a function `countVowels` that takes a string as input and iterates through each character to check if it is a vowel. The vowels considered are: `a, e, i, o, u` (both uppercase and lowercase).

### Code Example

Here is the main part of the code:

```php
<?php
function countVowels($string) {
    $vowels = 'aeiouAEIOU';
    $count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos($vowels, $string[$i]) !== false) {
            $count++;
        }
    }

    return $count;
}

$inputString = "Hello World!";
echo "Number of vowels in '$inputString': " . countVowels($inputString);
?>
```

## Usage

1. Clone the repository:
   ```bash
   git clone https://github.com/FenilGalani07/Laravel-Assignment-2.git
   ```

2. Navigate to the project directory:
   ```bash
   cd Laravel-Assignment-2
   ```

3. Run the PHP script:
   ```bash
   php Vowels.php
   ```

## Author

- **Fenil Galani**  
  [GitHub Profile](https://github.com/FenilGalani07)  
  Email: fenilgalani111@gmail.com

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Thanks to the PHP community for their continuous support and resources.


