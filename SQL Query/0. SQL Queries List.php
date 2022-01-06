<?php

// ?___________________________________________________________________________________________________________________________

// * 1. Creating a table

$varible_name = "CREATE TABLE `database_name`.`table_name` ( `Column1_name` column1_type(length_of_column1) NOT NULL AUTO_INCREMENT, 
Column2_name` column2_type(length_of_column2) NOT NULL, 
Column3_name` colum3_type(length_of_column3) NOT NULL , PRIMARY KEY (`column_name_that_u_want_to_be_primary.`)) " ;

// eg. 

$mytable = "CREATE TABLE `Mydb1`.`Students` ( `Sr no.` INT(6) NOT NULL AUTO_INCREMENT , `Student Name` VARCHAR(30) NOT NULL , `Roll Number` INT(3) NOT NULL , PRIMARY KEY (`Sr no.`))";

// ^ NOTE : table create करायचा असेल तर शक्यतो manually (pHpMyAdmin मध्ये database  मध्ये  जाऊन ) create करावा 

// ?___________________________________________________________________________________________________________________________

// * 2. Inserting data into table 

$table_data = "INSERT INTO `table_name` (`Column1_name`, `Column2_name`, `Column3_name`) VALUES ('1st_value_of_column1', '2nd_value_of_column1', '3rd_value_of_column1'), ('1st_value_of_column2', '2nd_value_of_column2', '3rd_value_of_column2')";

// eg.

$table_data = "INSERT INTO `students` (`Sr no.`, `Student Name`, `Roll Number`) VALUES ('3', 'Virat', '18'), ('4', 'Ab de villiers', '17')";

// ^ table "students" मध्ये  "Sr no." च्या "VALUES"  3 आणि 4 आहेत respectively, "Student Name"  च्या "VALUES"  Virat आणि Ab de villiers आहेत respectively , आणि "Roll Number"  च्या "VALUES"  18 आणि 17 आहेत respectively.


// ?___________________________________________________________________________________________________________________________

// * 3. Selecting / fetching data from the table on output screen.

$select_data = "SELECT * FROM `table_name`";

$select_data = "SELECT * FROM `table_name` WHERE `column1` = '$value1' " ;

// eg. 

$select_query = "SELECT * FROM `form_details` ";

$select_query = "SELECT * FROM `signup_form` WHERE `email` = '$Email' " ;

// ^ table "form_details"  मधला सर्व data select करा 

// ?___________________________________________________________________________________________________________________________

// * 4. Updating data from the table

$update_data = "UPDATE `table_name` SET `column1` = 'value1' WHERE `column2` = 'value2'";

// eg. 

$update_data = "UPDATE `form_details` SET `password` = '112233' WHERE `Email` = 'abc@mail.com'";

// ^ table "form_details" मध्ये जिथे email id "abc@mail.com" आहे तिथे password "112233" SET करा 

// ?___________________________________________________________________________________________________________________________

// * 5. Deleting  data from the table.

$delete_query = "DELETE FROM `table_name` WHERE `column1` = 'value1' ";

// eg.

$delete_query = "DELETE FROM `form_details` WHERE `Sr No.` =   '1' ";

// ^  table "form_details" मध्ये जिथे  "Sr No." => "1" आहे  तो row  DELETE करा 

// ?___________________________________________________________________________________________________________________________


?>

