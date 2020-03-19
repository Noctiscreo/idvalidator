# idvalidator

This patient ID validator requires an installation of PHPUnit to run the validation tests. 
https://phpunit.de/getting-started-with-phpunit.html

Once PHPUnit is installed:

1. Create a folder (e.g. 'validator').
2. Inside the 'validator' folder, create another folder called 'test'.
3. Place index.php from this repository into the 'validator' folder. 
4. Place ValidateTest.php from this repository into the 'validator/test/' folder.

Run the validator tests by using the PHPUnit command line:

phpunit ValidateTest

Also, dummy data can be inserted manually on line 25 of index.php to test specific inputs. 
The default is '1111111111', a failure. Anythiung that doesn't meet the requirements should return a failure:

Requirements: 
1. A patient ID must be exactly 10 characters long.
2. No characters other than digits are allowed.
3. A patient ID cannot consist of 10 identical digits (e.g. 1111111111).
