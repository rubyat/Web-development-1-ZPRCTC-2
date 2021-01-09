<?php 


    //$years = [2015,2016,2017,2018,2019,2020,2021];
    $years = array(2014,2015,2016,2017,2018,2019,2020,2021,2022,2023,2024);

    //print_r($years);

    //echo $years[6];

    //echo count($years);
    //exit();


    /**
    for($i = 0; $i < count($years); $i++){

        echo $i.'# '.$years[$i];
        echo '<br />';
        //echo $years[$i];

    }
     */


    // break example
    /**
    foreach($years as $keyZ => $year){



        if($year == 2018){
            break;
        }

        echo $keyZ.'# '.$year;
        echo '<br />';
        
    }
     */

    // continue example
    foreach($years as $keyZ => $year){


        if($year == 2020){
            continue;
        }

        echo $keyZ.'# '.$year;
        echo '<br />';
        
    }
    



?>