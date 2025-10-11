<?php
$tdataclube = array();
$tdataclube[".searchableFields"] = array();
$tdataclube[".ShortName"] = "clube";
$tdataclube[".OwnerID"] = "";
$tdataclube[".OriginalTable"] = "clube";


$tdataclube[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataclube[".originalPagesByType"] = $tdataclube[".pagesByType"];
$tdataclube[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataclube[".originalPages"] = $tdataclube[".pages"];
$tdataclube[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataclube[".originalDefaultPages"] = $tdataclube[".defaultPages"];

//	field labels
$fieldLabelsclube = array();
$fieldToolTipsclube = array();
$pageTitlesclube = array();
$placeHoldersclube = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsclube["Portuguese(Brazil)"] = array();
	$fieldToolTipsclube["Portuguese(Brazil)"] = array();
	$placeHoldersclube["Portuguese(Brazil)"] = array();
	$pageTitlesclube["Portuguese(Brazil)"] = array();
	$fieldLabelsclube["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipsclube["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["nome"] = "NOME";
	$fieldToolTipsclube["Portuguese(Brazil)"]["nome"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["cidade"] = "CIDADE";
	$fieldToolTipsclube["Portuguese(Brazil)"]["cidade"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["cidade"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["uf"] = "UF";
	$fieldToolTipsclube["Portuguese(Brazil)"]["uf"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["uf"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["pais"] = "PAÍS";
	$fieldToolTipsclube["Portuguese(Brazil)"]["pais"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["pais"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["telefone"] = "TELEFONE";
	$fieldToolTipsclube["Portuguese(Brazil)"]["telefone"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["telefone"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["presidente"] = "PRESIDENTE";
	$fieldToolTipsclube["Portuguese(Brazil)"]["presidente"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["presidente"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["federacao"] = "FEDERAÇÃO";
	$fieldToolTipsclube["Portuguese(Brazil)"]["federacao"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["federacao"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["dataestatuto"] = "DATA DO ESTATUTO REGISTRADO";
	$fieldToolTipsclube["Portuguese(Brazil)"]["dataestatuto"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["dataestatuto"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["datassem"] = "DATA DA ÚLTIMA ASSEMBLEIA";
	$fieldToolTipsclube["Portuguese(Brazil)"]["datassem"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["datassem"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["datavenci"] = "DATA DO VENCIMENTO";
	$fieldToolTipsclube["Portuguese(Brazil)"]["datavenci"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["datavenci"] = "";
	$fieldLabelsclube["Portuguese(Brazil)"]["ativo"] = "ATIVO";
	$fieldToolTipsclube["Portuguese(Brazil)"]["ativo"] = "";
	$placeHoldersclube["Portuguese(Brazil)"]["ativo"] = "";
	if (count($fieldToolTipsclube["Portuguese(Brazil)"]))
		$tdataclube[".isUseToolTips"] = true;
}


	$tdataclube[".NCSearch"] = true;



$tdataclube[".shortTableName"] = "clube";
$tdataclube[".nSecOptions"] = 0;

$tdataclube[".mainTableOwnerID"] = "";
$tdataclube[".entityType"] = 0;
$tdataclube[".connId"] = "columbofilia_at_localhost";


$tdataclube[".strOriginalTableName"] = "clube";

	



$tdataclube[".showAddInPopup"] = false;

$tdataclube[".showEditInPopup"] = false;

$tdataclube[".showViewInPopup"] = false;

$tdataclube[".listAjax"] = false;
//	temporary
//$tdataclube[".listAjax"] = false;

	$tdataclube[".audit"] = false;

	$tdataclube[".locking"] = false;


$pages = $tdataclube[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataclube[".edit"] = true;
	$tdataclube[".afterEditAction"] = 1;
	$tdataclube[".closePopupAfterEdit"] = 1;
	$tdataclube[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataclube[".add"] = true;
$tdataclube[".afterAddAction"] = 1;
$tdataclube[".closePopupAfterAdd"] = 1;
$tdataclube[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataclube[".list"] = true;
}



$tdataclube[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataclube[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataclube[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataclube[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataclube[".printFriendly"] = true;
}



$tdataclube[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataclube[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataclube[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataclube[".isUseAjaxSuggest"] = true;

$tdataclube[".rowHighlite"] = true;



																											

$tdataclube[".ajaxCodeSnippetAdded"] = false;

$tdataclube[".buttonsAdded"] = false;

$tdataclube[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclube[".isUseTimeForSearch"] = false;


$tdataclube[".badgeColor"] = "CFAE83";


$tdataclube[".allSearchFields"] = array();
$tdataclube[".filterFields"] = array();
$tdataclube[".requiredSearchFields"] = array();

$tdataclube[".googleLikeFields"] = array();
$tdataclube[".googleLikeFields"][] = "id";
$tdataclube[".googleLikeFields"][] = "nome";
$tdataclube[".googleLikeFields"][] = "cidade";
$tdataclube[".googleLikeFields"][] = "uf";
$tdataclube[".googleLikeFields"][] = "pais";
$tdataclube[".googleLikeFields"][] = "telefone";
$tdataclube[".googleLikeFields"][] = "presidente";
$tdataclube[".googleLikeFields"][] = "federacao";
$tdataclube[".googleLikeFields"][] = "dataestatuto";
$tdataclube[".googleLikeFields"][] = "datassem";
$tdataclube[".googleLikeFields"][] = "datavenci";
$tdataclube[".googleLikeFields"][] = "ativo";



$tdataclube[".tableType"] = "list";

$tdataclube[".printerPageOrientation"] = 0;
$tdataclube[".nPrinterPageScale"] = 100;

$tdataclube[".nPrinterSplitRecords"] = 40;

$tdataclube[".geocodingEnabled"] = false;










$tdataclube[".pageSize"] = 20;

$tdataclube[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataclube[".strOrderBy"] = $tstrOrderBy;

$tdataclube[".orderindexes"] = array();


$tdataclube[".sqlHead"] = "SELECT id,  	nome,  	cidade,  	uf,  	pais,  	telefone,  	presidente,  	federacao,  	dataestatuto,  	datassem,  	datavenci,  	ativo";
$tdataclube[".sqlFrom"] = "FROM clube";
$tdataclube[".sqlWhereExpr"] = "";
$tdataclube[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclube[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclube[".arrGroupsPerPage"] = $arrGPP;

$tdataclube[".highlightSearchResults"] = true;

$tableKeysclube = array();
$tableKeysclube[] = "id";
$tdataclube[".Keys"] = $tableKeysclube;


$tdataclube[".hideMobileList"] = array();
		$tdataclube[".hideMobileList"][1] = array();
$tdataclube[".hideMobileList"][1]["dataestatuto"] = true;
		$tdataclube[".hideMobileList"][1]["datassem"] = true;
		$tdataclube[".hideMobileList"][1]["datavenci"] = true;
		$tdataclube[".hideMobileList"][1]["ativo"] = true;
		$tdataclube[".hideMobileList"][5] = array();
$tdataclube[".hideMobileList"][5]["dataestatuto"] = true;
		$tdataclube[".hideMobileList"][5]["datassem"] = true;
		$tdataclube[".hideMobileList"][5]["datavenci"] = true;
		$tdataclube[".hideMobileList"][5]["ativo"] = true;




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","id");
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


	$tdataclube["id"] = $fdata;
		$tdataclube[".searchableFields"][] = "id";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","nome");
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


	$tdataclube["nome"] = $fdata;
		$tdataclube[".searchableFields"][] = "nome";
//	cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cidade";
	$fdata["GoodName"] = "cidade";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","cidade");
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


	$tdataclube["cidade"] = $fdata;
		$tdataclube[".searchableFields"][] = "cidade";
//	uf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "uf";
	$fdata["GoodName"] = "uf";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","uf");
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


	$tdataclube["uf"] = $fdata;
		$tdataclube[".searchableFields"][] = "uf";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","pais");
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


	$tdataclube["pais"] = $fdata;
		$tdataclube[".searchableFields"][] = "pais";
//	telefone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "telefone";
	$fdata["GoodName"] = "telefone";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","telefone");
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=16";

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


	$tdataclube["telefone"] = $fdata;
		$tdataclube[".searchableFields"][] = "telefone";
//	presidente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "presidente";
	$fdata["GoodName"] = "presidente";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","presidente");
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

				$edata["LookupWhere"] = "perfilusu = 'DIRIGENTE'";


	
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


	$tdataclube["presidente"] = $fdata;
		$tdataclube[".searchableFields"][] = "presidente";
//	federacao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "federacao";
	$fdata["GoodName"] = "federacao";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","federacao");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "federacao";

		$fdata["sourceSingle"] = "federacao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "federacao";

	
	
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
	$edata["LookupTable"] = "federacao";
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


	$tdataclube["federacao"] = $fdata;
		$tdataclube[".searchableFields"][] = "federacao";
//	dataestatuto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dataestatuto";
	$fdata["GoodName"] = "dataestatuto";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","dataestatuto");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "dataestatuto";

		$fdata["sourceSingle"] = "dataestatuto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dataestatuto";

	
	
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
	$edata["InitialYearFactor"] = 74;
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


	$tdataclube["dataestatuto"] = $fdata;
		$tdataclube[".searchableFields"][] = "dataestatuto";
//	datassem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "datassem";
	$fdata["GoodName"] = "datassem";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","datassem");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "datassem";

		$fdata["sourceSingle"] = "datassem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datassem";

	
	
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
	$edata["InitialYearFactor"] = 15;
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


	$tdataclube["datassem"] = $fdata;
		$tdataclube[".searchableFields"][] = "datassem";
//	datavenci
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "datavenci";
	$fdata["GoodName"] = "datavenci";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","datavenci");
	$fdata["FieldType"] = 7;


	
	
			

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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 15;
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


	$tdataclube["datavenci"] = $fdata;
		$tdataclube[".searchableFields"][] = "datavenci";
//	ativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ativo";
	$fdata["GoodName"] = "ativo";
	$fdata["ownerTable"] = "clube";
	$fdata["Label"] = GetFieldLabel("clube","ativo");
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


	$tdataclube["ativo"] = $fdata;
		$tdataclube[".searchableFields"][] = "ativo";


$tables_data["clube"]=&$tdataclube;
$field_labels["clube"] = &$fieldLabelsclube;
$fieldToolTips["clube"] = &$fieldToolTipsclube;
$placeHolders["clube"] = &$placeHoldersclube;
$page_titles["clube"] = &$pageTitlesclube;


changeTextControlsToDate( "clube" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["clube"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["clube"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_clube()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome,  	cidade,  	uf,  	pais,  	telefone,  	presidente,  	federacao,  	dataestatuto,  	datassem,  	datavenci,  	ativo";
$proto0["m_strFrom"] = "FROM clube";
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
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "clube";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "clube";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto10["m_sql"] = "cidade";
$proto10["m_srcTableName"] = "clube";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "uf",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto12["m_sql"] = "uf";
$proto12["m_srcTableName"] = "clube";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pais",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto14["m_sql"] = "pais";
$proto14["m_srcTableName"] = "clube";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto16["m_sql"] = "telefone";
$proto16["m_srcTableName"] = "clube";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "presidente",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto18["m_sql"] = "presidente";
$proto18["m_srcTableName"] = "clube";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "federacao",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto20["m_sql"] = "federacao";
$proto20["m_srcTableName"] = "clube";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dataestatuto",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto22["m_sql"] = "dataestatuto";
$proto22["m_srcTableName"] = "clube";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "datassem",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto24["m_sql"] = "datassem";
$proto24["m_srcTableName"] = "clube";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "datavenci",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto26["m_sql"] = "datavenci";
$proto26["m_srcTableName"] = "clube";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ativo",
	"m_strTable" => "clube",
	"m_srcTableName" => "clube"
));

$proto28["m_sql"] = "ativo";
$proto28["m_srcTableName"] = "clube";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "clube";
$proto31["m_srcTableName"] = "clube";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "nome";
$proto31["m_columns"][] = "cidade";
$proto31["m_columns"][] = "uf";
$proto31["m_columns"][] = "pais";
$proto31["m_columns"][] = "telefone";
$proto31["m_columns"][] = "presidente";
$proto31["m_columns"][] = "federacao";
$proto31["m_columns"][] = "dataestatuto";
$proto31["m_columns"][] = "datassem";
$proto31["m_columns"][] = "datavenci";
$proto31["m_columns"][] = "ativo";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "clube";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "clube";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="clube";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clube = createSqlQuery_clube();


	
		;

												

$tdataclube[".sqlquery"] = $queryData_clube;



include_once(getabspath("include/clube_events.php"));
$tdataclube[".hasEvents"] = true;

$query = &$queryData_clube;
$table = "clube";
// here goes EVENT_INIT_TABLE event


// Place event code here.
// Use "Add Action" button to add code snippets.

if($_SESSION['GroupID'] <> 'ADMIN') {

$query->addWhere("id = '{$_SESSION['clube']}' ");

}
;
unset($query);
?>