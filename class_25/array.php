<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
}
</style>

<?php 


    /**
    $cars = array(
            "Volvo", 
            "BMW", 
            "Toyota",
            "Oddi",
            "Tata",
            "Suzuki",
            "Honda",
            "Tesla",
        );

    echo '<pre>';
    print_r($cars);

    foreach($cars as $car){

        echo $car;
        echo '<br />';

    }
     */

     /**
     $cars = array(
         array('BMW',50,10),
         array('Volvo',40,20),
         array('Toyota',80,45),
     );

     echo '<pre>';
     print_r($cars);

     foreach($cars as $car){

        foreach($car as $c){
            echo $c .' ## ';
        }

        echo '<br />';
        
     }
      */


    $cars = array(
         array(
             'name' => 'BMW',
             'stock' => 20,
             'sold' => 15,
         ),
         array(
             'name' => 'Volvo',
             'stock' => 40,
             'sold' => 35,
         ),
         array(
             'name' => 'Toyota',
             'stock' => 200,
             'sold' => 155,
         ),
         array(
             'name' => 'Oddi',
             'stock' => 300,
             'sold' => 59,
         ),
         array(
             'name' => 'Tata',
             'stock' => 230,
             'sold' => 025,
         ),
         array(
             'name' => 'Suzuki',
             'stock' => 100,
             'sold' => 155,
         ),
         array(
             'name' => 'Tesla',
             'stock' => 230,
             'sold' => 15,
         ),
     );
     

    //  echo '<pre>';
    //  print_r($cars);
     /**
     echo '<table>';
        echo '<tr>';
            echo '<td>Name</td>';
            echo '<td>Stock</td>';
            echo '<td>Sold</td>';
        echo '</tr>';
        foreach($cars as $car){
            echo '<tr>';
                echo '<td>'. $car['name'] .'</td>';
                echo '<td>'. $car['stock'] .'</td>';
                echo '<td>'. $car['sold'] .'</td>';
            echo '</tr>';
            
        }
     echo '</table>';
      */
     


?>

<table style="width:50%">
   <tbody>
      <tr>
         <td>Name</td>
         <td>Stock</td>
         <td>Sold</td>
      </tr>
      <?php foreach($cars as $car){?>
      <tr>
         <td><?php echo $car['name'];?></td>
         <td><?php echo $car['stock'];?></td>
         <td><?php echo $car['sold'];?></td>
      </tr>
      <?php }?>
      
   </tbody>
</table>