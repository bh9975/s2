
<?php

$s=$_POST['txt'];
function vowel($s)
{
	$a=$e=$i=$o=$u=0;
	for($c=0;$c<strlen($s);$c++)
	{
		if($s{$c}=='a')
			$a++;
		if($s{$c}=='e')
			$e++;
		if($s{$c}=='i')
			$i++;
		if($s{$c}=='o')
			$o++;
		if($s{$c}=='u')
			$u++;
	}
	echo"<br>'a' occures ".$a."times";
	echo"<br>'e' occures ".$e."times";
	echo"<br>'i' occures ".$i."times";
	echo"<br>'o' occures ".$o."times";
	echo"<br>'u' occures ".$u."times<br>";

	$tot=$a+$e+$i+$o+$u;
	echo "<br>Total number of vowels are".$tot;
}
vowel($s);
    
?>
