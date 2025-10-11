<?php
$tdataanilhas = array();
$tdataanilhas[".searchableFields"] = array();
$tdataanilhas[".ShortName"] = "anilhas";
$tdataanilhas[".OwnerID"] = "";
$tdataanilhas[".OriginalTable"] = "anilhas";


$tdataanilhas[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\",\"edit1\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataanilhas[".originalPagesByType"] = $tdataanilhas[".pagesByType"];
$tdataanilhas[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\",\"edit1\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataanilhas[".originalPages"] = $tdataanilhas[".pages"];
$tdataanilhas[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataanilhas[".originalDefaultPages"] = $tdataanilhas[".defaultPages"];

//	field labels
$fieldLabelsanilhas = array();
$fieldToolTipsanilhas = array();
$pageTitlesanilhas = array();
$placeHoldersanilhas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsanilhas["Portuguese(Brazil)"] = array();
	$fieldToolTipsanilhas["Portuguese(Brazil)"] = array();
	$placeHoldersanilhas["Portuguese(Brazil)"] = array();
	$pageTitlesanilhas["Portuguese(Brazil)"] = array();
	$fieldLabelsanilhas["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsanilhas["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersanilhas["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsanilhas["Portuguese(Brazil)"]["serie"] = "SÉRIE";
	$fieldToolTipsanilhas["Portuguese(Brazil)"]["serie"] = "";
	$placeHoldersanilhas["Portuguese(Brazil)"]["serie"] = "";
	$fieldLabelsanilhas["Portuguese(Brazil)"]["mapa"] = "MAPA";
	$fieldToolTipsanilhas["Portuguese(Brazil)"]["mapa"] = "";
	$placeHoldersanilhas["Portuguese(Brazil)"]["mapa"] = "";
	$fieldLabelsanilhas["Portuguese(Brazil)"]["socio"] = "SÓCIO";
	$fieldToolTipsanilhas["Portuguese(Brazil)"]["socio"] = "";
	$placeHoldersanilhas["Portuguese(Brazil)"]["socio"] = "";
	$fieldLabelsanilhas["Portuguese(Brazil)"]["status"] = "STATUS";
	$fieldToolTipsanilhas["Portuguese(Brazil)"]["status"] = "";
	$placeHoldersanilhas["Portuguese(Brazil)"]["status"] = "";
	$fieldLabelsanilhas["Portuguese(Brazil)"]["idanilha"] = "ID ANILHA";
	$fieldToolTipsanilhas["Portuguese(Brazil)"]["idanilha"] = "";
	$placeHoldersanilhas["Portuguese(Brazil)"]["idanilha"] = "";
	$fieldLabelsanilhas["Portuguese(Brazil)"]["nome"] = "NOME";
	$fieldToolTipsanilhas["Portuguese(Brazil)"]["nome"] = "";
	$placeHoldersanilhas["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsanilhas["Portuguese(Brazil)"]["cpf"] = "CPF";
	$fieldToolTipsanilhas["Portuguese(Brazil)"]["cpf"] = "";
	$placeHoldersanilhas["Portuguese(Brazil)"]["cpf"] = "";
	$fieldLabelsanilhas["Portuguese(Brazil)"]["telefone"] = "TELEFONE";
	$fieldToolTipsanilhas["Portuguese(Brazil)"]["telefone"] = "";
	$placeHoldersanilhas["Portuguese(Brazil)"]["telefone"] = "";
	if (count($fieldToolTipsanilhas["Portuguese(Brazil)"]))
		$tdataanilhas[".isUseToolTips"] = true;
}


	$tdataanilhas[".NCSearch"] = true;



$tdataanilhas[".shortTableName"] = "anilhas";
$tdataanilhas[".nSecOptions"] = 0;

$tdataanilhas[".mainTableOwnerID"] = "";
$tdataanilhas[".entityType"] = 0;
$tdataanilhas[".connId"] = "columbofilia_at_localhost";


$tdataanilhas[".strOriginalTableName"] = "anilhas";

	



$tdataanilhas[".showAddInPopup"] = false;

$tdataanilhas[".showEditInPopup"] = false;

$tdataanilhas[".showViewInPopup"] = false;

$tdataanilhas[".listAjax"] = false;
//	temporary
//$tdataanilhas[".listAjax"] = false;

	$tdataanilhas[".audit"] = false;

	$tdataanilhas[".locking"] = false;


$pages = $tdataanilhas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataanilhas[".edit"] = true;
	$tdataanilhas[".afterEditAction"] = 1;
	$tdataanilhas[".closePopupAfterEdit"] = 1;
	$tdataanilhas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataanilhas[".add"] = true;
$tdataanilhas[".afterAddAction"] = 1;
$tdataanilhas[".closePopupAfterAdd"] = 1;
$tdataanilhas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataanilhas[".list"] = true;
}



$tdataanilhas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataanilhas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataanilhas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataanilhas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataanilhas[".printFriendly"] = true;
}



$tdataanilhas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataanilhas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataanilhas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataanilhas[".isUseAjaxSuggest"] = true;

$tdataanilhas[".rowHighlite"] = true;



																											

$tdataanilhas[".ajaxCodeSnippetAdded"] = false;

$tdataanilhas[".buttonsAdded"] = false;

$tdataanilhas[".addPageEvents"] = true;

// use timepicker for search panel
$tdataanilhas[".isUseTimeForSearch"] = false;


$tdataanilhas[".badgeColor"] = "1e90ff";


$tdataanilhas[".allSearchFields"] = array();
$tdataanilhas[".filterFields"] = array();
$tdataanilhas[".requiredSearchFields"] = array();

$tdataanilhas[".googleLikeFields"] = array();
$tdataanilhas[".googleLikeFields"][] = "serie";
$tdataanilhas[".googleLikeFields"][] = "mapa";
$tdataanilhas[".googleLikeFields"][] = "socio";
$tdataanilhas[".googleLikeFields"][] = "status";
$tdataanilhas[".googleLikeFields"][] = "idanilha";



$tdataanilhas[".tableType"] = "list";

$tdataanilhas[".printerPageOrientation"] = 0;
$tdataanilhas[".nPrinterPageScale"] = 100;

$tdataanilhas[".nPrinterSplitRecords"] = 40;

$tdataanilhas[".geocodingEnabled"] = false;










$tdataanilhas[".pageSize"] = 20;

$tdataanilhas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataanilhas[".strOrderBy"] = $tstrOrderBy;

$tdataanilhas[".orderindexes"] = array();


$tdataanilhas[".sqlHead"] = "SELECT id,  	serie,  	mapa,  	socio,  	status,  	idanilha,  	nome,  	cpf,  	telefone";
$tdataanilhas[".sqlFrom"] = "FROM anilhas";
$tdataanilhas[".sqlWhereExpr"] = "";
$tdataanilhas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanilhas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanilhas[".arrGroupsPerPage"] = $arrGPP;

$tdataanilhas[".highlightSearchResults"] = true;

$tableKeysanilhas = array();
$tableKeysanilhas[] = "id";
$tdataanilhas[".Keys"] = $tableKeysanilhas;


$tdataanilhas[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "anilhas";
	$fdata["Label"] = GetFieldLabel("anilhas","id");
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


	$tdataanilhas["id"] = $fdata;
		$tdataanilhas[".searchableFields"][] = "id";
//	serie
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "serie";
	$fdata["GoodName"] = "serie";
	$fdata["ownerTable"] = "anilhas";
	$fdata["Label"] = GetFieldLabel("anilhas","serie");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "serie";

		$fdata["sourceSingle"] = "serie";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "serie";

	
	
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


	$tdataanilhas["serie"] = $fdata;
		$tdataanilhas[".searchableFields"][] = "serie";
//	mapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mapa";
	$fdata["GoodName"] = "mapa";
	$fdata["ownerTable"] = "anilhas";
	$fdata["Label"] = GetFieldLabel("anilhas","mapa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mapa";

		$fdata["sourceSingle"] = "mapa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mapa";

	
	
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


	$tdataanilhas["mapa"] = $fdata;
		$tdataanilhas[".searchableFields"][] = "mapa";
//	socio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "socio";
	$fdata["GoodName"] = "socio";
	$fdata["ownerTable"] = "anilhas";
	$fdata["Label"] = GetFieldLabel("anilhas","socio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "socio";

		$fdata["sourceSingle"] = "socio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "socio";

	
	
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


	$tdataanilhas["socio"] = $fdata;
		$tdataanilhas[".searchableFields"][] = "socio";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "anilhas";
	$fdata["Label"] = GetFieldLabel("anilhas","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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
	$edata["LookupValues"][] = "ATIVO";
	$edata["LookupValues"][] = "PERDIDO";
	$edata["LookupValues"][] = "ÓBITO";
	$edata["LookupValues"][] = "DOAÇÃO";

	
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


	$tdataanilhas["status"] = $fdata;
		$tdataanilhas[".searchableFields"][] = "status";
//	idanilha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "idanilha";
	$fdata["GoodName"] = "idanilha";
	$fdata["ownerTable"] = "anilhas";
	$fdata["Label"] = GetFieldLabel("anilhas","idanilha");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idanilha";

		$fdata["sourceSingle"] = "idanilha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idanilha";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataanilhas["idanilha"] = $fdata;
		$tdataanilhas[".searchableFields"][] = "idanilha";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "anilhas";
	$fdata["Label"] = GetFieldLabel("anilhas","nome");
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


	$tdataanilhas["nome"] = $fdata;
		$tdataanilhas[".searchableFields"][] = "nome";
//	cpf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cpf";
	$fdata["GoodName"] = "cpf";
	$fdata["ownerTable"] = "anilhas";
	$fdata["Label"] = GetFieldLabel("anilhas","cpf");
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


	$tdataanilhas["cpf"] = $fdata;
		$tdataanilhas[".searchableFields"][] = "cpf";
//	telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "telefone";
	$fdata["GoodName"] = "telefone";
	$fdata["ownerTable"] = "anilhas";
	$fdata["Label"] = GetFieldLabel("anilhas","telefone");
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


	$tdataanilhas["telefone"] = $fdata;
		$tdataanilhas[".searchableFields"][] = "telefone";


$tables_data["anilhas"]=&$tdataanilhas;
$field_labels["anilhas"] = &$fieldLabelsanilhas;
$fieldToolTips["anilhas"] = &$fieldToolTipsanilhas;
$placeHolders["anilhas"] = &$placeHoldersanilhas;
$page_titles["anilhas"] = &$pageTitlesanilhas;


changeTextControlsToDate( "anilhas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["anilhas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["anilhas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_anilhas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	serie,  	mapa,  	socio,  	status,  	idanilha,  	nome,  	cpf,  	telefone";
$proto0["m_strFrom"] = "FROM anilhas";
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
	"m_strTable" => "anilhas",
	"m_srcTableName" => "anilhas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "anilhas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "serie",
	"m_strTable" => "anilhas",
	"m_srcTableName" => "anilhas"
));

$proto8["m_sql"] = "serie";
$proto8["m_srcTableName"] = "anilhas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mapa",
	"m_strTable" => "anilhas",
	"m_srcTableName" => "anilhas"
));

$proto10["m_sql"] = "mapa";
$proto10["m_srcTableName"] = "anilhas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "socio",
	"m_strTable" => "anilhas",
	"m_srcTableName" => "anilhas"
));

$proto12["m_sql"] = "socio";
$proto12["m_srcTableName"] = "anilhas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "anilhas",
	"m_srcTableName" => "anilhas"
));

$proto14["m_sql"] = "status";
$proto14["m_srcTableName"] = "anilhas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "idanilha",
	"m_strTable" => "anilhas",
	"m_srcTableName" => "anilhas"
));

$proto16["m_sql"] = "idanilha";
$proto16["m_srcTableName"] = "anilhas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "anilhas",
	"m_srcTableName" => "anilhas"
));

$proto18["m_sql"] = "nome";
$proto18["m_srcTableName"] = "anilhas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cpf",
	"m_strTable" => "anilhas",
	"m_srcTableName" => "anilhas"
));

$proto20["m_sql"] = "cpf";
$proto20["m_srcTableName"] = "anilhas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone",
	"m_strTable" => "anilhas",
	"m_srcTableName" => "anilhas"
));

$proto22["m_sql"] = "telefone";
$proto22["m_srcTableName"] = "anilhas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "anilhas";
$proto25["m_srcTableName"] = "anilhas";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "serie";
$proto25["m_columns"][] = "mapa";
$proto25["m_columns"][] = "socio";
$proto25["m_columns"][] = "status";
$proto25["m_columns"][] = "idanilha";
$proto25["m_columns"][] = "nome";
$proto25["m_columns"][] = "cpf";
$proto25["m_columns"][] = "telefone";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "anilhas";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "anilhas";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="anilhas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_anilhas = createSqlQuery_anilhas();


	
		;

									

$tdataanilhas[".sqlquery"] = $queryData_anilhas;



include_once(getabspath("include/anilhas_events.php"));
$tdataanilhas[".hasEvents"] = true;

$query = &$queryData_anilhas;
$table = "anilhas";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

if($_SESSION['GroupID'] <> 'ADMIN') {

$query->addWhere("socio = '{$_SESSION['idUsuario']}' ");

}
;
unset($query);
?>