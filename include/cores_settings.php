<?php
$tdatacores = array();
$tdatacores[".searchableFields"] = array();
$tdatacores[".ShortName"] = "cores";
$tdatacores[".OwnerID"] = "usuario";
$tdatacores[".OriginalTable"] = "cores";


$tdatacores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacores[".originalPagesByType"] = $tdatacores[".pagesByType"];
$tdatacores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacores[".originalPages"] = $tdatacores[".pages"];
$tdatacores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatacores[".originalDefaultPages"] = $tdatacores[".defaultPages"];

//	field labels
$fieldLabelscores = array();
$fieldToolTipscores = array();
$pageTitlescores = array();
$placeHolderscores = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscores["Portuguese(Brazil)"] = array();
	$fieldToolTipscores["Portuguese(Brazil)"] = array();
	$placeHolderscores["Portuguese(Brazil)"] = array();
	$pageTitlescores["Portuguese(Brazil)"] = array();
	$fieldLabelscores["Portuguese(Brazil)"]["id"] = "ID";
	$fieldToolTipscores["Portuguese(Brazil)"]["id"] = "";
	$placeHolderscores["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelscores["Portuguese(Brazil)"]["nome"] = "NOME";
	$fieldToolTipscores["Portuguese(Brazil)"]["nome"] = "";
	$placeHolderscores["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelscores["Portuguese(Brazil)"]["usuario"] = "Usuario";
	$fieldToolTipscores["Portuguese(Brazil)"]["usuario"] = "";
	$placeHolderscores["Portuguese(Brazil)"]["usuario"] = "";
	if (count($fieldToolTipscores["Portuguese(Brazil)"]))
		$tdatacores[".isUseToolTips"] = true;
}


	$tdatacores[".NCSearch"] = true;



$tdatacores[".shortTableName"] = "cores";
$tdatacores[".nSecOptions"] = 1;

$tdatacores[".mainTableOwnerID"] = "usuario";
$tdatacores[".entityType"] = 0;
$tdatacores[".connId"] = "columbofilia_at_localhost";


$tdatacores[".strOriginalTableName"] = "cores";

	



$tdatacores[".showAddInPopup"] = false;

$tdatacores[".showEditInPopup"] = false;

$tdatacores[".showViewInPopup"] = false;

$tdatacores[".listAjax"] = false;
//	temporary
//$tdatacores[".listAjax"] = false;

	$tdatacores[".audit"] = false;

	$tdatacores[".locking"] = false;


$pages = $tdatacores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacores[".edit"] = true;
	$tdatacores[".afterEditAction"] = 1;
	$tdatacores[".closePopupAfterEdit"] = 1;
	$tdatacores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacores[".add"] = true;
$tdatacores[".afterAddAction"] = 1;
$tdatacores[".closePopupAfterAdd"] = 1;
$tdatacores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacores[".list"] = true;
}



$tdatacores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacores[".printFriendly"] = true;
}



$tdatacores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacores[".isUseAjaxSuggest"] = true;

$tdatacores[".rowHighlite"] = true;



																											

$tdatacores[".ajaxCodeSnippetAdded"] = false;

$tdatacores[".buttonsAdded"] = false;

$tdatacores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacores[".isUseTimeForSearch"] = false;


$tdatacores[".badgeColor"] = "D2AF80";


$tdatacores[".allSearchFields"] = array();
$tdatacores[".filterFields"] = array();
$tdatacores[".requiredSearchFields"] = array();

$tdatacores[".googleLikeFields"] = array();
$tdatacores[".googleLikeFields"][] = "nome";



$tdatacores[".tableType"] = "list";

$tdatacores[".printerPageOrientation"] = 0;
$tdatacores[".nPrinterPageScale"] = 100;

$tdatacores[".nPrinterSplitRecords"] = 40;

$tdatacores[".geocodingEnabled"] = false;










$tdatacores[".pageSize"] = 20;

$tdatacores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacores[".strOrderBy"] = $tstrOrderBy;

$tdatacores[".orderindexes"] = array();


$tdatacores[".sqlHead"] = "SELECT id,  	nome,  	usuario";
$tdatacores[".sqlFrom"] = "FROM cores";
$tdatacores[".sqlWhereExpr"] = "";
$tdatacores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacores[".arrGroupsPerPage"] = $arrGPP;

$tdatacores[".highlightSearchResults"] = true;

$tableKeyscores = array();
$tableKeyscores[] = "id";
$tdatacores[".Keys"] = $tableKeyscores;


$tdatacores[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cores";
	$fdata["Label"] = GetFieldLabel("cores","id");
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


	$tdatacores["id"] = $fdata;
		$tdatacores[".searchableFields"][] = "id";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "cores";
	$fdata["Label"] = GetFieldLabel("cores","nome");
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


	$tdatacores["nome"] = $fdata;
		$tdatacores[".searchableFields"][] = "nome";
//	usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usuario";
	$fdata["GoodName"] = "usuario";
	$fdata["ownerTable"] = "cores";
	$fdata["Label"] = GetFieldLabel("cores","usuario");
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


	$tdatacores["usuario"] = $fdata;
		$tdatacores[".searchableFields"][] = "usuario";


$tables_data["cores"]=&$tdatacores;
$field_labels["cores"] = &$fieldLabelscores;
$fieldToolTips["cores"] = &$fieldToolTipscores;
$placeHolders["cores"] = &$placeHolderscores;
$page_titles["cores"] = &$pageTitlescores;


changeTextControlsToDate( "cores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cores"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nome,  	usuario";
$proto0["m_strFrom"] = "FROM cores";
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
	"m_strTable" => "cores",
	"m_srcTableName" => "cores"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "cores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "cores",
	"m_srcTableName" => "cores"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "cores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usuario",
	"m_strTable" => "cores",
	"m_srcTableName" => "cores"
));

$proto10["m_sql"] = "usuario";
$proto10["m_srcTableName"] = "cores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cores";
$proto13["m_srcTableName"] = "cores";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "nome";
$proto13["m_columns"][] = "usuario";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "cores";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "cores";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cores = createSqlQuery_cores();


	
		;

			

$tdatacores[".sqlquery"] = $queryData_cores;



$tdatacores[".hasEvents"] = false;

?>