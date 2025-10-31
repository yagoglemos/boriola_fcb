<?php
$tdatasocio = array();
$tdatasocio[".searchableFields"] = array();
$tdatasocio[".ShortName"] = "socio";
$tdatasocio[".OwnerID"] = "";
$tdatasocio[".OriginalTable"] = "socio";


$tdatasocio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasocio[".originalPagesByType"] = $tdatasocio[".pagesByType"];
$tdatasocio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasocio[".originalPages"] = $tdatasocio[".pages"];
$tdatasocio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasocio[".originalDefaultPages"] = $tdatasocio[".defaultPages"];

//	field labels
$fieldLabelssocio = array();
$fieldToolTipssocio = array();
$pageTitlessocio = array();
$placeHolderssocio = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelssocio["Portuguese(Brazil)"] = array();
	$fieldToolTipssocio["Portuguese(Brazil)"] = array();
	$placeHolderssocio["Portuguese(Brazil)"] = array();
	$pageTitlessocio["Portuguese(Brazil)"] = array();
	$fieldLabelssocio["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipssocio["Portuguese(Brazil)"]["id"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["nome"] = "NOME";
	$fieldToolTipssocio["Portuguese(Brazil)"]["nome"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["cpf"] = "CPF";
	$fieldToolTipssocio["Portuguese(Brazil)"]["cpf"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["cpf"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["email"] = "EMAIL";
	$fieldToolTipssocio["Portuguese(Brazil)"]["email"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["datacricad"] = "DATA CADASTRO";
	$fieldToolTipssocio["Portuguese(Brazil)"]["datacricad"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["datacricad"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["ativo"] = "ATIVO";
	$fieldToolTipssocio["Portuguese(Brazil)"]["ativo"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["perfilusu"] = "PERFIL";
	$fieldToolTipssocio["Portuguese(Brazil)"]["perfilusu"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["perfilusu"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["datavenci"] = "DATA DE VENCIMENTO";
	$fieldToolTipssocio["Portuguese(Brazil)"]["datavenci"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["datavenci"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["endereco"] = "ENDEREÇO";
	$fieldToolTipssocio["Portuguese(Brazil)"]["endereco"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["endereco"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["numero"] = "NÚMERO";
	$fieldToolTipssocio["Portuguese(Brazil)"]["numero"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["numero"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["complemento"] = "COMPLEMENTO";
	$fieldToolTipssocio["Portuguese(Brazil)"]["complemento"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["complemento"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["telefone"] = "TELEFONE";
	$fieldToolTipssocio["Portuguese(Brazil)"]["telefone"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["telefone"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["cep"] = "CEP";
	$fieldToolTipssocio["Portuguese(Brazil)"]["cep"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["cep"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["cidade"] = "CIDADE";
	$fieldToolTipssocio["Portuguese(Brazil)"]["cidade"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["cidade"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["estado"] = "ESTADO";
	$fieldToolTipssocio["Portuguese(Brazil)"]["estado"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["estado"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["pais"] = "PAÍS";
	$fieldToolTipssocio["Portuguese(Brazil)"]["pais"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["pais"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["latpombal"] = "LATITUDE POMBAL";
	$fieldToolTipssocio["Portuguese(Brazil)"]["latpombal"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["latpombal"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["longpombal"] = "LONGITUDE POMBAL";
	$fieldToolTipssocio["Portuguese(Brazil)"]["longpombal"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["longpombal"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["clube"] = "CLUBE";
	$fieldToolTipssocio["Portuguese(Brazil)"]["clube"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["clube"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["senha"] = "SENHA";
	$fieldToolTipssocio["Portuguese(Brazil)"]["senha"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["senha"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["data_nascimento"] = "DATA DE NASCIMENTO";
	$fieldToolTipssocio["Portuguese(Brazil)"]["data_nascimento"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["data_nascimento"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["datavenci"] = "DATA DE VENCIMENTO";
	$fieldToolTipssocio["Portuguese(Brazil)"]["datavenci"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["datavenci"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["reset"] = "Reset";
	$fieldToolTipssocio["Portuguese(Brazil)"]["reset"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["reset"] = "";
	$fieldLabelssocio["Portuguese(Brazil)"]["reset_date"] = "Reset Date";
	$fieldToolTipssocio["Portuguese(Brazil)"]["reset_date"] = "";
	$placeHolderssocio["Portuguese(Brazil)"]["reset_date"] = "";
	if (count($fieldToolTipssocio["Portuguese(Brazil)"]))
		$tdatasocio[".isUseToolTips"] = true;
}


	$tdatasocio[".NCSearch"] = true;



$tdatasocio[".shortTableName"] = "socio";
$tdatasocio[".nSecOptions"] = 0;

$tdatasocio[".mainTableOwnerID"] = "";
$tdatasocio[".entityType"] = 0;
$tdatasocio[".connId"] = "columbofilia_at_localhost";


$tdatasocio[".strOriginalTableName"] = "socio";

	



$tdatasocio[".showAddInPopup"] = false;

$tdatasocio[".showEditInPopup"] = false;

$tdatasocio[".showViewInPopup"] = false;

$tdatasocio[".listAjax"] = false;
//	temporary
//$tdatasocio[".listAjax"] = false;

	$tdatasocio[".audit"] = false;

	$tdatasocio[".locking"] = false;


$pages = $tdatasocio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasocio[".edit"] = true;
	$tdatasocio[".afterEditAction"] = 1;
	$tdatasocio[".closePopupAfterEdit"] = 1;
	$tdatasocio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasocio[".add"] = true;
$tdatasocio[".afterAddAction"] = 1;
$tdatasocio[".closePopupAfterAdd"] = 1;
$tdatasocio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasocio[".list"] = true;
}



$tdatasocio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasocio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasocio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasocio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasocio[".printFriendly"] = true;
}



$tdatasocio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasocio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasocio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasocio[".isUseAjaxSuggest"] = true;

$tdatasocio[".rowHighlite"] = true;



		
																										

$tdatasocio[".ajaxCodeSnippetAdded"] = false;

$tdatasocio[".buttonsAdded"] = true;

$tdatasocio[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasocio[".isUseTimeForSearch"] = false;


$tdatasocio[".badgeColor"] = "00ff40";


$tdatasocio[".allSearchFields"] = array();
$tdatasocio[".filterFields"] = array();
$tdatasocio[".requiredSearchFields"] = array();

$tdatasocio[".googleLikeFields"] = array();
$tdatasocio[".googleLikeFields"][] = "nome";
$tdatasocio[".googleLikeFields"][] = "cpf";
$tdatasocio[".googleLikeFields"][] = "email";
$tdatasocio[".googleLikeFields"][] = "datacricad";
$tdatasocio[".googleLikeFields"][] = "ativo";
$tdatasocio[".googleLikeFields"][] = "perfilusu";
$tdatasocio[".googleLikeFields"][] = "datavenci";
$tdatasocio[".googleLikeFields"][] = "endereco";
$tdatasocio[".googleLikeFields"][] = "numero";
$tdatasocio[".googleLikeFields"][] = "complemento";
$tdatasocio[".googleLikeFields"][] = "telefone";
$tdatasocio[".googleLikeFields"][] = "cep";
$tdatasocio[".googleLikeFields"][] = "cidade";
$tdatasocio[".googleLikeFields"][] = "estado";
$tdatasocio[".googleLikeFields"][] = "pais";
$tdatasocio[".googleLikeFields"][] = "latpombal";
$tdatasocio[".googleLikeFields"][] = "longpombal";
$tdatasocio[".googleLikeFields"][] = "clube";
$tdatasocio[".googleLikeFields"][] = "senha";
$tdatasocio[".googleLikeFields"][] = "data_nascimento";



$tdatasocio[".tableType"] = "list";

$tdatasocio[".printerPageOrientation"] = 0;
$tdatasocio[".nPrinterPageScale"] = 100;

$tdatasocio[".nPrinterSplitRecords"] = 40;

$tdatasocio[".geocodingEnabled"] = false;










$tdatasocio[".pageSize"] = 20;

$tdatasocio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasocio[".strOrderBy"] = $tstrOrderBy;

$tdatasocio[".orderindexes"] = array();


$tdatasocio[".sqlHead"] = "SELECT id,  	datacricad,  	nome,  	cpf,  	data_nascimento,  	datavenci,  	email,  	perfilusu,  	senha,  	endereco,  	numero,  	complemento,  	telefone,  	cep,  	cidade,  	estado,  	pais,  	latpombal,  	longpombal,  	clube,  	ativo,  	reset,  	reset_date";
$tdatasocio[".sqlFrom"] = "FROM socio";
$tdatasocio[".sqlWhereExpr"] = "";
$tdatasocio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasocio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasocio[".arrGroupsPerPage"] = $arrGPP;

$tdatasocio[".highlightSearchResults"] = true;

$tableKeyssocio = array();
$tableKeyssocio[] = "id";
$tdatasocio[".Keys"] = $tableKeyssocio;


$tdatasocio[".hideMobileList"] = array();
		$tdatasocio[".hideMobileList"][1] = array();
$tdatasocio[".hideMobileList"][1]["id"] = true;
		$tdatasocio[".hideMobileList"][1]["datacricad"] = true;
		$tdatasocio[".hideMobileList"][1]["ativo"] = true;
		$tdatasocio[".hideMobileList"][1]["perfilusu"] = true;
		$tdatasocio[".hideMobileList"][1]["endereco"] = true;
		$tdatasocio[".hideMobileList"][1]["numero"] = true;
		$tdatasocio[".hideMobileList"][1]["complemento"] = true;
		$tdatasocio[".hideMobileList"][1]["telefone"] = true;
		$tdatasocio[".hideMobileList"][1]["cep"] = true;
		$tdatasocio[".hideMobileList"][1]["cidade"] = true;
		$tdatasocio[".hideMobileList"][1]["estado"] = true;
		$tdatasocio[".hideMobileList"][1]["pais"] = true;
		$tdatasocio[".hideMobileList"][1]["latpombal"] = true;
		$tdatasocio[".hideMobileList"][1]["longpombal"] = true;
		$tdatasocio[".hideMobileList"][1]["senha"] = true;
		$tdatasocio[".hideMobileList"][1]["data_nascimento"] = true;
		$tdatasocio[".hideMobileList"][1]["datavenci"] = true;
		$tdatasocio[".hideMobileList"][5] = array();
$tdatasocio[".hideMobileList"][5]["id"] = true;
		$tdatasocio[".hideMobileList"][5]["datacricad"] = true;
		$tdatasocio[".hideMobileList"][5]["ativo"] = true;
		$tdatasocio[".hideMobileList"][5]["perfilusu"] = true;
		$tdatasocio[".hideMobileList"][5]["endereco"] = true;
		$tdatasocio[".hideMobileList"][5]["numero"] = true;
		$tdatasocio[".hideMobileList"][5]["complemento"] = true;
		$tdatasocio[".hideMobileList"][5]["telefone"] = true;
		$tdatasocio[".hideMobileList"][5]["cep"] = true;
		$tdatasocio[".hideMobileList"][5]["cidade"] = true;
		$tdatasocio[".hideMobileList"][5]["estado"] = true;
		$tdatasocio[".hideMobileList"][5]["pais"] = true;
		$tdatasocio[".hideMobileList"][5]["latpombal"] = true;
		$tdatasocio[".hideMobileList"][5]["longpombal"] = true;
		$tdatasocio[".hideMobileList"][5]["senha"] = true;
		$tdatasocio[".hideMobileList"][5]["data_nascimento"] = true;
		$tdatasocio[".hideMobileList"][5]["datavenci"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["id"] = $fdata;
		$tdatasocio[".searchableFields"][] = "id";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","nome");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nome";

		$fdata["sourceSingle"] = "nome";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["nome"] = $fdata;
		$tdatasocio[".searchableFields"][] = "nome";
//	cpf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cpf";
	$fdata["GoodName"] = "cpf";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","cpf");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cpf";

		$fdata["sourceSingle"] = "cpf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cpf";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


		$edata["strEditMask"] = "999.999.999-99";

	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Já existe um sócio com esse CPF!", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["cpf"] = $fdata;
		$tdatasocio[".searchableFields"][] = "cpf";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Já existe um sócio com esse EMAIL!", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["email"] = $fdata;
		$tdatasocio[".searchableFields"][] = "email";
//	datacricad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "datacricad";
	$fdata["GoodName"] = "datacricad";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","datacricad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "datacricad";

		$fdata["sourceSingle"] = "datacricad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datacricad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["datacricad"] = $fdata;
		$tdatasocio[".searchableFields"][] = "datacricad";
//	ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ativo";
	$fdata["GoodName"] = "ativo";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","ativo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ativo";

		$fdata["sourceSingle"] = "ativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativo";

	
	
			
//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SIM";
	$edata["LookupValues"][] = "NÃO";

	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["ativo"] = $fdata;
		$tdatasocio[".searchableFields"][] = "ativo";
//	perfilusu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "perfilusu";
	$fdata["GoodName"] = "perfilusu";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","perfilusu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "perfilusu";

		$fdata["sourceSingle"] = "perfilusu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "perfilusu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "ADMIN";
	$edata["LookupValues"][] = "DIRIGENTE";
	$edata["LookupValues"][] = "SOCIO";
	$edata["LookupValues"][] = "SÓCIO INDIVIDUAL";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["perfilusu"] = $fdata;
		$tdatasocio[".searchableFields"][] = "perfilusu";
		
//	datavenci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "datavenci";
	$fdata["GoodName"] = "datavenci";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","datavenci");
	$fdata["FieldType"] = 7; // Date field (igual ao data_nascimento)
	$fdata["autoInc"] = false;
	$fdata["readOnly"] = false;
	$fdata["required"] = false;

		$fdata["strField"] = "datavenci";
		$fdata["sourceSingle"] = "datavenci";
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datavenci";

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

		$vdata["NeedEncode"] = true;
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";

		$edata["IsRequired"] = false;

			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	$edata["validateAs"]["customValidate"] = array();
//	End validation

	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats

	$fdata["isSeparate"] = false;

// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings

//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

//end of Filters settings

	$tdatasocio["datavenci"] = $fdata;
		$tdatasocio[".searchableFields"][] = "datavenci";
//	endereco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "endereco";
	$fdata["GoodName"] = "endereco";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","endereco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "endereco";

		$fdata["sourceSingle"] = "endereco";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "endereco";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["endereco"] = $fdata;
		$tdatasocio[".searchableFields"][] = "endereco";
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numero";

		$fdata["sourceSingle"] = "numero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["numero"] = $fdata;
		$tdatasocio[".searchableFields"][] = "numero";
//	complemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "complemento";
	$fdata["GoodName"] = "complemento";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","complemento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "complemento";

		$fdata["sourceSingle"] = "complemento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complemento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["complemento"] = $fdata;
		$tdatasocio[".searchableFields"][] = "complemento";
//	telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "telefone";
	$fdata["GoodName"] = "telefone";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","telefone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "telefone";

		$fdata["sourceSingle"] = "telefone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


		$edata["strEditMask"] = "(99) 99999 - 9999";

	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["telefone"] = $fdata;
		$tdatasocio[".searchableFields"][] = "telefone";
//	cep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cep";
	$fdata["GoodName"] = "cep";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","cep");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cep";

		$fdata["sourceSingle"] = "cep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


		$edata["strEditMask"] = "99.999-999";

		$eventsData = array();
	$eventsData[] = array( "name" => "cep_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["cep"] = $fdata;
		$tdatasocio[".searchableFields"][] = "cep";
//	cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cidade";
	$fdata["GoodName"] = "cidade";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","cidade");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cidade";

		$fdata["sourceSingle"] = "cidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cidade";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["cidade"] = $fdata;
		$tdatasocio[".searchableFields"][] = "cidade";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["estado"] = $fdata;
		$tdatasocio[".searchableFields"][] = "estado";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","pais");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pais";

		$fdata["sourceSingle"] = "pais";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["pais"] = $fdata;
		$tdatasocio[".searchableFields"][] = "pais";
//	latpombal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "latpombal";
	$fdata["GoodName"] = "latpombal";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","latpombal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "latpombal";

		$fdata["sourceSingle"] = "latpombal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latpombal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["latpombal"] = $fdata;
		$tdatasocio[".searchableFields"][] = "latpombal";
//	longpombal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "longpombal";
	$fdata["GoodName"] = "longpombal";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","longpombal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "longpombal";

		$fdata["sourceSingle"] = "longpombal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longpombal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["longpombal"] = $fdata;
		$tdatasocio[".searchableFields"][] = "longpombal";
//	clube
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "clube";
	$fdata["GoodName"] = "clube";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","clube");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clube";

		$fdata["sourceSingle"] = "clube";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clube";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "clube";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nome";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["clube"] = $fdata;
		$tdatasocio[".searchableFields"][] = "clube";
//	senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "senha";
	$fdata["GoodName"] = "senha";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","senha");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "senha";

		$fdata["sourceSingle"] = "senha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "senha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["senha"] = $fdata;
		$tdatasocio[".searchableFields"][] = "senha";
//	data_nascimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "data_nascimento";
	$fdata["GoodName"] = "data_nascimento";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","data_nascimento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "data_nascimento";

		$fdata["sourceSingle"] = "data_nascimento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_nascimento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["data_nascimento"] = $fdata;
		$tdatasocio[".searchableFields"][] = "data_nascimento";
//	reset
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "reset";
	$fdata["GoodName"] = "reset";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","reset");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "reset";

		$fdata["sourceSingle"] = "reset";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["reset"] = $fdata;
		$tdatasocio[".searchableFields"][] = "reset";
//	reset_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "reset_date";
	$fdata["GoodName"] = "reset_date";
	$fdata["ownerTable"] = "socio";
	$fdata["Label"] = GetFieldLabel("socio","reset_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "reset_date";

		$fdata["sourceSingle"] = "reset_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "reset_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasocio["reset_date"] = $fdata;
		$tdatasocio[".searchableFields"][] = "reset_date";


$tables_data["socio"]=&$tdatasocio;
$field_labels["socio"] = &$fieldLabelssocio;
$fieldToolTips["socio"] = &$fieldToolTipssocio;
$placeHolders["socio"] = &$placeHolderssocio;
$page_titles["socio"] = &$pageTitlessocio;


changeTextControlsToDate( "socio" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["socio"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["socio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_socio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	datacricad,  	nome,  	cpf,  	data_nascimento,  	datavenci,  	email,  	perfilusu,  	senha,  	endereco,  	numero,  	complemento,  	telefone,  	cep,  	cidade,  	estado,  	pais,  	latpombal,  	longpombal,  	clube,  	ativo,  	reset,  	reset_date";
$proto0["m_strFrom"] = "FROM socio";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "socio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "socio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cpf",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto10["m_sql"] = "cpf";
$proto10["m_srcTableName"] = "socio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "socio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "datacricad",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto14["m_sql"] = "datacricad";
$proto14["m_srcTableName"] = "socio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto16["m_sql"] = "ativo";
$proto16["m_srcTableName"] = "socio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "perfilusu",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto18["m_sql"] = "perfilusu";
$proto18["m_srcTableName"] = "socio";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "datavenci",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto19["m_sql"] = "datavenci";
$proto19["m_srcTableName"] = "socio";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto20["m_sql"] = "endereco";
$proto20["m_srcTableName"] = "socio";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto22["m_sql"] = "numero";
$proto22["m_srcTableName"] = "socio";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "complemento",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto24["m_sql"] = "complemento";
$proto24["m_srcTableName"] = "socio";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto26["m_sql"] = "telefone";
$proto26["m_srcTableName"] = "socio";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cep",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto28["m_sql"] = "cep";
$proto28["m_srcTableName"] = "socio";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto30["m_sql"] = "cidade";
$proto30["m_srcTableName"] = "socio";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto32["m_sql"] = "estado";
$proto32["m_srcTableName"] = "socio";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "pais",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto34["m_sql"] = "pais";
$proto34["m_srcTableName"] = "socio";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "latpombal",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto36["m_sql"] = "latpombal";
$proto36["m_srcTableName"] = "socio";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "longpombal",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto38["m_sql"] = "longpombal";
$proto38["m_srcTableName"] = "socio";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "clube",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto40["m_sql"] = "clube";
$proto40["m_srcTableName"] = "socio";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto42["m_sql"] = "senha";
$proto42["m_srcTableName"] = "socio";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "data_nascimento",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto44["m_sql"] = "data_nascimento";
$proto44["m_srcTableName"] = "socio";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "reset",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto46["m_sql"] = "reset";
$proto46["m_srcTableName"] = "socio";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "reset_date",
	"m_strTable" => "socio",
	"m_srcTableName" => "socio"
));

$proto48["m_sql"] = "reset_date";
$proto48["m_srcTableName"] = "socio";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "socio";
$proto51["m_srcTableName"] = "socio";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "nome";
$proto51["m_columns"][] = "cpf";
$proto51["m_columns"][] = "email";
$proto51["m_columns"][] = "datacricad";
$proto51["m_columns"][] = "ativo";
$proto51["m_columns"][] = "perfilusu";
$proto51["m_columns"][] = "datavenci";
$proto51["m_columns"][] = "endereco";
$proto51["m_columns"][] = "numero";
$proto51["m_columns"][] = "complemento";
$proto51["m_columns"][] = "telefone";
$proto51["m_columns"][] = "cep";
$proto51["m_columns"][] = "cidade";
$proto51["m_columns"][] = "estado";
$proto51["m_columns"][] = "pais";
$proto51["m_columns"][] = "latpombal";
$proto51["m_columns"][] = "longpombal";
$proto51["m_columns"][] = "clube";
$proto51["m_columns"][] = "senha";
$proto51["m_columns"][] = "data_nascimento";
$proto51["m_columns"][] = "datavenci";
$proto51["m_columns"][] = "reset";
$proto51["m_columns"][] = "reset_date";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "socio";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "socio";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="socio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_socio = createSqlQuery_socio();


	
		;

																						

$tdatasocio[".sqlquery"] = $queryData_socio;



include_once(getabspath("include/socio_events.php"));
$tdatasocio[".hasEvents"] = true;

$query = &$queryData_socio;
$table = "socio";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.


;
unset($query);
?>