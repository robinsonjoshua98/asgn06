





<?php


$names = fopen("names.txt", "r");

$i = 0;

$nextRecord =fgets($names);

while(!feof($names)) 
{
  list ($lastName, $firstName) = explode("," , $nextRecord);
  
  $i++;
  
  $nextRecord = fgets($names);
  
}

