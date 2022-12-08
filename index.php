<?php
$sum = 0;
$massive = [[4, 5, 6, 7], [4, 5, 6, 7], [4, 5, 6, 7], [4, 5, 6, 7]];
for ($i = 0; $i < count($massive); $i++) {
	$sum += $massive[$i][3];
}
echo $sum;
