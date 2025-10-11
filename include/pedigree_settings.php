<?php
$tdatapedigree = array();
$tdatapedigree[".searchableFields"] = array();
$tdatapedigree[".ShortName"] = "pedigree";
$tdatapedigree[".OwnerID"] = "usuario";
$tdatapedigree[".OriginalTable"] = "pedigree";


$tdatapedigree[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapedigree[".originalPagesByType"] = $tdatapedigree[".pagesByType"];
$tdatapedigree[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapedigree[".originalPages"] = $tdatapedigree[".pages"];
$tdatapedigree[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapedigree[".originalDefaultPages"] = $tdatapedigree[".defaultPages"];

//	field labels
$fieldLabelspedigree = array();
$fieldToolTipspedigree = array();
$pageTitlespedigree = array();
$placeHolderspedigree = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspedigree["Portuguese(Brazil)"] = array();
	$fieldToolTipspedigree["Portuguese(Brazil)"] = array();
	$placeHolderspedigree["Portuguese(Brazil)"] = array();
	$pageTitlespedigree["Portuguese(Brazil)"] = array();
	$fieldLabelspedigree["Portuguese(Brazil)"]["id"] = "CÓDIGO";
	$fieldToolTipspedigree["Portuguese(Brazil)"]["id"] = "";
	$placeHolderspedigree["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelspedigree["Portuguese(Brazil)"]["filhote"] = "FILHOTE";
	$fieldToolTipspedigree["Portuguese(Brazil)"]["filhote"] = "";
	$placeHolderspedigree["Portuguese(Brazil)"]["filhote"] = "";
	$fieldLabelspedigree["Portuguese(Brazil)"]["usuario"] = "USUÁRIO";
	$fieldToolTipspedigree["Portuguese(Brazil)"]["usuario"] = "";
	$placeHolderspedigree["Portuguese(Brazil)"]["usuario"] = "";
	$fieldLabelspedigree["Portuguese(Brazil)"]["data"] = "DATA";
	$fieldToolTipspedigree["Portuguese(Brazil)"]["data"] = "";
	$placeHolderspedigree["Portuguese(Brazil)"]["data"] = "";
	$fieldLabelspedigree["Portuguese(Brazil)"]["parentes"] = "PARENTES";
	$fieldToolTipspedigree["Portuguese(Brazil)"]["parentes"] = "";
	$placeHolderspedigree["Portuguese(Brazil)"]["parentes"] = "";
	$fieldLabelspedigree["Portuguese(Brazil)"]["cor"] = "COR";
	$fieldToolTipspedigree["Portuguese(Brazil)"]["cor"] = "";
	$placeHolderspedigree["Portuguese(Brazil)"]["cor"] = "";
	$fieldLabelspedigree["Portuguese(Brazil)"]["pai"] = "PAI";
	$fieldToolTipspedigree["Portuguese(Brazil)"]["pai"] = "";
	$placeHolderspedigree["Portuguese(Brazil)"]["pai"] = "";
	$fieldLabelspedigree["Portuguese(Brazil)"]["mae"] = "MÃE";
	$fieldToolTipspedigree["Portuguese(Brazil)"]["mae"] = "";
	$placeHolderspedigree["Portuguese(Brazil)"]["mae"] = "";
	if (count($fieldToolTipspedigree["Portuguese(Brazil)"]))
		$tdatapedigree[".isUseToolTips"] = true;
}


	$tdatapedigree[".NCSearch"] = true;



$tdatapedigree[".shortTableName"] = "pedigree";
$tdatapedigree[".nSecOptions"] = 1;

$tdatapedigree[".mainTableOwnerID"] = "usuario";
$tdatapedigree[".entityType"] = 0;
$tdatapedigree[".connId"] = "columbofilia_at_localhost";


$tdatapedigree[".strOriginalTableName"] = "pedigree";

	



$tdatapedigree[".showAddInPopup"] = false;

$tdatapedigree[".showEditInPopup"] = false;

$tdatapedigree[".showViewInPopup"] = false;

$tdatapedigree[".listAjax"] = false;
//	temporary
//$tdatapedigree[".listAjax"] = false;

	$tdatapedigree[".audit"] = false;

	$tdatapedigree[".locking"] = false;


$pages = $tdatapedigree[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapedigree[".edit"] = true;
	$tdatapedigree[".afterEditAction"] = 1;
	$tdatapedigree[".closePopupAfterEdit"] = 1;
	$tdatapedigree[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapedigree[".add"] = true;
$tdatapedigree[".afterAddAction"] = 1;
$tdatapedigree[".closePopupAfterAdd"] = 1;
$tdatapedigree[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapedigree[".list"] = true;
}



$tdatapedigree[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapedigree[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapedigree[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapedigree[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapedigree[".printFriendly"] = true;
}



$tdatapedigree[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapedigree[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapedigree[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapedigree[".isUseAjaxSuggest"] = true;

$tdatapedigree[".rowHighlite"] = true;



																											

$tdatapedigree[".ajaxCodeSnippetAdded"] = false;

$tdatapedigree[".buttonsAdded"] = false;

$tdatapedigree[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapedigree[".isUseTimeForSearch"] = false;


$tdatapedigree[".badgeColor"] = "6B8E23";


$tdatapedigree[".allSearchFields"] = array();
$tdatapedigree[".filterFields"] = array();
$tdatapedigree[".requiredSearchFields"] = array();

$tdatapedigree[".googleLikeFields"] = array();
$tdatapedigree[".googleLikeFields"][] = "filhote";
$tdatapedigree[".googleLikeFields"][] = "data";
$tdatapedigree[".googleLikeFields"][] = "cor";
$tdatapedigree[".googleLikeFields"][] = "pai";
$tdatapedigree[".googleLikeFields"][] = "mae";



$tdatapedigree[".tableType"] = "list";

$tdatapedigree[".printerPageOrientation"] = 0;
$tdatapedigree[".nPrinterPageScale"] = 100;

$tdatapedigree[".nPrinterSplitRecords"] = 40;

$tdatapedigree[".geocodingEnabled"] = false;










$tdatapedigree[".pageSize"] = 20;

$tdatapedigree[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapedigree[".strOrderBy"] = $tstrOrderBy;

$tdatapedigree[".orderindexes"] = array();


$tdatapedigree[".sqlHead"] = "SELECT id,  	filhote,  	usuario,  	`data`,  	parentes,  	cor,  	pai,  	mae";
$tdatapedigree[".sqlFrom"] = "FROM pedigree";
$tdatapedigree[".sqlWhereExpr"] = "";
$tdatapedigree[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapedigree[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapedigree[".arrGroupsPerPage"] = $arrGPP;

$tdatapedigree[".highlightSearchResults"] = true;

$tableKeyspedigree = array();
$tableKeyspedigree[] = "id";
$tdatapedigree[".Keys"] = $tableKeyspedigree;


$tdatapedigree[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pedigree";
	$fdata["Label"] = GetFieldLabel("pedigree","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatapedigree["id"] = $fdata;
		$tdatapedigree[".searchableFields"][] = "id";
//	filhote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "filhote";
	$fdata["GoodName"] = "filhote";
	$fdata["ownerTable"] = "pedigree";
	$fdata["Label"] = GetFieldLabel("pedigree","filhote");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "filhote";

		$fdata["sourceSingle"] = "filhote";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "filhote";

	
	
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
		$edata["autoCompleteFields"][] = array('masterF'=>"cor", 'lookupF'=>"cor");
	$edata["autoCompleteFields"][] = array('masterF'=>"pai", 'lookupF'=>"pai");
	$edata["autoCompleteFields"][] = array('masterF'=>"mae", 'lookupF'=>"mae");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "anilha";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatapedigree["filhote"] = $fdata;
		$tdatapedigree[".searchableFields"][] = "filhote";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "pedigree";
	$fdata["Label"] = GetFieldLabel("pedigree","usuario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usuario";

		$fdata["sourceSingle"] = "usuario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usuario";

	
	
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


	$tdatapedigree["usuario"] = $fdata;
		$tdatapedigree[".searchableFields"][] = "usuario";
//	data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "data";
	$fdata["GoodName"] = "data";
	$fdata["ownerTable"] = "pedigree";
	$fdata["Label"] = GetFieldLabel("pedigree","data");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "data";

		$fdata["sourceSingle"] = "data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`data`";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatapedigree["data"] = $fdata;
		$tdatapedigree[".searchableFields"][] = "data";
//	parentes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "parentes";
	$fdata["GoodName"] = "parentes";
	$fdata["ownerTable"] = "pedigree";
	$fdata["Label"] = GetFieldLabel("pedigree","parentes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "parentes";

		$fdata["sourceSingle"] = "parentes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parentes";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatapedigree["parentes"] = $fdata;
		$tdatapedigree[".searchableFields"][] = "parentes";
//	cor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cor";
	$fdata["GoodName"] = "cor";
	$fdata["ownerTable"] = "pedigree";
	$fdata["Label"] = GetFieldLabel("pedigree","cor");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nome";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatapedigree["cor"] = $fdata;
		$tdatapedigree[".searchableFields"][] = "cor";
//	pai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pai";
	$fdata["GoodName"] = "pai";
	$fdata["ownerTable"] = "pedigree";
	$fdata["Label"] = GetFieldLabel("pedigree","pai");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "anilha";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatapedigree["pai"] = $fdata;
		$tdatapedigree[".searchableFields"][] = "pai";
//	mae
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mae";
	$fdata["GoodName"] = "mae";
	$fdata["ownerTable"] = "pedigree";
	$fdata["Label"] = GetFieldLabel("pedigree","mae");
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "anilha";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatapedigree["mae"] = $fdata;
		$tdatapedigree[".searchableFields"][] = "mae";


$tables_data["pedigree"]=&$tdatapedigree;
$field_labels["pedigree"] = &$fieldLabelspedigree;
$fieldToolTips["pedigree"] = &$fieldToolTipspedigree;
$placeHolders["pedigree"] = &$placeHolderspedigree;
$page_titles["pedigree"] = &$pageTitlespedigree;


changeTextControlsToDate( "pedigree" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pedigree"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pedigree"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pedigree()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	filhote,  	usuario,  	`data`,  	parentes,  	cor,  	pai,  	mae";
$proto0["m_strFrom"] = "FROM pedigree";
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
	"m_strTable" => "pedigree",
	"m_srcTableName" => "pedigree"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pedigree";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "filhote",
	"m_strTable" => "pedigree",
	"m_srcTableName" => "pedigree"
));

$proto8["m_sql"] = "filhote";
$proto8["m_srcTableName"] = "pedigree";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "pedigree",
	"m_srcTableName" => "pedigree"
));

$proto10["m_sql"] = "usuario";
$proto10["m_srcTableName"] = "pedigree";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "data",
	"m_strTable" => "pedigree",
	"m_srcTableName" => "pedigree"
));

$proto12["m_sql"] = "`data`";
$proto12["m_srcTableName"] = "pedigree";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "parentes",
	"m_strTable" => "pedigree",
	"m_srcTableName" => "pedigree"
));

$proto14["m_sql"] = "parentes";
$proto14["m_srcTableName"] = "pedigree";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cor",
	"m_strTable" => "pedigree",
	"m_srcTableName" => "pedigree"
));

$proto16["m_sql"] = "cor";
$proto16["m_srcTableName"] = "pedigree";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pai",
	"m_strTable" => "pedigree",
	"m_srcTableName" => "pedigree"
));

$proto18["m_sql"] = "pai";
$proto18["m_srcTableName"] = "pedigree";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mae",
	"m_strTable" => "pedigree",
	"m_srcTableName" => "pedigree"
));

$proto20["m_sql"] = "mae";
$proto20["m_srcTableName"] = "pedigree";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "pedigree";
$proto23["m_srcTableName"] = "pedigree";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "filhote";
$proto23["m_columns"][] = "usuario";
$proto23["m_columns"][] = "data";
$proto23["m_columns"][] = "parentes";
$proto23["m_columns"][] = "cor";
$proto23["m_columns"][] = "pai";
$proto23["m_columns"][] = "mae";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "pedigree";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "pedigree";
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
$proto0["m_srcTableName"]="pedigree";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pedigree = createSqlQuery_pedigree();


	
		;

								

$tdatapedigree[".sqlquery"] = $queryData_pedigree;



include_once(getabspath("include/pedigree_events.php"));
$tdatapedigree[".hasEvents"] = true;

$query = &$queryData_pedigree;
$table = "pedigree";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

if($_SESSION['GroupID'] <> 'ADMIN') {

$query->addWhere("usuario = '{$_SESSION['idUsuario']}' ");

}

function setFieldLabel($table, $field, $custom_label )

{

global $field_labels;

if(!array_key_exists($table,$field_labels))

return "";

@$field_labels[$table][mlang_getcurrentlang()][$field] = $custom_label;

}



;
unset($query);
?>