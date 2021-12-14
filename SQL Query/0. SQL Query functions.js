// List of all SQL Query functions and their interpretation

// * 1. mysqli_connect($host, $username, $password , $dbname , $port , $socket);

// It opens a new connection to the MySQL server and returns an object representing the connection to the MySQL server.

// Note : all parameters are optional.

// * 2. mysqli_connect_error(); 

// returns the error description from the last connection error, if any. If no error occurred then , it returns NULL

// * 3. mysqli_query($connection, $query, $resultmode)

// performs a query against a database. 

// For successful SELECT, SHOW, DESCRIBE, or EXPLAIN queries it will return a mysqli_result object. For other successful queries it will return TRUE. FALSE on failure

// Note : "connection" and "query" parameters are required. "resultmode" parameter is optional

// * 4. mysqli_error($connection)

// Returns a string with the error description. If no error occurred , then it returns "" (NULL)

// * खालच्या functions ची माहिती लिहा 

// var_dump ==> php function

// mysqli_connect_error

// mysqli_num_rows

// mysqli_fetch_assoc



