<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    function myTest(){
        static $x = 0;
        echo $x;
        $x++;
    }
    myTest();
    myTest();
    myTest();
    ?>
</body>
</html>