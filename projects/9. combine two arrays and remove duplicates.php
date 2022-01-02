<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP University Question #1</title>
    <style>
       h1{
           color: red ;
           box-shadow: 0 0 8px rgb(0 0 0 / 30%);
           text-align: center;
           padding: 10px;
           margin: 10px;
       }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="margin : 1rem">Write a program in PHP to combine 2 arrays and remove duplicate elements from them</h1> 
    </div>

    <?php
        
       function arrayUnion($arr1 , $arr2){

        $merge = array_merge($arr1, $arr2);

        echo "<pre> <h1>Union of arr1 and arr2 : </h1>";
        print_r($merge);
        // echo "</h1>";
        $res = array_unique($merge);
        echo "<pre> <h1>Removed duplicate elements from Union of arr1 and arr2 : </h1>";
        print_r($res);

       }

       $arr1 = array('red' , 'green' , 'blue');
       $arr2 = array('Black' , 'Crimson' , 'blue' , 'red' , 'pink');

       arrayUnion($arr1 , $arr2);


    ?>
</body>
</html>