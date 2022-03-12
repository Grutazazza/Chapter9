<?php
function ckBox(){
    $args=func_get_args();
    foreach ($args as $a){
        echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$a\" />" .
            ucwords($a). "<br />\n";
    }
}

if (!isset($_POST['submit'])){
    ?>
    <form method="post" action="work_11.php">
        <p>Пожалуйста, введите вашу информацию:</p>
        <label>
            Город: <input type = "text" name = "city" />
        </label>
        <label>
            Месяц: <input type = "text" name = "month" />
        </label>
        <label>
            Год: <input type = "text" name = "year" />
        </label>

        <p> Выберите тип погоды из списка ниже</p>
        <! - Используйте здесь свой флажок ->
        <?php
        ckBox('солнце','облака', 'дождь', 'град', 'мокрый снег', 'снег', 'ветер', 'холод', 'тепло','туман', 'влажность');
        ?>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php
}else{
    $inputLocal = array(
        $_POST['city'],
        $_POST['month'],
        $_POST['year']
    );
    echo "В городе $inputLocal[0] в месяце $inputLocal[1] $inputLocal[2] года, 
вы наблюдали следующую погоду:<br/> <ul>";
    $weather = $_POST['weather'];
    foreach($weather as $w){
        echo "<li>" . ucwords($w) . "</li>\n";
    }
    echo "</ul>";
}
?>