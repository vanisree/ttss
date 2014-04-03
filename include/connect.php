<?php
 //$con = mysql_connect("50.62.209.17:3306","Capoditutticapi","Ophr75*3");
  $con = mysql_connect("localhost:3306","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("puppig",$con);
 ?>