<?php
$tdataanilha = array();
$tdataanilha[".searchableFields"] = array();
$tdataanilha[".ShortName"] = "anilha";
$tdataanilha[".OwnerID"] = "id";
$tdataanilha[".OriginalTable"] = "anilha";


$tdataanilha[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataanilha[".originalPagesByType"] = $tdataanilha[".pagesByType"];
$tdataanilha[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataanilha[".originalPages"] = $tdataanilha[".pages"];
$tdataanilha[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataanilha[".originalDefaultPages"] = $tdataanilha[".defaultPages"];

//	field labels
$fieldLabelsanilha = array();
$fieldToolTipsanilha = array();
$pageTitlesanilha = array();
$placeHoldersanilha = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsanilha["Portuguese(Brazil)"] = array();
	$fieldToolTipsanilha["Portuguese(Brazil)"] = array();
	$placeHoldersanilha["Portuguese(Brazil)"] = array();
	$pageTitlesanilha["Portuguese(Brazil)"] = array();
	$fieldLabelsanilha["Portuguese(Brazil)"]["id"] = "CÓDIGO";
	$fieldToolTipsanilha["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersanilha["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsanilha["Portuguese(Brazil)"]["quantidade"] = "QUANTIDADE";
	$fieldToolTipsanilha["Portuguese(Brazil)"]["quantidade"] = "";
	$placeHoldersanilha["Portuguese(Brazil)"]["quantidade"] = "";
	$fieldLabelsanilha["Portuguese(Brazil)"]["fcbinicio"] = "INÍCIO";
	$fieldToolTipsanilha["Portuguese(Brazil)"]["fcbinicio"] = "";
	$placeHoldersanilha["Portuguese(Brazil)"]["fcbinicio"] = "";
	$fieldLabelsanilha["Portuguese(Brazil)"]["fcbfim"] = "FIM";
	$fieldToolTipsanilha["Portuguese(Brazil)"]["fcbfim"] = "";
	$placeHoldersanilha["Portuguese(Brazil)"]["fcbfim"] = "";
	$fieldLabelsanilha["Portuguese(Brazil)"]["ano"] = "ANO";
	$fieldToolTipsanilha["Portuguese(Brazil)"]["ano"] = "";
	$placeHoldersanilha["Portuguese(Brazil)"]["ano"] = "";
	$fieldLabelsanilha["Portuguese(Brazil)"]["mapainicio"] = "INÍCIO";
	$fieldToolTipsanilha["Portuguese(Brazil)"]["mapainicio"] = "";
	$placeHoldersanilha["Portuguese(Brazil)"]["mapainicio"] = "";
	$fieldLabelsanilha["Portuguese(Brazil)"]["mapafim"] = "FIM";
	$fieldToolTipsanilha["Portuguese(Brazil)"]["mapafim"] = "";
	$placeHoldersanilha["Portuguese(Brazil)"]["mapafim"] = "";
	$fieldLabelsanilha["Portuguese(Brazil)"]["clube"] = "CLUBE";
	$fieldToolTipsanilha["Portuguese(Brazil)"]["clube"] = "";
	$placeHoldersanilha["Portuguese(Brazil)"]["clube"] = "";
	$fieldLabelsanilha["Portuguese(Brazil)"]["disponivel"] = "DISPONÍVEL";
	$fieldToolTipsanilha["Portuguese(Brazil)"]["disponivel"] = "";
	$placeHoldersanilha["Portuguese(Brazil)"]["disponivel"] = "";
	if (count($fieldToolTipsanilha["Portuguese(Brazil)"]))
		$tdataanilha[".isUseToolTips"] = true;
}


	$tdataanilha[".NCSearch"] = true;



$tdataanilha[".shortTableName"] = "anilha";
$tdataanilha[".nSecOptions"] = 0;

$tdataanilha[".mainTableOwnerID"] = "id";
$tdataanilha[".entityType"] = 0;
$tdataanilha[".connId"] = "columbofilia_at_localhost";


$tdataanilha[".strOriginalTableName"] = "anilha";

	



$tdataanilha[".showAddInPopup"] = false;

$tdataanilha[".showEditInPopup"] = false;

$tdataanilha[".showViewInPopup"] = false;

$tdataanilha[".listAjax"] = false;
//	temporary
//$tdataanilha[".listAjax"] = false;

	$tdataanilha[".audit"] = false;

	$tdataanilha[".locking"] = false;


$pages = $tdataanilha[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataanilha[".edit"] = true;
	$tdataanilha[".afterEditAction"] = 1;
	$tdataanilha[".closePopupAfterEdit"] = 1;
	$tdataanilha[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataanilha[".add"] = true;
$tdataanilha[".afterAddAction"] = 1;
$tdataanilha[".closePopupAfterAdd"] = 1;
$tdataanilha[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataanilha[".list"] = true;
}



$tdataanilha[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataanilha[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataanilha[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataanilha[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataanilha[".printFriendly"] = true;
}



$tdataanilha[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataanilha[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataanilha[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataanilha[".isUseAjaxSuggest"] = true;

$tdataanilha[".rowHighlite"] = true;



					
				
																				

$tdataanilha[".ajaxCodeSnippetAdded"] = false;

$tdataanilha[".buttonsAdded"] = true;

$tdataanilha[".addPageEvents"] = true;

// use timepicker for search panel
$tdataanilha[".isUseTimeForSearch"] = false;


$tdataanilha[".badgeColor"] = "6B8E23";


$tdataanilha[".allSearchFields"] = array();
$tdataanilha[".filterFields"] = array();
$tdataanilha[".requiredSearchFields"] = array();

$tdataanilha[".googleLikeFields"] = array();
$tdataanilha[".googleLikeFields"][] = "id";
$tdataanilha[".googleLikeFields"][] = "quantidade";
$tdataanilha[".googleLikeFields"][] = "fcbinicio";
$tdataanilha[".googleLikeFields"][] = "fcbfim";
$tdataanilha[".googleLikeFields"][] = "ano";
$tdataanilha[".googleLikeFields"][] = "mapainicio";
$tdataanilha[".googleLikeFields"][] = "mapafim";
$tdataanilha[".googleLikeFields"][] = "clube";



$tdataanilha[".tableType"] = "list";

$tdataanilha[".printerPageOrientation"] = 0;
$tdataanilha[".nPrinterPageScale"] = 100;

$tdataanilha[".nPrinterSplitRecords"] = 40;

$tdataanilha[".geocodingEnabled"] = false;










$tdataanilha[".pageSize"] = 20;

$tdataanilha[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataanilha[".strOrderBy"] = $tstrOrderBy;

$tdataanilha[".orderindexes"] = array();


$tdataanilha[".sqlHead"] = "SELECT id,  	quantidade,  	fcbinicio,  	fcbfim,  	ano,  	mapainicio,  	mapafim,  	clube,  	disponivel";
$tdataanilha[".sqlFrom"] = "FROM anilha";
$tdataanilha[".sqlWhereExpr"] = "";
$tdataanilha[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanilha[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanilha[".arrGroupsPerPage"] = $arrGPP;

$tdataanilha[".highlightSearchResults"] = true;

$tableKeysanilha = array();
$tableKeysanilha[] = "id";
$tdataanilha[".Keys"] = $tableKeysanilha;


$tdataanilha[".hideMobileList"] = array();
		$tdataanilha[".hideMobileList"][1] = array();
$tdataanilha[".hideMobileList"][1]["id"] = true;
		$tdataanilha[".hideMobileList"][5] = array();
$tdataanilha[".hideMobileList"][5]["id"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "anilha";
	$fdata["Label"] = GetFieldLabel("anilha","id");
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


	$tdataanilha["id"] = $fdata;
		$tdataanilha[".searchableFields"][] = "id";
//	quantidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "quantidade";
	$fdata["GoodName"] = "quantidade";
	$fdata["ownerTable"] = "anilha";
	$fdata["Label"] = GetFieldLabel("anilha","quantidade");
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
	$eventsData[] = array( "name" => "serie", "type" => "change" );
	$eventsData[] = array( "name" => "mapa", "type" => "change" );
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


	$tdataanilha["quantidade"] = $fdata;
		$tdataanilha[".searchableFields"][] = "quantidade";
//	fcbinicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fcbinicio";
	$fdata["GoodName"] = "fcbinicio";
	$fdata["ownerTable"] = "anilha";
	$fdata["Label"] = GetFieldLabel("anilha","fcbinicio");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "serie", "type" => "change" );
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


	$tdataanilha["fcbinicio"] = $fdata;
		$tdataanilha[".searchableFields"][] = "fcbinicio";
//	fcbfim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fcbfim";
	$fdata["GoodName"] = "fcbfim";
	$fdata["ownerTable"] = "anilha";
	$fdata["Label"] = GetFieldLabel("anilha","fcbfim");
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "serie", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdataanilha["fcbfim"] = $fdata;
		$tdataanilha[".searchableFields"][] = "fcbfim";
//	ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ano";
	$fdata["GoodName"] = "ano";
	$fdata["ownerTable"] = "anilha";
	$fdata["Label"] = GetFieldLabel("anilha","ano");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ano";

		$fdata["sourceSingle"] = "ano";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ano";

	
	
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


	$tdataanilha["ano"] = $fdata;
		$tdataanilha[".searchableFields"][] = "ano";
//	mapainicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mapainicio";
	$fdata["GoodName"] = "mapainicio";
	$fdata["ownerTable"] = "anilha";
	$fdata["Label"] = GetFieldLabel("anilha","mapainicio");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "mapa", "type" => "change" );
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


	$tdataanilha["mapainicio"] = $fdata;
		$tdataanilha[".searchableFields"][] = "mapainicio";
//	mapafim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mapafim";
	$fdata["GoodName"] = "mapafim";
	$fdata["ownerTable"] = "anilha";
	$fdata["Label"] = GetFieldLabel("anilha","mapafim");
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "mapa", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdataanilha["mapafim"] = $fdata;
		$tdataanilha[".searchableFields"][] = "mapafim";
//	clube
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "clube";
	$fdata["GoodName"] = "clube";
	$fdata["ownerTable"] = "anilha";
	$fdata["Label"] = GetFieldLabel("anilha","clube");
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


	$tdataanilha["clube"] = $fdata;
		$tdataanilha[".searchableFields"][] = "clube";
//	disponivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "disponivel";
	$fdata["GoodName"] = "disponivel";
	$fdata["ownerTable"] = "anilha";
	$fdata["Label"] = GetFieldLabel("anilha","disponivel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "disponivel";

		$fdata["sourceSingle"] = "disponivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disponivel";

	
	
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


	$tdataanilha["disponivel"] = $fdata;
		$tdataanilha[".searchableFields"][] = "disponivel";


$tables_data["anilha"]=&$tdataanilha;
$field_labels["anilha"] = &$fieldLabelsanilha;
$fieldToolTips["anilha"] = &$fieldToolTipsanilha;
$placeHolders["anilha"] = &$placeHoldersanilha;
$page_titles["anilha"] = &$pageTitlesanilha;


changeTextControlsToDate( "anilha" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["anilha"] = array();
//	vanilhas
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="vanilhas";
		$detailsParam["dOriginalTable"] = "vanilhas";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "vanilhas";
	$detailsParam["dCaptionTable"] = GetTableCaption("vanilhas");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["anilha"][$dIndex] = $detailsParam;

	
		$detailsTablesData["anilha"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["anilha"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["anilha"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["anilha"][$dIndex]["detailKeys"][]="anilha";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["anilha"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_anilha()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	quantidade,  	fcbinicio,  	fcbfim,  	ano,  	mapainicio,  	mapafim,  	clube,  	disponivel";
$proto0["m_strFrom"] = "FROM anilha";
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
	"m_strTable" => "anilha",
	"m_srcTableName" => "anilha"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "anilha";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "quantidade",
	"m_strTable" => "anilha",
	"m_srcTableName" => "anilha"
));

$proto8["m_sql"] = "quantidade";
$proto8["m_srcTableName"] = "anilha";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fcbinicio",
	"m_strTable" => "anilha",
	"m_srcTableName" => "anilha"
));

$proto10["m_sql"] = "fcbinicio";
$proto10["m_srcTableName"] = "anilha";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fcbfim",
	"m_strTable" => "anilha",
	"m_srcTableName" => "anilha"
));

$proto12["m_sql"] = "fcbfim";
$proto12["m_srcTableName"] = "anilha";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ano",
	"m_strTable" => "anilha",
	"m_srcTableName" => "anilha"
));

$proto14["m_sql"] = "ano";
$proto14["m_srcTableName"] = "anilha";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mapainicio",
	"m_strTable" => "anilha",
	"m_srcTableName" => "anilha"
));

$proto16["m_sql"] = "mapainicio";
$proto16["m_srcTableName"] = "anilha";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mapafim",
	"m_strTable" => "anilha",
	"m_srcTableName" => "anilha"
));

$proto18["m_sql"] = "mapafim";
$proto18["m_srcTableName"] = "anilha";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "clube",
	"m_strTable" => "anilha",
	"m_srcTableName" => "anilha"
));

$proto20["m_sql"] = "clube";
$proto20["m_srcTableName"] = "anilha";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "disponivel",
	"m_strTable" => "anilha",
	"m_srcTableName" => "anilha"
));

$proto22["m_sql"] = "disponivel";
$proto22["m_srcTableName"] = "anilha";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "anilha";
$proto25["m_srcTableName"] = "anilha";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "quantidade";
$proto25["m_columns"][] = "fcbinicio";
$proto25["m_columns"][] = "fcbfim";
$proto25["m_columns"][] = "ano";
$proto25["m_columns"][] = "mapainicio";
$proto25["m_columns"][] = "mapafim";
$proto25["m_columns"][] = "clube";
$proto25["m_columns"][] = "disponivel";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "anilha";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "anilha";
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
$proto0["m_srcTableName"]="anilha";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_anilha = createSqlQuery_anilha();


	
		;

									

$tdataanilha[".sqlquery"] = $queryData_anilha;



include_once(getabspath("include/anilha_events.php"));
$tdataanilha[".hasEvents"] = true;

$query = &$queryData_anilha;
$table = "anilha";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

if($_SESSION['GroupID'] <> 'ADMIN') {

$query->addWhere("clube = '{$_SESSION['clube']}' ");

}
;
unset($query);
?>