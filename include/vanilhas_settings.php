<?php
$tdatavanilhas = array();
$tdatavanilhas[".searchableFields"] = array();
$tdatavanilhas[".ShortName"] = "vanilhas";
$tdatavanilhas[".OwnerID"] = "";
$tdatavanilhas[".OriginalTable"] = "vanilhas";


$tdatavanilhas[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatavanilhas[".originalPagesByType"] = $tdatavanilhas[".pagesByType"];
$tdatavanilhas[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatavanilhas[".originalPages"] = $tdatavanilhas[".pages"];
$tdatavanilhas[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatavanilhas[".originalDefaultPages"] = $tdatavanilhas[".defaultPages"];

//	field labels
$fieldLabelsvanilhas = array();
$fieldToolTipsvanilhas = array();
$pageTitlesvanilhas = array();
$placeHoldersvanilhas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsvanilhas["Portuguese(Brazil)"] = array();
	$fieldToolTipsvanilhas["Portuguese(Brazil)"] = array();
	$placeHoldersvanilhas["Portuguese(Brazil)"] = array();
	$pageTitlesvanilhas["Portuguese(Brazil)"] = array();
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["anilha"] = "ANILHA";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["anilha"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["anilha"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["quantidade"] = "QUANTIDADE";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["quantidade"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["quantidade"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["fcbinicio"] = "INICIO";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["fcbinicio"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["fcbinicio"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["fcbfim"] = "FIM";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["fcbfim"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["fcbfim"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["mapainicio"] = "INICIO";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["mapainicio"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["mapainicio"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["mapafim"] = "FIM";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["mapafim"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["mapafim"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["socio"] = "SÓCIO";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["socio"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["socio"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["mapafimbase"] = "Mapafimbase";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["mapafimbase"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["mapafimbase"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["fcbfimbase"] = "Fcbfimbase";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["fcbfimbase"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["fcbfimbase"] = "";
	$fieldLabelsvanilhas["Portuguese(Brazil)"]["clube"] = "Clube";
	$fieldToolTipsvanilhas["Portuguese(Brazil)"]["clube"] = "";
	$placeHoldersvanilhas["Portuguese(Brazil)"]["clube"] = "";
	if (count($fieldToolTipsvanilhas["Portuguese(Brazil)"]))
		$tdatavanilhas[".isUseToolTips"] = true;
}


	$tdatavanilhas[".NCSearch"] = true;



$tdatavanilhas[".shortTableName"] = "vanilhas";
$tdatavanilhas[".nSecOptions"] = 0;

$tdatavanilhas[".mainTableOwnerID"] = "";
$tdatavanilhas[".entityType"] = 0;
$tdatavanilhas[".connId"] = "columbofilia_at_localhost";


$tdatavanilhas[".strOriginalTableName"] = "vanilhas";

	



$tdatavanilhas[".showAddInPopup"] = false;

$tdatavanilhas[".showEditInPopup"] = false;

$tdatavanilhas[".showViewInPopup"] = false;

$tdatavanilhas[".listAjax"] = false;
//	temporary
//$tdatavanilhas[".listAjax"] = false;

	$tdatavanilhas[".audit"] = false;

	$tdatavanilhas[".locking"] = false;


$pages = $tdatavanilhas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavanilhas[".edit"] = true;
	$tdatavanilhas[".afterEditAction"] = 1;
	$tdatavanilhas[".closePopupAfterEdit"] = 1;
	$tdatavanilhas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavanilhas[".add"] = true;
$tdatavanilhas[".afterAddAction"] = 1;
$tdatavanilhas[".closePopupAfterAdd"] = 1;
$tdatavanilhas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavanilhas[".list"] = true;
}



$tdatavanilhas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavanilhas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavanilhas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavanilhas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavanilhas[".printFriendly"] = true;
}



$tdatavanilhas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavanilhas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavanilhas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavanilhas[".isUseAjaxSuggest"] = true;

$tdatavanilhas[".rowHighlite"] = true;



																																						
																	

$tdatavanilhas[".ajaxCodeSnippetAdded"] = false;

$tdatavanilhas[".buttonsAdded"] = true;

$tdatavanilhas[".addPageEvents"] = true;

// use timepicker for search panel
$tdatavanilhas[".isUseTimeForSearch"] = false;


$tdatavanilhas[".badgeColor"] = "e67349";


$tdatavanilhas[".allSearchFields"] = array();
$tdatavanilhas[".filterFields"] = array();
$tdatavanilhas[".requiredSearchFields"] = array();

$tdatavanilhas[".googleLikeFields"] = array();
$tdatavanilhas[".googleLikeFields"][] = "id";
$tdatavanilhas[".googleLikeFields"][] = "anilha";
$tdatavanilhas[".googleLikeFields"][] = "quantidade";
$tdatavanilhas[".googleLikeFields"][] = "fcbinicio";
$tdatavanilhas[".googleLikeFields"][] = "fcbfim";
$tdatavanilhas[".googleLikeFields"][] = "mapainicio";
$tdatavanilhas[".googleLikeFields"][] = "mapafim";
$tdatavanilhas[".googleLikeFields"][] = "socio";
$tdatavanilhas[".googleLikeFields"][] = "mapafimbase";
$tdatavanilhas[".googleLikeFields"][] = "fcbfimbase";
$tdatavanilhas[".googleLikeFields"][] = "clube";



$tdatavanilhas[".tableType"] = "list";

$tdatavanilhas[".printerPageOrientation"] = 0;
$tdatavanilhas[".nPrinterPageScale"] = 100;

$tdatavanilhas[".nPrinterSplitRecords"] = 40;

$tdatavanilhas[".geocodingEnabled"] = false;










$tdatavanilhas[".pageSize"] = 20;

$tdatavanilhas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavanilhas[".strOrderBy"] = $tstrOrderBy;

$tdatavanilhas[".orderindexes"] = array();


$tdatavanilhas[".sqlHead"] = "SELECT id,  	anilha,  	quantidade,  	fcbinicio,  	fcbfim,  	mapainicio,  	mapafim,  	socio,  	mapafimbase,  	fcbfimbase,  	clube";
$tdatavanilhas[".sqlFrom"] = "FROM vanilhas";
$tdatavanilhas[".sqlWhereExpr"] = "";
$tdatavanilhas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavanilhas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavanilhas[".arrGroupsPerPage"] = $arrGPP;

$tdatavanilhas[".highlightSearchResults"] = true;

$tableKeysvanilhas = array();
$tableKeysvanilhas[] = "id";
$tdatavanilhas[".Keys"] = $tableKeysvanilhas;


$tdatavanilhas[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","id");
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


	$tdatavanilhas["id"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "id";
//	anilha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "anilha";
	$fdata["GoodName"] = "anilha";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","anilha");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "anilha";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatavanilhas["anilha"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "anilha";
//	quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "quantidade";
	$fdata["GoodName"] = "quantidade";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","quantidade");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "quantidade";

		$fdata["sourceSingle"] = "quantidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quantidade";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "quantidade_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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


	$tdatavanilhas["quantidade"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "quantidade";
//	fcbinicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fcbinicio";
	$fdata["GoodName"] = "fcbinicio";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","fcbinicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fcbinicio";

		$fdata["sourceSingle"] = "fcbinicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fcbinicio";

	
	
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


	$tdatavanilhas["fcbinicio"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "fcbinicio";
//	fcbfim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fcbfim";
	$fdata["GoodName"] = "fcbfim";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","fcbfim");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fcbfim";

		$fdata["sourceSingle"] = "fcbfim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fcbfim";

	
	
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


	$tdatavanilhas["fcbfim"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "fcbfim";
//	mapainicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mapainicio";
	$fdata["GoodName"] = "mapainicio";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","mapainicio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mapainicio";

		$fdata["sourceSingle"] = "mapainicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mapainicio";

	
	
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


	$tdatavanilhas["mapainicio"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "mapainicio";
//	mapafim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mapafim";
	$fdata["GoodName"] = "mapafim";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","mapafim");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mapafim";

		$fdata["sourceSingle"] = "mapafim";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mapafim";

	
	
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


	$tdatavanilhas["mapafim"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "mapafim";
//	socio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "socio";
	$fdata["GoodName"] = "socio";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","socio");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nome";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "clube", "lookup" => "clube" );

	
	

	
	
	
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


	$tdatavanilhas["socio"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "socio";
//	mapafimbase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mapafimbase";
	$fdata["GoodName"] = "mapafimbase";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","mapafimbase");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mapafimbase";

		$fdata["sourceSingle"] = "mapafimbase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mapafimbase";

	
	
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


	$tdatavanilhas["mapafimbase"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "mapafimbase";
//	fcbfimbase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fcbfimbase";
	$fdata["GoodName"] = "fcbfimbase";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","fcbfimbase");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fcbfimbase";

		$fdata["sourceSingle"] = "fcbfimbase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fcbfimbase";

	
	
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


	$tdatavanilhas["fcbfimbase"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "fcbfimbase";
//	clube
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "clube";
	$fdata["GoodName"] = "clube";
	$fdata["ownerTable"] = "vanilhas";
	$fdata["Label"] = GetFieldLabel("vanilhas","clube");
	$fdata["FieldType"] = 3;


	
	
			

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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nome";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "socio";

	
	
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


	$tdatavanilhas["clube"] = $fdata;
		$tdatavanilhas[".searchableFields"][] = "clube";


$tables_data["vanilhas"]=&$tdatavanilhas;
$field_labels["vanilhas"] = &$fieldLabelsvanilhas;
$fieldToolTips["vanilhas"] = &$fieldToolTipsvanilhas;
$placeHolders["vanilhas"] = &$placeHoldersvanilhas;
$page_titles["vanilhas"] = &$pageTitlesvanilhas;


changeTextControlsToDate( "vanilhas" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vanilhas"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vanilhas"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="anilha";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="anilha";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "anilha";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vanilhas"][0] = $masterParams;
				$masterTablesData["vanilhas"][0]["masterKeys"] = array();
	$masterTablesData["vanilhas"][0]["masterKeys"][]="id";
				$masterTablesData["vanilhas"][0]["detailKeys"] = array();
	$masterTablesData["vanilhas"][0]["detailKeys"][]="anilha";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vanilhas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	anilha,  	quantidade,  	fcbinicio,  	fcbfim,  	mapainicio,  	mapafim,  	socio,  	mapafimbase,  	fcbfimbase,  	clube";
$proto0["m_strFrom"] = "FROM vanilhas";
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
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "vanilhas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "anilha",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto8["m_sql"] = "anilha";
$proto8["m_srcTableName"] = "vanilhas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "quantidade",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto10["m_sql"] = "quantidade";
$proto10["m_srcTableName"] = "vanilhas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fcbinicio",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto12["m_sql"] = "fcbinicio";
$proto12["m_srcTableName"] = "vanilhas";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fcbfim",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto14["m_sql"] = "fcbfim";
$proto14["m_srcTableName"] = "vanilhas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mapainicio",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto16["m_sql"] = "mapainicio";
$proto16["m_srcTableName"] = "vanilhas";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mapafim",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto18["m_sql"] = "mapafim";
$proto18["m_srcTableName"] = "vanilhas";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "socio",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto20["m_sql"] = "socio";
$proto20["m_srcTableName"] = "vanilhas";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mapafimbase",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto22["m_sql"] = "mapafimbase";
$proto22["m_srcTableName"] = "vanilhas";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fcbfimbase",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto24["m_sql"] = "fcbfimbase";
$proto24["m_srcTableName"] = "vanilhas";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "clube",
	"m_strTable" => "vanilhas",
	"m_srcTableName" => "vanilhas"
));

$proto26["m_sql"] = "clube";
$proto26["m_srcTableName"] = "vanilhas";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "vanilhas";
$proto29["m_srcTableName"] = "vanilhas";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "anilha";
$proto29["m_columns"][] = "quantidade";
$proto29["m_columns"][] = "fcbinicio";
$proto29["m_columns"][] = "fcbfim";
$proto29["m_columns"][] = "mapainicio";
$proto29["m_columns"][] = "mapafim";
$proto29["m_columns"][] = "socio";
$proto29["m_columns"][] = "mapafimbase";
$proto29["m_columns"][] = "fcbfimbase";
$proto29["m_columns"][] = "clube";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "vanilhas";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "vanilhas";
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
$proto0["m_srcTableName"]="vanilhas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vanilhas = createSqlQuery_vanilhas();


	
		;

											

$tdatavanilhas[".sqlquery"] = $queryData_vanilhas;



include_once(getabspath("include/vanilhas_events.php"));
$tdatavanilhas[".hasEvents"] = true;

?>