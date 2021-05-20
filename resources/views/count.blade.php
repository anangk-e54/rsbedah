<?php
for ($i=1; $i<=5; $i++) {
	for ($j=4; $j>=$i; $j--) {
		echo " &nbsp;";
	}for ($k=1; $k<=$i; $k++) {
 		echo "$k";
	}echo "<br>";
}

echo "----------------<br>";

for ($i=1; $i<=5; $i++) {
    for ($k=5; $k>=$i; $k--) {
 		echo "$k";
	}echo "<br>";
}

echo "----------------<br>";

for ($i=1; $i<=5; $i++) {
    for ($k=1; $k<=$i; $k++) {
 		echo "$k";
	}echo "<br>";
}

echo "----------------<br>";

for ($i=5; $i>=1; $i--){
	for ($j=5; $j>=$i; $j--){
          echo $j;
     }echo "<br>";
}

?>