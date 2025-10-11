<?php
$tdatapombo = array();
$tdatapombo[".searchableFields"] = array();
$tdatapombo[".ShortName"] = "pombo";
$tdatapombo[".OwnerID"] = "";
$tdatapombo[".OriginalTable"] = "pombo";


$tdatapombo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapombo[".originalPagesByType"] = $tdatapombo[".pagesByType"];
$tdatapombo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapombo[".originalPages"] = $tdatapombo[".pages"];
$tdatapombo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapombo[".originalDefaultPages"] = $tdatapombo[".defaultPages"];

//	field labels
$fieldLabelspombo = array();
$fieldToolTipspombo = array();
$pageTitlespombo = array();
$placeHolderspombo = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspombo["Portuguese(Brazil)"] = array();
	$fieldToolTipspombo["Portuguese(Brazil)"] = array();
	$placeHolderspombo["Portuguese(Brazil)"] = array();
	$pageTitlespombo["Portuguese(Brazil)"] = array();
	$fieldLabelspombo["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipspombo["Portuguese(Brazil)"]["id"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["anilha"] = "ANILHA OFICIAL FCB-BR-FCI";
	$fieldToolTipspombo["Portuguese(Brazil)"]["anilha"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["anilha"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["ativo"] = "ATIVO";
	$fieldToolTipspombo["Portuguese(Brazil)"]["ativo"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["ativo"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["sexo"] = "SEXO";
	$fieldToolTipspombo["Portuguese(Brazil)"]["sexo"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["sexo"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["cor"] = "COR";
	$fieldToolTipspombo["Portuguese(Brazil)"]["cor"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["cor"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["dono"] = "CRIADOR";
	$fieldToolTipspombo["Portuguese(Brazil)"]["dono"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["dono"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["pai"] = "PAI";
	$fieldToolTipspombo["Portuguese(Brazil)"]["pai"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["pai"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["mae"] = "MÃE";
	$fieldToolTipspombo["Portuguese(Brazil)"]["mae"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["mae"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["nome"] = "NOME";
	$fieldToolTipspombo["Portuguese(Brazil)"]["nome"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["observacao"] = "OBSERVAÇÃO";
	$fieldToolTipspombo["Portuguese(Brazil)"]["observacao"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["observacao"] = "";
	$fieldLabelspombo["Portuguese(Brazil)"]["socio"] = "Socio";
	$fieldToolTipspombo["Portuguese(Brazil)"]["socio"] = "";
	$placeHolderspombo["Portuguese(Brazil)"]["socio"] = "";
	if (count($fieldToolTipspombo["Portuguese(Brazil)"]))
		$tdatapombo[".isUseToolTips"] = true;
}


	$tdatapombo[".NCSearch"] = true;



$tdatapombo[".shortTableName"] = "pombo";
$tdatapombo[".nSecOptions"] = 0;

$tdatapombo[".mainTableOwnerID"] = "";
$tdatapombo[".entityType"] = 0;
$tdatapombo[".connId"] = "columbofilia_at_localhost";


$tdatapombo[".strOriginalTableName"] = "pombo";

	



$tdatapombo[".showAddInPopup"] = false;

$tdatapombo[".showEditInPopup"] = false;

$tdatapombo[".showViewInPopup"] = false;

$tdatapombo[".listAjax"] = false;
//	temporary
//$tdatapombo[".listAjax"] = false;

	$tdatapombo[".audit"] = false;

	$tdatapombo[".locking"] = false;


$pages = $tdatapombo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapombo[".edit"] = true;
	$tdatapombo[".afterEditAction"] = 1;
	$tdatapombo[".closePopupAfterEdit"] = 1;
	$tdatapombo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapombo[".add"] = true;
$tdatapombo[".afterAddAction"] = 1;
$tdatapombo[".closePopupAfterAdd"] = 1;
$tdatapombo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapombo[".list"] = true;
}



$tdatapombo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapombo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapombo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapombo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapombo[".printFriendly"] = true;
}



$tdatapombo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapombo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapombo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapombo[".isUseAjaxSuggest"] = true;

$tdatapombo[".rowHighlite"] = true;



																											

$tdatapombo[".ajaxCodeSnippetAdded"] = false;

$tdatapombo[".buttonsAdded"] = false;

$tdatapombo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapombo[".isUseTimeForSearch"] = false;


$tdatapombo[".badgeColor"] = "B22222";


$tdatapombo[".allSearchFields"] = array();
$tdatapombo[".filterFields"] = array();
$tdatapombo[".requiredSearchFields"] = array();

$tdatapombo[".googleLikeFields"] = array();
$tdatapombo[".googleLikeFields"][] = "anilha";
$tdatapombo[".googleLikeFields"][] = "ativo";
$tdatapombo[".googleLikeFields"][] = "sexo";
$tdatapombo[".googleLikeFields"][] = "cor";
$tdatapombo[".googleLikeFields"][] = "dono";
$tdatapombo[".googleLikeFields"][] = "pai";
$tdatapombo[".googleLikeFields"][] = "mae";
$tdatapombo[".googleLikeFields"][] = "nome";
$tdatapombo[".googleLikeFields"][] = "observacao";



$tdatapombo[".tableType"] = "list";

$tdatapombo[".printerPageOrientation"] = 0;
$tdatapombo[".nPrinterPageScale"] = 100;

$tdatapombo[".nPrinterSplitRecords"] = 40;

$tdatapombo[".geocodingEnabled"] = false;










$tdatapombo[".pageSize"] = 20;

$tdatapombo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapombo[".strOrderBy"] = $tstrOrderBy;

$tdatapombo[".orderindexes"] = array();


$tdatapombo[".sqlHead"] = "SELECT id,  	anilha,  	ativo,  	sexo,  	cor,  	dono,  	pai,  	mae,  	nome,  	observacao,  	socio";
$tdatapombo[".sqlFrom"] = "FROM pombo";
$tdatapombo[".sqlWhereExpr"] = "";
$tdatapombo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapombo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapombo[".arrGroupsPerPage"] = $arrGPP;

$tdatapombo[".highlightSearchResults"] = true;

$tableKeyspombo = array();
$tableKeyspombo[] = "id";
$tdatapombo[".Keys"] = $tableKeyspombo;


$tdatapombo[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","id");
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


	$tdatapombo["id"] = $fdata;
		$tdatapombo[".searchableFields"][] = "id";
//	anilha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "anilha";
	$fdata["GoodName"] = "anilha";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","anilha");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "anilha";

		$fdata["sourceSingle"] = "anilha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anilha";

	
	
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


	$tdatapombo["anilha"] = $fdata;
		$tdatapombo[".searchableFields"][] = "anilha";
//	ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ativo";
	$fdata["GoodName"] = "ativo";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","ativo");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
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


	$tdatapombo["ativo"] = $fdata;
		$tdatapombo[".searchableFields"][] = "ativo";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","sexo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sexo";

		$fdata["sourceSingle"] = "sexo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";

	
	
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
	$edata["LookupValues"][] = "MACHO";
	$edata["LookupValues"][] = "FÊMEA";

	
		$edata["SelectSize"] = 1;

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


	$tdatapombo["sexo"] = $fdata;
		$tdatapombo[".searchableFields"][] = "sexo";
//	cor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cor";
	$fdata["GoodName"] = "cor";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","cor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cor";

		$fdata["sourceSingle"] = "cor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cor";

	
	
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
	$edata["LookupTable"] = "cores";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nome";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
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


	$tdatapombo["cor"] = $fdata;
		$tdatapombo[".searchableFields"][] = "cor";
//	dono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dono";
	$fdata["GoodName"] = "dono";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","dono");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dono";

		$fdata["sourceSingle"] = "dono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dono";

	
	
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


	$tdatapombo["dono"] = $fdata;
		$tdatapombo[".searchableFields"][] = "dono";
//	pai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pai";
	$fdata["GoodName"] = "pai";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","pai");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "pai";

		$fdata["sourceSingle"] = "pai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pai";

	
	
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
	$edata["LookupTable"] = "pombo";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "anilha";

	

	
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


	$tdatapombo["pai"] = $fdata;
		$tdatapombo[".searchableFields"][] = "pai";
//	mae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mae";
	$fdata["GoodName"] = "mae";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","mae");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mae";

		$fdata["sourceSingle"] = "mae";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mae";

	
	
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
	$edata["LookupTable"] = "pombo";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "anilha";

	

	
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


	$tdatapombo["mae"] = $fdata;
		$tdatapombo[".searchableFields"][] = "mae";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","nome");
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


	$tdatapombo["nome"] = $fdata;
		$tdatapombo[".searchableFields"][] = "nome";
//	observacao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "observacao";
	$fdata["GoodName"] = "observacao";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","observacao");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "observacao";

		$fdata["sourceSingle"] = "observacao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observacao";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatapombo["observacao"] = $fdata;
		$tdatapombo[".searchableFields"][] = "observacao";
//	socio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "socio";
	$fdata["GoodName"] = "socio";
	$fdata["ownerTable"] = "pombo";
	$fdata["Label"] = GetFieldLabel("pombo","socio");
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


	$tdatapombo["socio"] = $fdata;
		$tdatapombo[".searchableFields"][] = "socio";


$tables_data["pombo"]=&$tdatapombo;
$field_labels["pombo"] = &$fieldLabelspombo;
$fieldToolTips["pombo"] = &$fieldToolTipspombo;
$placeHolders["pombo"] = &$placeHolderspombo;
$page_titles["pombo"] = &$pageTitlespombo;


changeTextControlsToDate( "pombo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pombo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pombo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pombo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	anilha,  	ativo,  	sexo,  	cor,  	dono,  	pai,  	mae,  	nome,  	observacao,  	socio";
$proto0["m_strFrom"] = "FROM pombo";
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
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pombo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "anilha",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto8["m_sql"] = "anilha";
$proto8["m_srcTableName"] = "pombo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto10["m_sql"] = "ativo";
$proto10["m_srcTableName"] = "pombo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto12["m_sql"] = "sexo";
$proto12["m_srcTableName"] = "pombo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cor",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto14["m_sql"] = "cor";
$proto14["m_srcTableName"] = "pombo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dono",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto16["m_sql"] = "dono";
$proto16["m_srcTableName"] = "pombo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pai",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto18["m_sql"] = "pai";
$proto18["m_srcTableName"] = "pombo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mae",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto20["m_sql"] = "mae";
$proto20["m_srcTableName"] = "pombo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto22["m_sql"] = "nome";
$proto22["m_srcTableName"] = "pombo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "observacao",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto24["m_sql"] = "observacao";
$proto24["m_srcTableName"] = "pombo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "socio",
	"m_strTable" => "pombo",
	"m_srcTableName" => "pombo"
));

$proto26["m_sql"] = "socio";
$proto26["m_srcTableName"] = "pombo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "pombo";
$proto29["m_srcTableName"] = "pombo";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "anilha";
$proto29["m_columns"][] = "ativo";
$proto29["m_columns"][] = "sexo";
$proto29["m_columns"][] = "cor";
$proto29["m_columns"][] = "dono";
$proto29["m_columns"][] = "pai";
$proto29["m_columns"][] = "mae";
$proto29["m_columns"][] = "nome";
$proto29["m_columns"][] = "observacao";
$proto29["m_columns"][] = "socio";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "pombo";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "pombo";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pombo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pombo = createSqlQuery_pombo();


	
		;

											

$tdatapombo[".sqlquery"] = $queryData_pombo;



include_once(getabspath("include/pombo_events.php"));
$tdatapombo[".hasEvents"] = true;

$query = &$queryData_pombo;
$table = "pombo";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

if($_SESSION['GroupID'] <> 'ADMIN') {

$query->addWhere("socio = '{$_SESSION['idUsuario']}' ");

}
;
unset($query);
?>