<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find power</title>
    <style>
        .container{
            display: flex;
            justify-content: center;
            border: 5px solid rgb(0,0,0,0.20);
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Find Power of any number in PHP</h1>
    </div>

    <h2>
        <?php
            $a = 5;
            $b = 2;

            $power = pow($a , $b);

            echo $power;
        ?>
    </h2>

</body>
</html>