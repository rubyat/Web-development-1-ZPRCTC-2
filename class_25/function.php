<?php 


    function calculator($first_number,$second_number){

        echo 'First number: '. $first_number. ' Second Number: '.$second_number;
        echo '<br />';
        echo 'Add '.($first_number + $second_number);
        echo '<br />';
        echo 'Minus '.($first_number - $second_number);
        echo '<br />';
        echo 'Multi '.($first_number * $second_number);
        echo '<br />';
        echo 'Divi '.($first_number / $second_number);

    }



    calculator(70,30);
    echo '<hr />';
    calculator(1000,50);
    echo '<hr />';
    calculator(1500,77);
    echo '<hr />';
    calculator(44329,897878);

    $my_numbers = array(
        array(
            'first' => 6565,
            'second' => 765,
        ),
        array(
            'first' => 67655,
            'second' => 7664,
        ),
        array(
            'first' => 985,
            'second' => 1322,
        ),
        array(
            'first' => 4545,
            'second' => 987,
        ),
        array(
            'first' => 12341,
            'second' => 876,
        ),
        array(
            'first' => 88676,
            'second' => 6555,
        ),
    );

    echo '<hr />';
    echo '<hr />';
    foreach($my_numbers as $number){

        echo '<hr />';
        calculator($number['first'],$number['second']);
    }



?>