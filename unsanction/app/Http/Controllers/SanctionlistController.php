<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

use App\Sanctionlist;
class SanctionlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $temp2='';
if ($fh = fopen("C:/Users/B/Desktop/unsanction/unsanction/public/consolidated.xml", 'r')) {
    while (!feof($fh)) {
        $line = fgets($fh);
        //echo $line;
		$temp2=$temp2.$line;
		//echo '  </br>  ';
    }
    fclose($fh);
}

$array=simplexml_load_string($temp2);
//DD($array);
//dd($array[0]);
/*DD(sizeof($array));
 $t=0;
 foreach($array as $a){
    if ($t==0){
         $t=$t+1;
         //dd($a->DATAID);
     }else{
        dd($a->DATAID);
    }
   
 }
*/

$count=0;
         foreach ($array as $row) {
      


             if ($count==sizeof($array)){
                 break;
            }
            $count=$count+1;
        

    
         $CONSOLIDATED_LIST = $row->CONSOLIDATED_LIST;
         $CONSOLIDATED_LIST_xmlns_xsi = $row->CONSOLIDATED_LIST_xmlns_xsi;
         $CONSOLIDATED_LIST_dateGenerated = $row->CONSOLIDATED_LIST_dateGenerated;
         $CONSOLIDATED_LIST_xsi_noNamespaceSchemaLocation = $row->CONSOLIDATED_LIST_xsi_noNamespaceSchemaLocation;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DATAID = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DATAID;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_VERSIONNUM = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_VERSIONNUM;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FIRST_NAME = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FIRST_NAME;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SECOND_NAME = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SECOND_NAME;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_THIRD_NAME = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_THIRD_NAME;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_UN_LIST_TYPE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_UN_LIST_TYPE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_REFERENCE_NUMBER = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_REFERENCE_NUMBER;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LISTED_ON = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LISTED_ON;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_COMMENTS1 = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_COMMENTS1;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DESIGNATION = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DESIGNATION;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DESIGNATION_VALUE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DESIGNATION_VALUE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY_VALUE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY_VALUE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE_VALUE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE_VALUE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED_VALUE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED_VALUE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_QUALITY = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_QUALITY;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_ALIAS_NAME = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_ALIAS_NAME;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_COUNTRY = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_COUNTRY;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH;
         //$INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TYPE_OF_DATE = $row->INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TYPE_OF_DATE;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_DATE = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_DATE;

         //$LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH;

         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT;

         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_TYPE_OF_DOCUMENT = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_TYPE_OF_DOCUMENT;

         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NUMBER = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NUMBER;

         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY;

         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY_LAST_MOD = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY_LAST_MOD;

         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NAME_ORIGINAL_SCRIPT = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NAME_ORIGINAL_SCRIPT;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_YEAR  = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_YEAR;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FOURTH_NAME  = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FOURTH_NAME;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_NOTE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_NOTE;	 
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_COUNTRY = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_COUNTRY;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NOTE = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NOTE;	
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_FROM_YEAR = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_FROM_YEAR;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TO_YEAR = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TO_YEAR;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_CITY = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_CITY;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_DATE_OF_ISSUE = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_DATE_OF_ISSUE;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_COUNTRY_OF_ISSUE = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_COUNTRY_OF_ISSUE;
         $INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_STATE_PROVINCE = $row->INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_STATE_PROVINCE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_GENDER = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_GENDER;
         $INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_TYPE_OF_DOCUMENT2 = $row->INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_TYPE_OF_DOCUMENT2;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE_VALUE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE_VALUE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_NOTE = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_NOTE	;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_ISSUING_COUNTRY = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_ISSUING_COUNTRY;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STREET = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STREET ;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_CITY = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_CITY;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_CITY_OF_ISSUE = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_CITY_OF_ISSUE;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STATE_PROVINCE = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STATE_PROVINCE ;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_DATE_OF_BIRTH = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_DATE_OF_BIRTH;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_NOTE = $row->IST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_NOTE;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_CITY_OF_BIRTH = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_CITY_OF_BIRTH;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_COUNTRY_OF_BIRTH = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_COUNTRY_OF_BIRTH;
         $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_ZIP_CODE  = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_ZIP_CODE;
         $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SUBMITTED_BY = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SUBMITTED_BY;
        $LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_NOTE = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_NOTE;
         $CONSOLIDATED_LIST_ENTITIES = $row->CONSOLIDATED_LIST_ENTITIES;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_DATAID = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_DATAID;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_VERSIONNUM = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_VERSIONNUM ;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_FIRST_NAME  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_FIRST_NAME;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_UN_LIST_TYPE = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_UN_LIST_TYPE;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_REFERENCE_NUMBER = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_REFERENCE_NUMBER;


         $CONSOLIDATED_LIST_ENTITIES_ENTITY_LISTED_ON = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LISTED_ON;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_COMMENTS1 = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_COMMENTS1 ;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE;
        // $CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE_VALUE  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE_VALUE ;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED_VALUE  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED_VALUE;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_QUALITY  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_QUALITY;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_ALIAS_NAME  =$row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_ALIAS_NAME;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS;
        // $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_CITY = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_CITY;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_COUNTRY  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_COUNTRY;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY_LAST_MOD = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY_LAST_MOD;
        // $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_NOTE = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_NOTE;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STATE_PROVINCE = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STATE_PROVINCE;
        // $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STREET = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STREET;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_NAME_ORIGINAL_SCRIPT = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_NAME_ORIGINAL_SCRIPT;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_ZIP_CODE = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_ZIP_CODE;
         $CONSOLIDATED_LIST_ENTITIES_ENTITY_SUBMITTED_ON = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_SUBMITTED_ON;

      
            
           $Sanctionlist = new Sanctionlist;
               
            
          $Sanctionlist->CONSOLIDATED_LIST_xmlns_xsi = $row->CONSOLIDATED_LIST_xmlns_xsi;     
           $Sanctionlist->CONSOLIDATED_LIST_dateGenerated = $row->CONSOLIDATED_LIST_dateGenerated;     
           //$Sanctionlist->CONSOLIDATED_LIST_xsi_noNamespaceSchemaLocation = $row->CONSOLIDATED_LIST_xsi_noNamespaceSchemaLocation; 
           
           $Sanctionlist->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DATAID = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DATAID; 

           //$Sanctionlist->DATAID = $row->DATAID;     
         $Sanctionlist->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_VERSIONNUM = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_VERSIONNUM;  
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FIRST_NAME = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FIRST_NAME;
         $Sanctionlist  ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SECOND_NAME  = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SECOND_NAME;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_THIRD_NAME   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_THIRD_NAME ;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_UN_LIST_TYPE  = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_UN_LIST_TYPE;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_REFERENCE_NUMBER  = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_REFERENCE_NUMBER;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LISTED_ON  = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LISTED_ON;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_COMMENTS1   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_COMMENTS1;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DESIGNATION   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DESIGNATION;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY;

         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY_VALUE   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY_VALUE;

         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE;

         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE_VALUE   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE_VALUE;

         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED_VALUE   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED_VALUE;

         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS;

         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_QUALITY   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_QUALITY;

         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_ALIAS_NAME   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_ALIAS_NAME;

         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS;

         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_COUNTRY   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_COUNTRY;

         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH;
        // $Sanctionlist ->INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TYPE_OF_DATE   = $row->INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TYPE_OF_DATE;

        //  $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_DATE   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_DATE;
        //   $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH;

        //  $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT;
        //  $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NUMBER   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NUMBER;
        //  $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY;
        //  $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY_LAST_MOD   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY_LAST_MOD;
        //  $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NAME_ORIGINAL_SCRIPT   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NAME_ORIGINAL_SCRIPT;
        //  $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_YEAR   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_YEAR;
        //  $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FOURTH_NAME   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FOURTH_NAME;
        //  $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_NOTE   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_NOTE;
        //  $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_COUNTRY   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_COUNTRY;
        //  $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NOTE   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NOTE;
        //  $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_TYPE_OF_DOCUMENT   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_TYPE_OF_DOCUMENT;
        //  $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_FROM_YEAR   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_FROM_YEAR;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TO_YEAR   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TO_YEAR;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_CITY   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_CITY;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_COUNTRY_OF_ISSUE   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_COUNTRY_OF_ISSUE;
         $Sanctionlist ->INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_STATE_PROVINCE   = $row->INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_STATE_PROVINCE;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_GENDER   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_GENDER;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE_VALUE   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE_VALUE;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_NOTE   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_NOTE;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_ISSUING_COUNTRY   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_ISSUING_COUNTRY;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STREET   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STREET;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_CITY   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_CITY;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_CITY_OF_ISSUE   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_CITY_OF_ISSUE;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STATE_PROVINCE   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STATE_PROVINCE;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_DATE_OF_BIRTH   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_DATE_OF_BIRTH;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_NOTE   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_NOTE;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_CITY_OF_BIRTH   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_CITY_OF_BIRTH;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_COUNTRY_OF_BIRTH   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_COUNTRY_OF_BIRTH;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_ZIP_CODE   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_ZIP_CODE;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SUBMITTED_BY   = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SUBMITTED_BY;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_NOTE   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_NOTE;
         $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES   = $row->CONSOLIDATED_LIST_ENTITIES;
         $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY;


         $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_DATAID   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_DATAID;
         $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_VERSIONNUM   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_VERSIONNUM;
         $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_FIRST_NAME   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_FIRST_NAME;
         $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_UN_LIST_TYPE   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_UN_LIST_TYPE;
         $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_REFERENCE_NUMBER   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_REFERENCE_NUMBER;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_LISTED_ON   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LISTED_ON;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_COMMENTS1   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_COMMENTS1;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED_VALUE   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED_VALUE;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS;
        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_QUALITY   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_QUALITY;
        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_ALIAS_NAME   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_ALIAS_NAME;
        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_CITY   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_CITY;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_COUNTRY   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_COUNTRY;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY_LAST_MOD   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY_LAST_MOD;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_NOTE   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_NOTE;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STATE_PROVINCE   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STATE_PROVINCE;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STREET   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STREET;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_NAME_ORIGINAL_SCRIPT   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_NAME_ORIGINAL_SCRIPT;

        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_ZIP_CODE   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_ZIP_CODE;
        //  $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_SUBMITTED_ON   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_SUBMITTED_ON;

         










         //$Sanctionlist ->LAST_DAY_UPDATED_VALUE  = $row->LAST_DAY_UPDATED_VALUE;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_QUALITY  = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_QUALITY;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_ALIAS_NAME  = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_ALIAS_NAME;
         //$Sanctionlist -> = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE_VALUE;
         $Sanctionlist ->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY_VALUE  = $row->CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY_VALUE;
        // $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE_VALUE   = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE_VALUE ;
         $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_COUNTRY   = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_COUNTRY;
        // $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_NOTE  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_NOTE;
        // $Sanctionlist  ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STREET  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STREET;
        // $Sanctionlist ->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_CITY  = $row->CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_CITY;
        // $Sanctionlist  ->INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TYPE_OF_DATE  = $row->INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TYPE_OF_DATE;
        //$Sanctionlist ->DATE  = $row->DATE;
      //   $Sanctionlist ->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH  = $row->LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH;
         //$Sanctionlist ->INDIVIDUAL_PLACE_OF_BIRTH_CITY  = $row->INDIVIDUAL_PLACE_OF_BIRTH_CITY;
        // $Sanctionlist ->STATE_PROVINCE  = $row->STATE_PROVINCE;
         //DD($Sanctionlist);
         $sanctionlist = Sanctionlist::where('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DATAID', $CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DATAID)->count();
         if($sanctionlist==0){
        dd('zero');
             $Sanctionlist->save(); 
         }else{
           // dd('$Sanctionlist');
            $Sanctionlist=null;
         }
         
         
         // return view('/parse',['array'=>$array]);
         }

         return redirect('/parse')->with('success', 'Data has been inserted ') ; 
           
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function uploadFile(){
        return view('uploadfile');
        
    }
    public function uploadFilePost(Request $request){
        $request->validate([
            'fileToUpload' => 'required|file|max:1024',
        ]);

        $request->fileToUpload->store('logos');

        return back()
            ->with('success','You have successfully upload image.');
         

    }
}
