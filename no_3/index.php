<?php
$ukuran = 10;

for($a=1; $a<=$ukuran; $a++){
if($a % 2==1 )
		for($b=1; $b<=$ukuran; $b++){
		if($b % 2==1 )
			echo " <span style='padding: 16pt;'>*$a;</span> ";
		}
echo "<br/>";
}

