<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <label for="color">Enter your favourite color : </label>
        <input type="text" name="favcolor" id="color">
        <input type="submit" name="submit" value="Check Now">

        <p> 
            <?php
            if (isset($_POST['submit'])) {
                $favorite_color = $_POST['favcolor'];

                switch ($favorite_color) {
                    case 'blue':
                        echo "This is blue color";
                        break;
                    case 'red':
                        echo "This is red color";
                        break;
                    case 'green':
                        echo "This is green color";
                        break;

                    default:
                        echo "This color is not in my list";
                        break;
                }
            }
            ?>
        </p>

    </form>
</body>

</html>