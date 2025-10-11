<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["clube"] ) ) {
			$lookupTableLinks["clube"] = array();
		}
		if( !isset( $lookupTableLinks["clube"]["anilha.clube"] )) {
			$lookupTableLinks["clube"]["anilha.clube"] = array();
		}
		$lookupTableLinks["clube"]["anilha.clube"]["edit"] = array("table" => "anilha", "field" => "clube", "page" => "edit");
		if( !isset( $lookupTableLinks["socio"] ) ) {
			$lookupTableLinks["socio"] = array();
		}
		if( !isset( $lookupTableLinks["socio"]["clube.presidente"] )) {
			$lookupTableLinks["socio"]["clube.presidente"] = array();
		}
		$lookupTableLinks["socio"]["clube.presidente"]["edit"] = array("table" => "clube", "field" => "presidente", "page" => "edit");
		if( !isset( $lookupTableLinks["federacao"] ) ) {
			$lookupTableLinks["federacao"] = array();
		}
		if( !isset( $lookupTableLinks["federacao"]["clube.federacao"] )) {
			$lookupTableLinks["federacao"]["clube.federacao"] = array();
		}
		$lookupTableLinks["federacao"]["clube.federacao"]["edit"] = array("table" => "clube", "field" => "federacao", "page" => "edit");
		if( !isset( $lookupTableLinks["socio"] ) ) {
			$lookupTableLinks["socio"] = array();
		}
		if( !isset( $lookupTableLinks["socio"]["federacao.presidente"] )) {
			$lookupTableLinks["socio"]["federacao.presidente"] = array();
		}
		$lookupTableLinks["socio"]["federacao.presidente"]["edit"] = array("table" => "federacao", "field" => "presidente", "page" => "edit");
		if( !isset( $lookupTableLinks["cores"] ) ) {
			$lookupTableLinks["cores"] = array();
		}
		if( !isset( $lookupTableLinks["cores"]["pombo.cor"] )) {
			$lookupTableLinks["cores"]["pombo.cor"] = array();
		}
		$lookupTableLinks["cores"]["pombo.cor"]["edit"] = array("table" => "pombo", "field" => "cor", "page" => "edit");
		if( !isset( $lookupTableLinks["pombo"] ) ) {
			$lookupTableLinks["pombo"] = array();
		}
		if( !isset( $lookupTableLinks["pombo"]["pombo.pai"] )) {
			$lookupTableLinks["pombo"]["pombo.pai"] = array();
		}
		$lookupTableLinks["pombo"]["pombo.pai"]["edit"] = array("table" => "pombo", "field" => "pai", "page" => "edit");
		if( !isset( $lookupTableLinks["pombo"] ) ) {
			$lookupTableLinks["pombo"] = array();
		}
		if( !isset( $lookupTableLinks["pombo"]["pombo.mae"] )) {
			$lookupTableLinks["pombo"]["pombo.mae"] = array();
		}
		$lookupTableLinks["pombo"]["pombo.mae"]["edit"] = array("table" => "pombo", "field" => "mae", "page" => "edit");
		if( !isset( $lookupTableLinks["clube"] ) ) {
			$lookupTableLinks["clube"] = array();
		}
		if( !isset( $lookupTableLinks["clube"]["socio.clube"] )) {
			$lookupTableLinks["clube"]["socio.clube"] = array();
		}
		$lookupTableLinks["clube"]["socio.clube"]["edit"] = array("table" => "socio", "field" => "clube", "page" => "edit");
		if( !isset( $lookupTableLinks["anilha"] ) ) {
			$lookupTableLinks["anilha"] = array();
		}
		if( !isset( $lookupTableLinks["anilha"]["vanilhas.anilha"] )) {
			$lookupTableLinks["anilha"]["vanilhas.anilha"] = array();
		}
		$lookupTableLinks["anilha"]["vanilhas.anilha"]["edit"] = array("table" => "vanilhas", "field" => "anilha", "page" => "edit");
		if( !isset( $lookupTableLinks["socio"] ) ) {
			$lookupTableLinks["socio"] = array();
		}
		if( !isset( $lookupTableLinks["socio"]["vanilhas.socio"] )) {
			$lookupTableLinks["socio"]["vanilhas.socio"] = array();
		}
		$lookupTableLinks["socio"]["vanilhas.socio"]["edit"] = array("table" => "vanilhas", "field" => "socio", "page" => "edit");
		if( !isset( $lookupTableLinks["clube"] ) ) {
			$lookupTableLinks["clube"] = array();
		}
		if( !isset( $lookupTableLinks["clube"]["vanilhas.clube"] )) {
			$lookupTableLinks["clube"]["vanilhas.clube"] = array();
		}
		$lookupTableLinks["clube"]["vanilhas.clube"]["edit"] = array("table" => "vanilhas", "field" => "clube", "page" => "edit");
		if( !isset( $lookupTableLinks["socio"] ) ) {
			$lookupTableLinks["socio"] = array();
		}
		if( !isset( $lookupTableLinks["socio"]["anilhas.socio"] )) {
			$lookupTableLinks["socio"]["anilhas.socio"] = array();
		}
		$lookupTableLinks["socio"]["anilhas.socio"]["edit"] = array("table" => "anilhas", "field" => "socio", "page" => "edit");
		if( !isset( $lookupTableLinks["pombo"] ) ) {
			$lookupTableLinks["pombo"] = array();
		}
		if( !isset( $lookupTableLinks["pombo"]["pedigree.filhote"] )) {
			$lookupTableLinks["pombo"]["pedigree.filhote"] = array();
		}
		$lookupTableLinks["pombo"]["pedigree.filhote"]["edit"] = array("table" => "pedigree", "field" => "filhote", "page" => "edit");
		if( !isset( $lookupTableLinks["cores"] ) ) {
			$lookupTableLinks["cores"] = array();
		}
		if( !isset( $lookupTableLinks["cores"]["pedigree.cor"] )) {
			$lookupTableLinks["cores"]["pedigree.cor"] = array();
		}
		$lookupTableLinks["cores"]["pedigree.cor"]["edit"] = array("table" => "pedigree", "field" => "cor", "page" => "edit");
		if( !isset( $lookupTableLinks["pombo"] ) ) {
			$lookupTableLinks["pombo"] = array();
		}
		if( !isset( $lookupTableLinks["pombo"]["pedigree.pai"] )) {
			$lookupTableLinks["pombo"]["pedigree.pai"] = array();
		}
		$lookupTableLinks["pombo"]["pedigree.pai"]["edit"] = array("table" => "pedigree", "field" => "pai", "page" => "edit");
		if( !isset( $lookupTableLinks["pombo"] ) ) {
			$lookupTableLinks["pombo"] = array();
		}
		if( !isset( $lookupTableLinks["pombo"]["pedigree.mae"] )) {
			$lookupTableLinks["pombo"]["pedigree.mae"] = array();
		}
		$lookupTableLinks["pombo"]["pedigree.mae"]["edit"] = array("table" => "pedigree", "field" => "mae", "page" => "edit");
}

?>