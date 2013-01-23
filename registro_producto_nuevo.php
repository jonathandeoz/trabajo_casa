<?php
require_once("sec.php");
/*
include("simplehtmldom/simple_html_dom.php");
$html=file_get_html('producto_nuevo.php');
foreach($html->find('body') as $element)
{echo $element;}*/

$format=$_POST['format'];
$res=mysql_query("select * from productos2 where formato='$format';");
while($i=mysql_fetch_row($res))
{$state=$_POST['state_'.$i[1]];
$producto1=$_POST['prod1_'.$i[1]];
$producto2=$_POST['prod2_'.$i[1]];
$producto3=$_POST['prod3_'.$i[1]];
$producto=$_POST['prod_'.$i[1]];
$codigo1=$_POST['cod1_'.$i[1]];
$codigo2=$_POST['cod2_'.$i[1]];
$comp=mysql_fetch_row(mysql_query("select producto from productos2 where producto='$producto';"))[0];
if($comp!=$producto)
{mysql_query("insert into productos2(formato,producto,producto1,producto2,producto3,codigo1,codigo2,estado) values('$format','$producto','$producto1','$producto2','$producto3','$codigo1','$codigo2','$state');");}
if($comp==$producto)
{mysql_query("update productos2 set formato='$format', producto='$producto', producto1='$producto1', producto2='$producto2', producto3='$producto3', codigo1='$codigo1', codigo2='$codigo2', estado='$state' where producto='$producto';");}



}
?>