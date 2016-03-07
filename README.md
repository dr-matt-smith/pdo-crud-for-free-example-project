# pdo-crud-for-free-example-project
Example project to illustrate how to use pdo-crud-for-free

# Usage

1. Run ```composer install``` having cloned this project. That will download the required packages into directory **vendor** and setup the Composer autoloader.
1. Create a MySQL DB named 'itb', with a user 'fred' and password 'smith'
1. If running other than 'localhost' then edit the DB_HOST constance in /public/index.php with the URL for the desired MySQL server
1. Run the SQL in /db/products.sql to create and populate a table 'products' with columns 'id' and 'description'
1. Run your websever, pointing the web root to /public

You should now see the 3 product descriptions comma separated in your web browser:

    nut, hammer, pliers,

# See also:

    - (Packagist pdo-crud-for-free)[https://packagist.org/packages/mattsmithdev/pdo-crud-for-free]
    - (GitHub pdo-crud-for-free)[https://github.com/dr-matt-smith/pdo-crud-for-free]
    
    
