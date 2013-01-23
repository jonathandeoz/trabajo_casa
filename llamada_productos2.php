<?php
require_once("sec.php");
$formato=$_POST['formato'];
$res=mysql_query("select * from productos2 where formato='$formato';");

$lista_formato="";

while($fetch=mysql_fetch_row($res))
{
if($fetch[8]==1)
{$lista_formato .='<tr><td><input value="'.$fetch[3].'" type="text" name="prod1_'.$fetch[1].'" id="prod1_'.$fetch[1].'"/></td><td><input value="'.$fetch[4].'" type="text" name="prod2_'.$fetch[1].'" id="prod2_'.$fetch[1].'"/></td><td><input value="'.$fetch[5].'" type="text" name="prod3_'.$fetch[1].'" id="prod3_'.$fetch[1].'"/></td><td><input value="'.$fetch[2].'" type="text" name="prod_'.$fetch[1].'" id="prod_'.$fetch[1].'"/></td><td><input value="'.$fetch[6].'" type="text" name="cod1_'.$fetch[1].'" id="cod1_'.$fetch[1].'"/></td><td><input value="'.$fetch[7].'" type="text" name="cod2_'.$fetch[1].'" id="cod2_'.$fetch[1].'"/></td><td><select  name="state_'.$fetch[1].'" id="state_'.$fetch[1].'"><option value="1" selected>Activo</option><option value="2">Inactivo</option></select></td><td class="eliminar">X</td></tr>';}
if($fetch[8]==2)
{$lista_formato .='<tr><td><input value="'.$fetch[3].'" type="text" name="prod1_'.$fetch[1].'" id="prod1_'.$fetch[1].'"/></td><td><input value="'.$fetch[4].'" type="text" name="prod2_'.$fetch[1].'" id="prod2_'.$fetch[1].'"/></td><td><input value="'.$fetch[5].'" type="text" name="prod3_'.$fetch[1].'" id="prod3_'.$fetch[1].'"/></td><td><input value="'.$fetch[2].'" type="text" name="prod_'.$fetch[1].'" id="prod_'.$fetch[1].'"/></td><td><input value="'.$fetch[6].'" type="text" name="cod1_'.$fetch[1].'" id="cod1_'.$fetch[1].'"/></td><td><input value="'.$fetch[7].'" type="text" name="cod2_'.$fetch[1].'" id="cod2_'.$fetch[1].'"/></td><td><select  name="state_'.$fetch[1].'" id="state_'.$fetch[1].'"><option value="1" >Activo</option><option value="2" selected>Inactivo</option></select></td><td class="eliminar">X</td></tr>';}
}
echo $lista_formato;

?>