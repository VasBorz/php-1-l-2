<?php
function task1 (array $arr, $flag = true){
    if ($flag === true) {
        echo implode(' ', $arr);
    }else{
        return array_map(function ($value){
            echo '<p>' . $value . '</p>';
        },$arr);
    }
}

function task2 (){
    $numbers = array_slice(func_get_args(),1);
    $operator = func_get_args()[0];

    echo implode($operator, $numbers) . '=';
    switch ($operator) {
        case '+':
            foreach ($numbers as $value) {
                $value += $value;
            }
            break;
        case '-':
            foreach ($numbers as $value) {
               $value -= $value;
            }
            break;
        case '*':
            foreach ($numbers as $value) {
                $value *= $value;
            }
            break;
        case '/':
            foreach ($numbers as $value) {
                $value === 0 ? 'Ops you can\'t / on 0' : $value /= $value;
            }
    }
    return isset($value) ? $value : 'Something goes wrong';
}

function task3 (int $rows, int $cols){
    if (isset($rows) && isset($cols)){
        echo '<table>';
        for ($i = 1; $i <= $rows; $i++){
            echo '<tr>';
            for ($j = 1; $j <= $cols; $j++){
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
    return str_replace( $symbol, $replacement, $str);
}

function task6 ($file_name,$data) : string {
    file_put_contents($file_name,$data,FILE_APPEND);
    $contents = file_get_contents($file_name);

    return $contents;
}
