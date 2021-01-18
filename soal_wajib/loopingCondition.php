<?php
for($i=1; $i<=50; $i++){
	if($i%5 == 0 && $i%3==0){
		echo $i;
		echo "FooBar";
		echo "<br>";
	}
	else if($i % 5 == 0){
		echo $i;
		echo "Bar";
		echo "<br>";
	}elseif ($i % 3==0) {
		echo $i;
		echo "Foo";
		echo "<br>";
	}
	else {
		echo $i;
		echo "<br>";
	}
}
?> 

<?php
// for($i=1; $i<=50; $i++){
// 	echo $i;
// }
?>