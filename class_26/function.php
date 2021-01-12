<?php 



    function add($first_number, $second_number){
        echo 'Add '.($first_number + $second_number);
    }


    function minus($first_number, $second_number){
        echo 'Minus '.($first_number - $second_number);
    }


    function multi($first_number, $second_number){
        echo 'Multi '.($first_number * $second_number);
    }


    function divi($first_number, $second_number){
        echo 'Divi '.($first_number / $second_number);
    }


    function calculator($first_number, $second_number){

        echo 'First number: '. $first_number. ' Second Number: '.$second_number;
        echo '<br />';
        add($first_number, $second_number);
        echo '<br />';
        minus($first_number, $second_number);
        echo '<br />';
        multi($first_number, $second_number);
        echo '<br />';
        divi($first_number, $second_number);

    }



    add(300,100);
    echo '<br />';
    multi(300,100);
    echo '<hr />';
    calculator(300,100);
    echo '<hr />';
    calculator(3600,5100);
    echo '<hr />';
    calculator(3500,1070);


    



?>