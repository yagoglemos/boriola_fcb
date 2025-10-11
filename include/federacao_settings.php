<?php
$tdatafederacao = array();
$tdatafederacao[".searchableFields"] = array();
$tdatafederacao[".ShortName"] = "federacao";
$tdatafederacao[".OwnerID"] = "";
$tdatafederacao[".OriginalTable"] = "federacao";


$tdatafederacao[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafederacao[".originalPagesByType"] = $tdatafederacao[".pagesByType"];
$tdatafederacao[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafederacao[".originalPages"] = $tdatafederacao[".pages"];
$tdatafederacao[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafederacao[".originalDefaultPages"] = $tdatafederacao[".defaultPages"];

//	field labels
$fieldLabelsfederacao = array();
$fieldToolTipsfederacao = array();
$pageTitlesfederacao = array();
$placeHoldersfederacao = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsfederacao["Portuguese(Brazil)"] = array();
	$fieldToolTipsfederacao["Portuguese(Brazil)"] = array();
	$placeHoldersfederacao["Portuguese(Brazil)"] = array();
	$pageTitlesfederacao["Portuguese(Brazil)"] = array();
	$fieldLabelsfederacao["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipsfederacao["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersfederacao["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsfederacao["Portuguese(Brazil)"]["nome"] = "NOME";
	$fieldToolTipsfederacao["Portuguese(Brazil)"]["nome"] = "";
	$placeHoldersfederacao["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsfederacao["Portuguese(Brazil)"]["ativo"] = "ATIVO";
	$fieldToolTipsfederacao["Portuguese(Brazil)"]["ativo"] = "";
	$placeHoldersfederacao["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelsfederacao["Portuguese(Brazil)"]["cidade"] = "CIDADE";
	$fieldToolTipsfederacao["Portuguese(Brazil)"]["cidade"] = "";
	$placeHoldersfederacao["Portuguese(Brazil)"]["cidade"] = "";
	$fieldLabelsfederacao["Portuguese(Brazil)"]["uf"] = "UF";
	$fieldToolTipsfederacao["Portuguese(Brazil)"]["uf"] = "";
	$placeHoldersfederacao["Portuguese(Brazil)"]["uf"] = "";
	$fieldLabelsfederacao["Portuguese(Brazil)"]["pais"] = "PAÍS";
	$fieldToolTipsfederacao["Portuguese(Brazil)"]["pais"] = "";
	$placeHoldersfederacao["Portuguese(Brazil)"]["pais"] = "";
	$fieldLabelsfederacao["Portuguese(Brazil)"]["telefone"] = "TELEFONE";
	$fieldToolTipsfederacao["Portuguese(Brazil)"]["telefone"] = "";
	$placeHoldersfederacao["Portuguese(Brazil)"]["telefone"] = "";
	$fieldLabelsfederacao["Portuguese(Brazil)"]["presidente"] = "PRESIDENTE";
	$fieldToolTipsfederacao["Portuguese(Brazil)"]["presidente"] = "";
	$placeHoldersfederacao["Portuguese(Brazil)"]["presidente"] = "";
	if (count($fieldToolTipsfederacao["Portuguese(Brazil)"]))
		$tdatafederacao[".isUseToolTips"] = true;
}


	$tdatafederacao[".NCSearch"] = true;



$tdatafederacao[".shortTableName"] = "federacao";
$tdatafederacao[".nSecOptions"] = 0;

$tdatafederacao[".mainTableOwnerID"] = "";
$tdatafederacao[".entityType"] = 0;
$tdatafederacao[".connId"] = "columbofilia_at_localhost";


$tdatafederacao[".strOriginalTableName"] = "federacao";

	



$tdatafederacao[".showAddInPopup"] = false;

$tdatafederacao[".showEditInPopup"] = false;

$tdatafederacao[".showViewInPopup"] = false;

$tdatafederacao[".listAjax"] = false;
//	temporary
//$tdatafederacao[".listAjax"] = false;

	$tdatafederacao[".audit"] = false;

	$tdatafederacao[".locking"] = false;


$pages = $tdatafederacao[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafederacao[".edit"] = true;
	$tdatafederacao[".afterEditAction"] = 1;
	$tdatafederacao[".closePopupAfterEdit"] = 1;
	$tdatafederacao[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafederacao[".add"] = true;
$tdatafederacao[".afterAddAction"] = 1;
$tdatafederacao[".closePopupAfterAdd"] = 1;
$tdatafederacao[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafederacao[".list"] = true;
}



$tdatafederacao[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafederacao[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafederacao[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafederacao[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafederacao[".printFriendly"] = true;
}



$tdatafederacao[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafederacao[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafederacao[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafederacao[".isUseAjaxSuggest"] = false;

$tdatafederacao[".rowHighlite"] = true;



																											

$tdatafederacao[".ajaxCodeSnippetAdded"] = false;

$tdatafederacao[".buttonsAdded"] = false;

$tdatafederacao[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafederacao[".isUseTimeForSearch"] = false;


$tdatafederacao[".badgeColor"] = "DC143C";


$tdatafederacao[".allSearchFields"] = array();
$tdatafederacao[".filterFields"] = array();
$tdatafederacao[".requiredSearchFields"] = array();

$tdatafederacao[".googleLikeFields"] = array();
$tdatafederacao[".googleLikeFields"][] = "nome";
$tdatafederacao[".googleLikeFields"][] = "ativo";
$tdatafederacao[".googleLikeFields"][] = "cidade";
$tdatafederacao[".googleLikeFields"][] = "uf";
$tdatafederacao[".googleLikeFields"][] = "pais";
$tdatafederacao[".googleLikeFields"][] = "telefone";
$tdatafederacao[".googleLikeFields"][] = "presidente";



$tdatafederacao[".tableType"] = "list";

$tdatafederacao[".printerPageOrientation"] = 0;
$tdatafederacao[".nPrinterPageScale"] = 100;

$tdatafederacao[".nPrinterSplitRecords"] = 40;

$tdatafederacao[".geocodingEnabled"] = false;










$tdatafederacao[".pageSize"] = 20;

$tdatafederacao[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafederacao[".strOrderBy"] = $tstrOrderBy;

$tdatafederacao[".orderindexes"] = array();


$tdatafederacao[".sqlHead"] = "SELECT id,  	nome,  	ativo,  	cidade,  	uf,  	pais,  	telefone,  	presidente";
$tdatafederacao[".sqlFrom"] = "FROM federacao";
$tdatafederacao[".sqlWhereExpr"] = "";
$tdatafederacao[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafederacao[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafederacao[".arrGroupsPerPage"] = $arrGPP;


$tableKeysfederacao = array();
$tableKeysfederacao[] = "id";
$tdatafederacao[".Keys"] = $tableKeysfederacao;


$tdatafederacao[".hideMobileList"] = array();
		$tdatafederacao[".hideMobileList"][1] = array();
$tdatafederacao[".hideMobileList"][1]["ativo"] = true;
		$tdatafederacao[".hideMobileList"][1]["pais"] = true;
		$tdatafederacao[".hideMobileList"][1]["telefone"] = true;
		$tdatafederacao[".hideMobileList"][5] = array();
$tdatafederacao[".hideMobileList"][5]["ativo"] = true;
		$tdatafederacao[".hideMobileList"][5]["pais"] = true;
		$tdatafederacao[".hideMobileList"][5]["telefone"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "federacao";
	$fdata["Label"] = GetFieldLabel("federacao","id");
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


	$tdatafederacao["id"] = $fdata;
		$tdatafederacao[".searchableFields"][] = "id";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "federacao";
	$fdata["Label"] = GetFieldLabel("federacao","nome");
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


	$tdatafederacao["nome"] = $fdata;
		$tdatafederacao[".searchableFields"][] = "nome";
//	ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ativo";
	$fdata["GoodName"] = "ativo";
	$fdata["ownerTable"] = "federacao";
	$fdata["Label"] = GetFieldLabel("federacao","ativo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ativo";

		$fdata["sourceSingle"] = "ativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ativo";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SIM";
	$edata["LookupValues"][] = "NÃO";

	
	
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


	$tdatafederacao["ativo"] = $fdata;
		$tdatafederacao[".searchableFields"][] = "ativo";
//	cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cidade";
	$fdata["GoodName"] = "cidade";
	$fdata["ownerTable"] = "federacao";
	$fdata["Label"] = GetFieldLabel("federacao","cidade");
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


	$tdatafederacao["cidade"] = $fdata;
		$tdatafederacao[".searchableFields"][] = "cidade";
//	uf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "uf";
	$fdata["GoodName"] = "uf";
	$fdata["ownerTable"] = "federacao";
	$fdata["Label"] = GetFieldLabel("federacao","uf");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uf";

		$fdata["sourceSingle"] = "uf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uf";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatafederacao["uf"] = $fdata;
		$tdatafederacao[".searchableFields"][] = "uf";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "federacao";
	$fdata["Label"] = GetFieldLabel("federacao","pais");
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


	$tdatafederacao["pais"] = $fdata;
		$tdatafederacao[".searchableFields"][] = "pais";
//	telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "telefone";
	$fdata["GoodName"] = "telefone";
	$fdata["ownerTable"] = "federacao";
	$fdata["Label"] = GetFieldLabel("federacao","telefone");
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


	$tdatafederacao["telefone"] = $fdata;
		$tdatafederacao[".searchableFields"][] = "telefone";
//	presidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "presidente";
	$fdata["GoodName"] = "presidente";
	$fdata["ownerTable"] = "federacao";
	$fdata["Label"] = GetFieldLabel("federacao","presidente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "presidente";

		$fdata["sourceSingle"] = "presidente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "presidente";

	
	
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
	$edata["LookupTable"] = "socio";
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


	$tdatafederacao["presidente"] = $fdata;
		$tdatafederacao[".searchableFields"][] = "presidente";


$tables_data["federacao"]=&$tdatafederacao;
$field_labels["federacao"] = &$fieldLabelsfederacao;
$fieldToolTips["federacao"] = &$fieldToolTipsfederacao;
$placeHolders["federacao"] = &$placeHoldersfederacao;
$page_titles["federacao"] = &$pageTitlesfederacao;


changeTextControlsToDate( "federacao" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["federacao"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["federacao"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_federacao()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome,  	ativo,  	cidade,  	uf,  	pais,  	telefone,  	presidente";
$proto0["m_strFrom"] = "FROM federacao";
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
	"m_strTable" => "federacao",
	"m_srcTableName" => "federacao"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "federacao";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "federacao",
	"m_srcTableName" => "federacao"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "federacao";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "federacao",
	"m_srcTableName" => "federacao"
));

$proto10["m_sql"] = "ativo";
$proto10["m_srcTableName"] = "federacao";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "federacao",
	"m_srcTableName" => "federacao"
));

$proto12["m_sql"] = "cidade";
$proto12["m_srcTableName"] = "federacao";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "uf",
	"m_strTable" => "federacao",
	"m_srcTableName" => "federacao"
));

$proto14["m_sql"] = "uf";
$proto14["m_srcTableName"] = "federacao";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pais",
	"m_strTable" => "federacao",
	"m_srcTableName" => "federacao"
));

$proto16["m_sql"] = "pais";
$proto16["m_srcTableName"] = "federacao";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone",
	"m_strTable" => "federacao",
	"m_srcTableName" => "federacao"
));

$proto18["m_sql"] = "telefone";
$proto18["m_srcTableName"] = "federacao";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "presidente",
	"m_strTable" => "federacao",
	"m_srcTableName" => "federacao"
));

$proto20["m_sql"] = "presidente";
$proto20["m_srcTableName"] = "federacao";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "federacao";
$proto23["m_srcTableName"] = "federacao";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "nome";
$proto23["m_columns"][] = "ativo";
$proto23["m_columns"][] = "cidade";
$proto23["m_columns"][] = "uf";
$proto23["m_columns"][] = "pais";
$proto23["m_columns"][] = "telefone";
$proto23["m_columns"][] = "presidente";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "federacao";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "federacao";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="federacao";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_federacao = createSqlQuery_federacao();


	
		;

								

$tdatafederacao[".sqlquery"] = $queryData_federacao;



$tdatafederacao[".hasEvents"] = false;

?>