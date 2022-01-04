<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 6px 0 rgba(0,0,0,.1);
            box-shadow: 0 0 8px rgb(0 0 0 / 30%);
        }

        span {
            color: red;
        }




    </style>
</head>

<body>
    <div class="container">
        <h1>Secure Your Password using <span>BLOWFISH</span> Hasing Algorithm</h1>
    </div>

    <?php
        
        // There are multiple Hasing Algorithms available. some of them are as follows:
        
        // 1. MDA5 ==> Least secure Algorithm , NOT RECOMMENDED

        // 2. SHA-1 ==> NOT RECOMMENDED

        // 3. SHA-2 ==> SHA-512 , SHA-256

        // 4. AES

        // 5. BLOWFISH ==> MOST SECURE Algorithm , FREE OF COST , SLOW (to decrypt)

        // we will use BLOWFISH algorithm 

        $password = "abcd1234";

        $store_password = password_hash($password , PASSWORD_BCRYPT);

        echo $store_password . "<br>";

        // encrypted value : $2y$10$ngvfASp879E1HErhto6z/u35K1i2p3k0Bll/5z9ieaJiQ2nriVx4K

        // here , 2y means ==> BLOWFISH algorithm

        // 10 ==> cost is 10 ( denotes the algorithmic cost that should be used and it takes a particular amount of time load / decrypt and as the number is bigger , it takes more time to load a page / decrypt password ) 

        $newPassword = "321boomGuys!";
        // $newPassword = "abcd1234";

        $password_check = password_verify($newPassword, $store_password);

        if($password_check){
            echo "Password verified successfully";
        }else{
            echo "Wrong password!!";
        }

    ?>
</body>

</html>