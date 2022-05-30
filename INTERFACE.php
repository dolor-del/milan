<?php
$ct_path2file  = $_FILES["pathfile"]["tmp_name"];
$ct_buf        = $_POST["source"]; 
if($ct_buf !='')
	{
$data=$ct_buf;
	}
else
	{
	if ($ct_path2file!='')
	{
$ct_namefile=$_FILES["pathfile"]["name"];
$data = '';
$f= fopen($ct_path2file,"r");
$i=0;
while (!feof($f))
{
$data .=fgets($f);
}
fclose($f);
}
}
echo "<html lang='ru'><head><title>Пример работы интерпретатора МИЛАН</title></head><body>";

include"pole.php";

echo "
<form  id=\"sourceform\" name=\"sourceform\" action='milan.php' method=\"post\" style=\"text-align:center\">
     <table style=\"text-align:center; border:0; display: inline-block;\">
     <tr><td>Исходный код:</td></tr>
     <tr> <td>
     <textarea name=\"source\" rows=\"20\" cols=\"65\">";
echo $data;
echo "
</textarea></td>
<br>
 </tr>
   <tr>
     <td style=\"text-align:right\">
        <br>
    <input name=\"send\" type=\"submit\" value=\"Обработать\">
        </td>
       </tr>
       <tr>
       <br>
     </table>
</form>
</table></body></html>";