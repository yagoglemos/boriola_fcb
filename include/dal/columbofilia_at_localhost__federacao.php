<?php
$dalTablefederacao = array();
$dalTablefederacao["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablefederacao["nome"] = array("type"=>200,"varname"=>"nome", "name" => "nome", "autoInc" => "0");
$dalTablefederacao["ativo"] = array("type"=>200,"varname"=>"ativo", "name" => "ativo", "autoInc" => "0");
$dalTablefederacao["cidade"] = array("type"=>200,"varname"=>"cidade", "name" => "cidade", "autoInc" => "0");
$dalTablefederacao["uf"] = array("type"=>200,"varname"=>"uf", "name" => "uf", "autoInc" => "0");
$dalTablefederacao["pais"] = array("type"=>200,"varname"=>"pais", "name" => "pais", "autoInc" => "0");
$dalTablefederacao["telefone"] = array("type"=>200,"varname"=>"telefone", "name" => "telefone", "autoInc" => "0");
$dalTablefederacao["presidente"] = array("type"=>200,"varname"=>"presidente", "name" => "presidente", "autoInc" => "0");
$dalTablefederacao["id"]["key"]=true;

$dal_info["columbofilia_at_localhost__federacao"] = &$dalTablefederacao;
?>