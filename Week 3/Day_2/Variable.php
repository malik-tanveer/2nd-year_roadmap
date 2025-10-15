<?php

    // Rules
    // Start a $ sign or _ and dont allowed a space is you varaible name and is sa case sensitive and Not a print is a 'Single Qutation'

    echo "<h2>PHP Variables Example</h2>";
    $name = "Kazmi";
    $age = 10;
    $city = "New York";


    echo "Name: $name <br/>";
    echo "Age: $age <br/>";
    echo "City: $city <br/>";
    echo "My name is $name. <br/> i am $age years old. <br/> i live a $city <br>";

    $fruit = "Fruit Name : Apple";

    echo $fruit;

    // Complex Curly Syntax
    // Agar variable ke sath extra text likhna ho to {} lagate hain:

    $fru = "apple";
    echo "<br> I like ${fru}s";

?>