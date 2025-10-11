<?php
$dalTablepedigree = array();
$dalTablepedigree["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepedigree["filhote"] = array("type"=>3,"varname"=>"filhote", "name" => "filhote", "autoInc" => "0");
$dalTablepedigree["usuario"] = array("type"=>3,"varname"=>"usuario", "name" => "usuario", "autoInc" => "0");
$dalTablepedigree["data"] = array("type"=>7,"varname"=>"data", "name" => "data", "autoInc" => "0");
$dalTablepedigree["parentes"] = array("type"=>200,"varname"=>"parentes", "name" => "parentes", "autoInc" => "0");
$dalTablepedigree["cor"] = array("type"=>200,"varname"=>"cor", "name" => "cor", "autoInc" => "0");
$dalTablepedigree["pai"] = array("type"=>3,"varname"=>"pai", "name" => "pai", "autoInc" => "0");
$dalTablepedigree["mae"] = array("type"=>3,"varname"=>"mae", "name" => "mae", "autoInc" => "0");
$dalTablepedigree["id"]["key"]=true;

$dal_info["columbofilia_at_localhost__pedigree"] = &$dalTablepedigree;
?>