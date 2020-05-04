<DOCTYPE html>
<html lang="en">


<?php 

include_once('functions.php');
include_once('untility.php');

$namesHandle =fopen("names.txt", "r");

$fullNames = get_full_names($namesHandle);

$validFullNames = clean_full_names($fullNames);
?>



<h1>asgn06 Names</h1>
<h2>Unique count of last names</h2>
<?= sizeof(array_unique($validFullNames));?>


<h2>Unique count of last names</h2>
<?= sizeof(array_unique(get_last_names)($validFullNames));?>


<h2>Unique count of first names</h2>
<?= sizeof(array_unique(get_first_names)($validFullNames));?>


<h2>Ten Most Common Last names</h2>
<?= loop_dump(ten_most_common_names(get_last_names)($validFullNames));?>

<h2>Ten most common first names</h2>
<?= loop_dump(ten_most_common_names(get_first_names)($validFullNames));?>
