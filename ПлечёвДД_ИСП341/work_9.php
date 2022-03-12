<?php
if(!isset ($_POST['submit'])){
    ?>
    <form method="post" action="work_9.php">
        <p>Введите значения длины и ширины прямоугольника</p>
        <p>Длина:  <input type="text" name="length"/>
            Ширина:  <input type="text" name="width"/></p>
        <input type="submit" name="submit" value="submit" />
    </form>
    <?php
} else {
    $l = $_POST['length'];
    $w = $_POST['width'];
    function area($l, $w){
        $area = $l * $w;
        return $area;
    }
    $area =  area($l, $w);
    echo "Площадь прямоугольника длиной $l и шириной $w имеет площадь $area";
}
?>