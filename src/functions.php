<?php
function task1 (array $arr, $flag = true){
    if ($flag){
        return array_map(function ($value){
            echo '<p>' . $value . '</p>';
        },$arr);
    }else{
        return array_map(function ($value){
            echo $value ;
        },$arr);
    }
}

function task2 (){
    $arr = array_slice(func_get_args(),1);
    switch (func_get_args()[0]) {
        case '+':
            foreach ($arr as $value) { $value += $value; }
            break;
        case '-':
            foreach ($arr as $value) { $value -= $value; }
            break;
        case '*':
            foreach ($arr as $value) { $value *= $value; }
            break;
        case '/':
            foreach ($arr as $value) {
                $value === 0 ? 'Ops you can\'t / on 0' : $value /= $value;
            }
    }
    return isset($value) ? $value : 'Something goes wrong';
}

function task3 (int $num, int $num2){
    if (isset($num) && isset($num2)){
        echo '<table>';
        for ($i = 1; $i <= $num; $i++){
            echo '<tr>';
            for ($j = 1; $j <= $num2; $j++){
                if ($i * $j % 2){
                    echo '<td style="background: aqua">';
                }else{
                    echo '<td style="background: cadetblue">';
                }
                echo $i * $j .' ';
                echo '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }else{
        echo 'Something goes wrong';
    }
}

function task4 (){
    $time = date('d-m-Y H:i:s',time());
    $unixtime = mktime('00','00','00','02','24','2016');
    return 'Time now: ' . $time . '<br>Unixtime of 24.02.2016 00:00:00 is:' . $unixtime . '<br>';
}

function task5 ($str,$symbol,$replacement = ''){
    $res = str_replace( $symbol, $replacement, $str);
    return $res . '<br>';
}

function task6 ($file_name,$data) : string {
    $handle = fopen($file_name, 'a') or die('Cannot open file:  '.$file_name);
    $handle2 = fopen($file_name, 'r') or die('Cannot open file:  '.$file_name);
    $contents = fread($handle2, filesize($file_name));

    fwrite($handle, $data . PHP_EOL);
    fclose($handle);
    fclose($handle2);

    return $contents;
}
