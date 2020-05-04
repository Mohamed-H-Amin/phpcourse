<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $jobTitle; ?></title>
</head>
<body>
    <h3><strong>Name : </strong><?php echo $name; ?></h3>
    <h3><strong>Age : </strong><?php echo $age;?></h3>
    <p>Eng <?php echo $name . " He has " . $childNume ." Children"; ?></p>
    <?php 
    echo "<pre>";
    print_r ($workers);
    echo "</pre>";
    $workers2 = array_pop($workers);
    $workers3 = array_shift($workers);
    echo "<h5>workers - 2</h5>";
    echo "<pre>";
    print_r ($workers);
    echo "</pre>";
    echo $workers2;
    echo $workers3;

    // user foreach to print array
    echo "<ul>";
    foreach ($workers as $value) {
        echo "<li> ". $value . "</li>";
    }
    echo "</ul>";
    // user for loop to print 
    echo "<ul>";
    for ($i=0; $i < $workers_count ; $i++) { 
        echo "<li> ". $workers[$i] . "</li>";
    }
    echo "</ul>";
    //use in_array()
    if (in_array("Ali", $workers, true)) {
        echo "The user is registerd </br>";
    }else {echo "The user not exist </br>";}
    if (in_array(10, $workers, true)) {
        echo "The Number is registerd </br>";
    }else {echo "The Number not exist </br>";}
    // us array_search()
    echo array_search("Ahmed" , $workers , true);
    ?>
</body>
</html>