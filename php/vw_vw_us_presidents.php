<?php
//How to write prepare and execute statements in OOP PDO?
//https://stackoverflow.com/questions/42551050/how-to-write-prepare-and-execute-statements-in-oop-pdo
//https://stackoverflow.com/questions/18679448/pdo-class-is-this-technically-correct

include_once('connect.php');


$presidents = new Connection(); //Instantiate a new connection.
//Insert user data.
//$presidents->myQuery('select * from vw_us_presidents');
//$presidents->bind(':uid', 118); //bind each value
//$presidents->bind(':fname', 'Happy'); // bind
//$presidents->bind(':lname', 'Holland');
//$presidents->bind(':gender', 1);
//Execute the query.
//if($presidents->run()){
//
//echo "record inserted";
//$lastid = $presidents->lastInsertId(); //Getting the last inserted ID
//echo "Last ID = " . $lastid . "\r\n";
//}

////Retrieve a single row of data from the database using the SingleRow method.
//$presidents->myQuery("SELECT table_name, is_updatable FROM information_schema.views WHERE is_updatable = :is_updatable");
//$presidents->bind(':is_updatable','YES');
//$row = $presidents->SingleRow();

//echo '<pre>';
//print_r($row);
//echo '</pre>';

////Works1:
//foreach($row as $key){
// echo "$key: "; //Values separated by carriage return.
//}

////Works2:
//foreach($row as $key){
// echo "$key,"; //Values separated by a comma.
//}

////Works3:
//foreach($row as $key => $value){
// echo "$key: $value ";
//}

//Retrieve multiple rows of data from the database using the All method.
$presidents->myQuery('select * from vw_us_presidents');
$rows = $presidents->All();

//echo '<pre>';
//print_r($rows);
//echo '</pre>';
echo $xyz=json_encode($rows);

/*
<pre>Array
(
[0] => Array
(
[TABLE_NAME] => vw_customer_display_nodocs
[IS_UPDATABLE] => YES
)

[1] => Array
(
[TABLE_NAME] => vw_ffl_book1
[IS_UPDATABLE] => YES
)

[2] => Array
(
[TABLE_NAME] => vw_ffl_book2
[IS_UPDATABLE] => YES
)

[3] => Array
(
[TABLE_NAME] => vw_ffl_bustax_docs
[IS_UPDATABLE] => YES
)

[4] => Array
(
[TABLE_NAME] => vw_ffl_license_docs
[IS_UPDATABLE] => YES
)

[5] => Array
(
[TABLE_NAME] => vw_ffl_ntn_inv_num
[IS_UPDATABLE] => YES
)

[6] => Array
(
[TABLE_NAME] => vw_ffl_weapondocs
[IS_UPDATABLE] => YES
)

[7] => Array
(
[TABLE_NAME] => vw_fflbook_transaction_number
[IS_UPDATABLE] => YES
)

[8] => Array
(
[TABLE_NAME] => vw_ffl_not_disposed
[IS_UPDATABLE] => YES
)

[9] => Array
(
[TABLE_NAME] => vw_ffl_disposed
[IS_UPDATABLE] => YES
)

)
*/

//var_dump($rows)

////https://www.w3schools.com/php/php_arrays_multidimensional.asp
////Works1:
// echo $rows[0]['TABLE_NAME'] . " ";

////Works:
//foreach ($rows[0] as $key[0] => $value) {
// echo "$key[0]: $value ";
//}

////Works2:
//function myfunction($value,$key)
// {
// echo "The key $key has the value $value. ";
// }
// $i=count($rows);
// for($x = 0; $x < $i; $x++){
// array_walk($rows[$x],"myfunction");
// }

////Works3:
// $x=0;
// $i=count($rows);
// while ($x<$i){
// //echo $x;
// echo $rows[$x]['TABLE_NAME'] . " ";
// $x++;
// }

////Works4:
// $x=0;
// $i=count($rows);
// while ($x<$i){
// //echo $x;
// foreach($rows[$x] as $key => $value){
// echo "$key: " . $value . "\r\n";
// };
// $x++;
// }

////Works5:
// $i=count($rows);
// for($x = 0; $x < $i; $x++){
// foreach($rows[$x] as $key => $value){
// echo "$key: $value ";
// }
// }

////Works6:
// $i=count($rows);
// for($x = 0; $x < $i; $x++){
// echo $rows[$x]['TABLE_NAME'] . " ";
// }

////Works7:
// $i=count($rows);
// for($x = 0; $x < $i; $x++){
// echo $rows[$x]['TABLE_NAME'] . " " . $rows[$x]['IS_UPDATABLE'] . " ";
// }

?>