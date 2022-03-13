<html>
<title> PHP Gallery test page </title>
<head>
    <h2> Галерея блин наконец </h2>
</head>
<section id="gallery">
    <?php
        require_once 'data.php';
        $count = count($arr_img);
        for ($i=0; $i < $count; $i++){ 

    ?>
    <img src="/images/<?php echo $arr_img[$i] ?> ">
    <?php } ?>

<?php
// echo  '<img src="/images/IMG_4494.JPG">';
// echo   '<img src="/images/IMG-1473.jpg">';
    ?>



</section>
</html>