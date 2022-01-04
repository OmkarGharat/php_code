// ^^ List of all SQL Query functions and their interpretation

//&& for more information , refer https://www.tutorialrepublic.com/php-reference/php-mysqli-functions.php

// * 1. var_dump($value,  ...$values);

// ! It is a PHP function

// ! $value = The expression to dump.

// ! $values = Further expressions to dump.

$data = 100;
var_dump($data); // int(100)

$add = 100 + 50;
var_dump($add); // int(100)

var_dump($data, $add); // int(100) int(150)

// ?  _________________________________________________________________________________________________________________________

// * 2 mysqli_connect($hostname, $username, $password , $databaseName );

// It opens a new connection to the MySQL server and returns an object representing the connection to the MySQL server.

// Note : all parameters are optional.

// ! It is used to connect to MYSQL server with database using username and password of dtatabase.

// ?_________________________________________________________________________________________________________________________

// * 3. mysqli_query($connection, $query, $resultmode)

// ! Performs a query on the database. and it is used to execute SQL queries.

// The function can be used to execute the following query types;

// Insert
// Select
// Update
// delete

// For successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries it will return a mysqli_result object. For other successful queries it will return TRUE. FALSE on failure

// ! Note : "connection" and "query" parameters are required. "resultmode" parameter is optional

// ?_________________________________________________________________________________________________________________________

// *  4. mysqli_connect_error();

// ! returns the error description from the last connection error, if any. If no error occurred then , it returns NULL

// ?_________________________________________________________________________________________________________________________

// *  5. mysqli_error($connection)

// Returns a string with the error description. If no error occurred , then it returns "" (NULL)

// ?_________________________________________________________________________________________________________________________

// * 6. mysqli_num_rows($result)

// ! returns the number of rows in a table which is present inside database

// ?_________________________________________________________________________________________________________________________

// * 7. mysqli_fetch_assoc($result)

//  Fetches one row of data from the result set and returns it as an associative array. Each subsequent call to this function will return the next row within the result set, or null if there are no more rows.

// ! It fetches rows of data from the result set and returns it as an array

// ?_________________________________________________________________________________________________________________________

// * 8. mysqli_fetch_array()

$select_query = "SELECT * FROM `form_details` ";
$result = mysqli_query($connection, $select_query);

$row = mysqli_fetch_array($result);

$row["Title"]; // ! means `form_details` navachya table madhla jyachi heading / column_heading   'Title' aahe to column ani tya column chya saglya values extract kara. Means data extracted in vertical direction i.e. data extracted "columm wise"

// ? _________________________________________________________________________________________________________________________

// * 9. mysqli_affected_rows($connection)

// ! returns the number of affected rows in the previous MySQL operation.

// ?  _________________________________________________________________________________________________________________________

// * 10. password_hash($password , PASSWORD_BCRYPT)

// ! password_hash() creates a new password hash using a strong one-way hashing algorithm.

// ! password_hash() is compatible with crypt().

// ! Therefore, password hashes created by crypt() can be used with password_hash().

// && for more information, see https://www.php.net/manual/en/function.password-hash.php

// eg.

$password = "abcd1234";

$store_password = password_hash($password, PASSWORD_BCRYPT);

// echo $store_password . "<br>";

// ! PASSWORD_BCRYPT ==> Use the CRYPT_BLOWFISH algorithm to create the hash. This will produce a standard crypt() compatible hash using the "$2y$" identifier. The result will always be a 60 character string, or false on failure.

// encrypted value : $2y$10$ngvfASp879E1HErhto6z/u35K1i2p3k0Bll/5z9ieaJiQ2nriVx4K

// https://www.php.net/manual/en/function.password-hash.php

// ?  _________________________________________________________________________________________________________________________

// * 11. $password_check = password_verify($password, $hash);

// ! password ==> The user's password.

// ! hash ==> A hash created by password_hash().

// ! Verifies that the given hash matches the given password.

// ?  jevha aapan password 1st time database madhe store karto , tevha to BLOWFISH algorithm ne hash madhe convert hoto. AAni password_verify() kartana , new_wntered_password la to BLOWFISH algorithm ne hash madhe convert karto aani 1st_time_stored_password barobar compare karto. Jar tya donhi hash values same astil tar login hoil , nahitar naahi.

// https://www.php.net/manual/en/function.password-verify.php

// ?  _________________________________________________________________________________________________________________________

// * 12. $_GET['']

// ! PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get"

// ^ NOTE : Super global variables are built-in variables that are always available in all scopes.

// && for more information visit , https://www.w3schools.com/php/php_superglobals_get.asp

// eg. 

<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>

// ! When a user clicks on the link "Test $GET", the parameters "subject" and "web" are sent to "test_get.php", and you can then access their values in "test_get.php" with $_GET.

// ?  _________________________________________________________________________________________________________________________

// * 13. $_POST['']

// ? PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables.

// !<html>
// ! <body>

// !<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
// !  Name: <input type="text" name="fname">
// !  <input type="submit">
// !</form> */}

// !<?php
//! if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
// !    $name = $_POST['fname'];
// !    if (empty($name)) {
// !        echo "Name is empty";
// !    } else {
// !        echo $name;
// !     }
// ! }
// ! ?>

// !</body> 
// ! </html> 


// ? The example above shows a form with an input field and a submit button. When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag. Then, we can use the super global variable $_POST to collect the value of the input field.

// ?  _________________________________________________________________________________________________________________________

// * 14. $_SERVER['']

// ! $_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.

// ^ $_SERVER['PHP_SELF'] ===> Returns the filename of the currently executing script

// ^ $_SERVER['REQUEST_METHOD']	===> Returns the request method used to access the page (such as POST)

// ^ $_SERVER['HTTPS'] ===>	check whether the script queried through a secure HTTP protocol or not

// ?  _________________________________________________________________________________________________________________________

// * 15. crypt() vs password_hash() 

// *********** GOOGLE IT ***************

// ! crypt() and password_hash() are both compatible with each other. We can say that password_hash() method is a much more user-friendly wrapper of the crypt() method itself.

// ?  _________________________________________________________________________________________________________________________