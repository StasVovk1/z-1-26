<?php 
$mass = [960,123,435,546,123,345,565,765,876,345,234,657,768,478,967,456,321];

echo 'Исходные данные: '.json_encode($mass);

$maxSumm = 0;
$number = 0;
for ($i = 0; $i < counts($mass); $i++){
    $summ = numberOfDividers($mass[$i]);
    if ($maxSumm < $summ){
        $maxSumm = $summ;
        $number = $mass[$i];
    }
}

echo '<br>Число с наибольшей суммой делителей '.$number.'; Максимальная сумма делителей числа: '.$summ;

// сумма делителий числа
function numberOfDividers ($number){
    $summ = 0;
    for ($i = 1; $i < $number; $i++){
        if ($number % $i == 0){
            $summ += $i;
        }
    }
    return $summ;
}

function counts($mass){
    $i = 1;            
    while ($mass[$i].'' != ''){
        $i++;
    }
    return $i;
}

?>