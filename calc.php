<html>
    <head>
        <h2> CALCULATOR </h2>
    </head>

    Введите 2 числа: 
    <form action="calc.php" method="post">
        Digit 1: <input type="number" name="digit1">
        Digit 2: <input type="number" name="digit2">
        <input type="submit" name="calculate" id="calculate" value="calculate">

    <br>    
        <input type="radio" name="plus" id="plus" value="plus" />
        <label for="plus">Сложить</label>

        <input type="radio" name="minus" id="minus" value="minus" />
        <label for="munus">Вычесть</label>

        <input type="radio" name="multiply" id="multiply" value="multiply" />
        <label for="multiply">Умножить</label>

        <input type="radio" name="divide" id="divide" value="divide" />
        <label for="divide">Разделить</label>

    </form>

    <?php
        if (isset($_POST[digit1]) and isset($_POST[digit2])){
            $digit1 = $_POST['digit1'];
            $digit2 = $_POST['digit2'];
        
        if (isset($_POST['plus'])){
            echo $digit1 + $digit2;
        }    

        if (isset($_POST['minus'])){
            echo $digit1 - $digit2;
        }
        
        if (isset($_POST['multiply'])){
            echo $digit1 * $digit2;
        }

        if (isset($_POST['divide'])){
            echo $digit1 / $digit2;
        }    }
        
    ?>
</html>