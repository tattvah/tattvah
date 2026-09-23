<?php
if($_FILES['Attach']['name'] != '')
{
    $test = explode('.', $_FILES['Attach']['name']);
    $extension = end($test);    
    $orignalname = $_FILES['Attach']['name'];
    $name2 = str_replace(' ', '', $orignalname);
    $name = $name2.rand(100,999).'.'.$extension;
    $location = 'contactuspddata/'.$name;
    move_uploaded_file($_FILES['Attach']['tmp_name'], $location);
    echo "https://tattvah.com/wp-content/themes/twentytwentythree/".$location;
    die();
}

?>