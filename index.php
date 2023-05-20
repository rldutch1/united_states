<!DOCTYPE php>
<html>
<head>
<meta name="author" content="Robert Holland" />
<meta name="source1" content="https://stackoverflow.com/questions/8430336/get-keys-of-json-object-in-javascript" />
<meta name="source2" content="https://www.thequantizer.com/javascript-json-get-value-by-key/" />
<script type="application/x-javascript">
	var presJSON = JSON.stringify(<?php include('./php/vw_vw_us_presidents.php'); ?>);
	var presData=JSON.parse(presJSON);
</script>
</head>
<body>
<div id="cic">
<script>
var total_length = presData.length;
var total_lengthm = (total_length - total_length +1);
presidents = "<table><caption>List of U.S. Presidents</caption><tr></tr>";
presidents += "<tr>";

let firstObjKeys = presData[0]; //First object in the array.
let firstObj_lngth = Object.keys(firstObjKeys).length; //Length of key/pairs.

//Get column headers dynamically.
var firstKey;
for (r = 0; r < firstObj_lngth; r++) {
	let firstKey = Object.keys(firstObjKeys)[r];
//	console.log("<th>" + firstKey + "</th>");
	presidents +="<th>" + firstKey + "</th>";
}

presidents += "</tr>";
  for (r = 0; r < total_length; r++) {
    presidents +="<tr id='" + presData[r].id + "'>";
      		presidents +="<td>" + presData[r].id + "</td>";//Publish items from the array.
      		presidents +="<td>" + presData[r].name + "</td>";
      		presidents +="<td>" + presData[r].birth + "</td>";
      		presidents +="<td>" + presData[r].death + "</td>";
      		presidents +="<td>" + presData[r].presidency_start + "</td>";
      		presidents +="<td>" + presData[r].presidency_end + "</td>";
      		presidents +="<td>" + presData[r].state_born + "</td>";
      		presidents +="<td>" + presData[r].party + "</td>";
      		presidents +="<td>" + presData[r].died_in_office + "</td>";
      		presidents +="<td>" + presData[r].assassinated + "</td>";
      		presidents +="<td>" + presData[r].impeached + "</td>";
    presidents +="</tr>";
    //console.log(presData[r].name);
  }
presidents += "</table>";
document.getElementById("cic").innerHTML = presidents;
</script>
<br />
<br />
<br />
<br />
<?php $Hello='Something Cool!'; ?>
<textarea name="Hello" rows="20" cols="40"><?php if (isset($Hello)) { echo $Hello; } ?></textarea>
<?php echo '<br />Hello World<br />'; ?>
</body>
</html>