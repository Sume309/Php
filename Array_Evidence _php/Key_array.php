
<?php



$country=[
    "Bangladesh" => "Dhaka",
    "India" => "Delhi",
    "Pakistan" => "Islamabad",
    "Afganistan" => "Kabul",
    "Nepal" => "Kathmandu",
    "America" => "New York",
    "United Kingdom" => "London"
];

ksort($country);
foreach($country as $key => $value){
    echo $key." = " .$value ."<br>";

}

    
?>