<?php
$dalTablecores = array();
$dalTablecores["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecores["nome"] = array("type"=>200,"varname"=>"nome", "name" => "nome", "autoInc" => "0");
$dalTablecores["usuario"] = array("type"=>3,"varname"=>"usuario", "name" => "usuario", "autoInc" => "0");
$dalTablecores["id"]["key"]=true;

$dal_info["columbofilia_at_localhost__cores"] = &$dalTablecores;
?>