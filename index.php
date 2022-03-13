
<html>
<title>PHP TESTING PAGE</title>    
<head>
    <h2> Конвертер дюймов в сантиметры </h2>
</head>

<body>
    <p> Введите дюймы: </p>
    <form action="index.php" method="post">
    Дюймы: <input type="digit" name="inches">
    <input type="submit" name="calculate1" id="calculate1" value="calculate!">
    </form>

    <?php
    if (isset($_POST[inches])) {
        $inch = $_POST['inches'];
        echo $inch, ' дюймов равно ',  round($inch * 2.54, 2), ' сантиметрам. ';
    }
    ?>

<br>
<header><h2> Генератор случайных чисел </h2> </header>
    <form action="index.php" method="post">
    <label for="num1">сгенерировать случайно число от: </num1>
    <input type="number" id="num1" name="num1" value="1">
    до:
    <input type="number" id="num2" name="num2" value="99">
    <input type="submit" name="generate" id="generate" value="generate">
    
    <?php
    if (isset($_POST['num1']) and isset($_POST['num2'])){
        echo "Результат: ", rand($_POST['num1'], $_POST['num2']);
    }
    ?>
<br><br>

        <p><h2>Работа с массивами:</h2></p>
        <p>Дано: массив из сотрудников ООО "Муррако".</p>
        <?php
        $arr_employees = [
            "Мохсен" => "Генеральный директор", 
            "Илья" => "Заместитель директора", 
            "Павел" => "просто приходит", 
            "Баяна" => "менеджер", 
            "Александр" => "Заведующий складом"
        ];
        
        echo '<h4>', 'Список сотрудников (цикл foreach): </h4> ';
        foreach ($arr_employees as $name => $occupation){
            echo '<p>';
            echo $name, ", ", $occupation; 
            echo '</p>';
        }
        ?>

<br>
    <p><h2><a href="calc.php">Калькулятор</a></p> 
    <p><a href=gallery.php>Галерея изображений</a> </p>
    <p><a href=randgen.php>Генератор  случайных чисел на PHP</a></h2> <br> 




</body>
</html>