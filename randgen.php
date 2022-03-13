<html>
<title> Генератор случайных чисел </title>
<header><h3> Генератор случайных чисел </h3> </header>
    <form action="randgen.php" method="post">
    <label for="num1">сгенерировать случайно число от: </num1>
    <input type="number" id="num1" name="num1" value="1">
    до:
    <input type="number" id="num2" name="num2" value="99">
    <input type="submit" name="generate" id="generate" value="generate">

    <?php
    if (isset($_POST['num1']) and isset($_POST['num2'])){
        echo rand($_POST['num1'], $_POST['num2']);
    }
    ?>

</html>
