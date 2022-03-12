<?php
//Создать массив
$months=array(
    'Январь'=>31,
    'Февраль'=>'28 дней, если високосный год 29',
    'Март'=>31,
    'Апрель'=>30,
    'Май'=>31,
    'Июнь'=>30,
    'Июль'=>31,
    'Август'=>31,
    'Сентябрь'=>30,
    'Октябрь'=>31,
    'Ноябрь'=>30,
    'Декабрь'=>31
);

function makeOptions($value){
    foreach($value as $k => $v){
        echo "<option value=\"$k\">" .ucfirst($k). "</option>\n";
    }
}

function makeSelect($name, $value){
    if (!is_array($value)){
        exit ("Error");
    }
    echo "<select name=\"$name\">\n";
    makeOptions($value);
    echo "</select>" ;
}

if(!isset ($_POST['submit'])){
    ?>
    <form method="post" action="work_13.php">
        <p>Выберите месяц</p>
        <?php
        makeSelect('month', $months);
        ?>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php
} else {
    $month = $_POST['month'];
    if ($month == 'Февраль'){
        echo "Месяц Февраль имеет " . $months['Февраль'] . ".";
    }else{
        echo "Месяц $month имеет $months[$month] дней.";
    }
}
?>