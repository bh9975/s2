<html>
<body>
<table border ="1" align="center">
<tr><th>File name </th></tr>
<?php
$dir=$_POST["dir"];
$ext=$_POST["ext"];
echo $dir;
echo $ext;

$hndl=opendir($dir);
while(($file=readdir($hndl))!=false)
{
	if(strstr($file,$ext))  
	 echo"<tr><td>$file</td></tr>";
}
closedir($hndl);
?>
</table>
</body>
</html>
