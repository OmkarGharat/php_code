// pHpMyAdmin 

// ^ 1. How to start MySQL ??

// Steps : 

// ! 1. Run "XAMPP Control Panel" as administrator

// ! 2. Click on "start" button of "Apache" and "MySQL" and wait until MySQl turns green color

// ! 3. After MySQl turns green in color , click on "Admin" button or type "localhost/phpmyadmin/" in browser and hit enter , so you will be go to pHpMyAdmin page 

// ^ Note : The default username for pHpMyAdmin is 'root' and it's default password is '' (null or nothing)

// * getting the list of all databases  

// for that just click on "Databases" buutton present at top of screen at localhost/phpmyadmin/

// * create a new database 

// 1. click on "new" present on left side of screen

// 2. then , at "Database Name" , type the name that you want to give to your database. 

// 3. then , click on "create" . Now , new database is created and it is automatically opened.

// * Create a table inside database.

// Now , give a name to table by typing inside "name" box , then select "Number of columns"(default is 4) , and then click on "Go" button 

// * give HEadings to columns

// In "Name" column , there are 4 vertical boxes (since no. of columns is 4) , these are column names

// * select Type of columns 

// "Type" means the content of that column will be int , VARCHAR , date or anyting else.

// ^ Note : Varchar in MySQL is a data type used for storing text whose length can have a maximum of 65535 characters

// * Length / Values 

// In "Length / Values" column , we will write the length of column names defined in "Name" column .i.e. 
// (त्या column मध्ये जो data आपण insert करणार आहो , त्या data ची length किती असेल )

// * A_I (Auto Increment)

// you maybe not see "A_I" at the start so just scroll it horizontally using the given scrollbar . A_I stands for Auto Increment . If we tick 'A_I' box then the value of Null Index column will automatically set to "PRIMARY" .

// A_I (Auto Increment) increments that particular column value by 1

// then , click on "save" button to generate database

// * Insert values in database

// 1. click on "Insert" buutton present at top of screen 

// 2. Then in "Null Value" column , insert values as per column name defined in previous steps

// 3. After filling values of all columns (which were previously defined by us) , click on "Go" button . Now , values are inserted into database.

// * export file

// 1. click on "Export" buutton present at top of screen 

// 2. select "CSV" format 

// 3. make sure "Dump all rows" is selected. If not then select "Dump all rows" option

// 4. then , click on "Go" button to export database as CSV file 
