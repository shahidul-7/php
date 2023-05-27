<?php
echo "Normal Array: <br/>";
$names = array('Shahidul', 'Masum', 'Faisal', 'Saikat');

echo "Names are: " . $names[2] . " and " . $names[0] . "<br/><br/>";
echo $names[0]. "<br/>";


echo "Associative Array: <br/>";
$name = array(
    'First_Name' => 'Shahidul',
    'Last_Name' => 'Islam',
    'Age' => 33
);
echo "My name is: " . $name['First_Name'] . " " . $name['Last_Name'] ."<br/>";

echo "My age is: " . $name['Age'] . "<br/><br>";


echo "<p style='font-size:20px;font-weight:bold;font-style:italic;margin-bottom:0'>Multidimansional Arrays</p><br/>";
$cars = array(
    'Suzuki',
    'bmw' => [
        'stock' => 18,
        'sold' => 15
    ],
    'volvo' => [
        'stock' => 20,
        'sold' => 10
    ]
    );
echo "<b>BMW</b> Stock: " . $cars['bmw']['stock'] . ", and Sold: " . $cars['bmw']['sold'] . "<br/>";
echo "<b>Volvo</b> Stock: " . $cars['volvo']['stock'] . ", and Sold: " . $cars['volvo']['sold'] . "<br/>";
echo  $cars[0];

