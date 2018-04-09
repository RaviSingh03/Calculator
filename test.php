<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <form method="post" action="">
       Enter The Number: <input type="text" name="text1">
        <input type="submit" name="btnSubmit">
    </form>
</body>
</html>


<?php

if(isset($_POST["btnSubmit"])){
    $a = $_POST["text1"];

    $operator = false;
    if (stripos($a, "+")) {
        $operator = substr($a, stripos($a, "+"), 1);
        $firstNumber = substr($a, 0, stripos($a, "+"));
        $lastNumber = substr($a, stripos($a, "+")+1);
    } elseif (stripos($a, "-")) {
        $operator = substr($a, stripos($a, "-"), 1);
        $firstNumber = substr($a, 0, stripos($a, "-"));
        $lastNumber = substr($a, stripos($a, "-")+1);
    } elseif (stripos($a, "*")) {
        $operator = substr($a, stripos($a, "*"), 1);
        $firstNumber = substr($a, 0, stripos($a, "*"));
        $lastNumber = substr($a, stripos($a, "*")+1);
    } elseif (stripos($a, "/")) {
        $operator = substr($a, stripos($a, "/"), 1);
        $firstNumber = substr($a, 0, stripos($a, "/"));
        $lastNumber = substr($a, stripos($a, "/")+1);
    }

    if ($operator == false)
        die("Wrong operator");

   if($operator == '+') {
        echo ($firstNumber + $lastNumber);
    } else if ($operator == '-') {
        echo ($firstNumber - $lastNumber);
    } else if ($operator == '*') {
        echo ($firstNumber * $lastNumber);
    } else if ($operator == '/') {
        echo ($firstNumber / $lastNumber);
    } else {
        echo "false";
    }
}
?>

