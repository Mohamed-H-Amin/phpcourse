<?php 
$name = "Mohamed";
$age  = 35;
$ageString = "35";
$childNume = 2;
$jobTitle = "Full Stack WebDeveloper";
?>
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
    if ($age === $ageString) {
        echo "Is there equal";
    }
    ?>
</body>
</html>