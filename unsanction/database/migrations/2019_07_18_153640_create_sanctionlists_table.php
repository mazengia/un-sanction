<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanctionlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanctionlists', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->Integer('CONSOLIDATED_LIST_id')->nullable;
            $table->string('CONSOLIDATED_LIST_xmlns_xsi')->nullable;
            $table->string('CONSOLIDATED_LIST_dateGenerated')->nullable;
            //$table->string('CONSOLIDATED_LIST_xsi_noNamespaceSchemaLocation')->nullable;
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DATAID')->nullable;
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_VERSIONNUM')->nullable;
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FIRST_NAME')->nullable;
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SECOND_NAME')->nullable;
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_THIRD_NAME')->nullable;
             
            //$table->date('LAST_DAY_UPDATED_VALUE')->nullable;
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_UN_LIST_TYPE')->nullable;
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_REFERENCE_NUMBER')->nullable;
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LISTED_ON')->nullable; 
          
          
           
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_COMMENTS1')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DESIGNATION')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_DESIGNATION_VALUE')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NATIONALITY_VALUE')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LIST_TYPE_VALUE')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_LAST_DAY_UPDATED_VALUE')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_QUALITY')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_ALIAS_NAME')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_COUNTRY')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH')->nullable; 
            // $table->string('INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TYPE_OF_DATE')->nullable; 
            // $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_DATE')->nullable; 
            // $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH')->nullable; 

            // $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT')->nullable; 
            // $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_TYPE_OF_DOCUMENT')->nullable; 
            // $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NUMBER')->nullable; 

            // $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY')->nullable; 
            // $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SORT_KEY_LAST_MOD')->nullable; 
            // $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_NAME_ORIGINAL_SCRIPT')->nullable; 
            // $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_YEAR')->nullable; 
            // $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_FOURTH_NAME')->nullable; 

            // $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_NOTE')->nullable; 
            // $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_COUNTRY')->nullable; 
            // $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_NOTE')->nullable; 
            // $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_FROM_YEAR')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_TO_YEAR')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_CITY')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_DATE_OF_ISSUE')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_COUNTRY_OF_ISSUE')->nullable; 

            $table->string('INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_STATE_PROVINCE')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_GENDER')->nullable; 
            $table->string('INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_TYPE_OF_DOCUMENT2')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE')->nullable;    
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_TITLE_VALUE')->nullable; 


            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_NOTE')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_ISSUING_COUNTRY')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STREET')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_CITY')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DOCUMENT_CITY_OF_ISSUE')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_STATE_PROVINCE')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_DATE_OF_BIRTH')->nullable; 

            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_DATE_OF_BIRTH_NOTE')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_CITY_OF_BIRTH')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ALIAS_COUNTRY_OF_BIRTH')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_ADDRESS_ZIP_CODE')->nullable; 
            $table->string('CONSOLIDATED_LIST_INDIVIDUALS_INDIVIDUAL_SUBMITTED_BY')->nullable; 
            $table->string('LIST_INDIVIDUALS_INDIVIDUAL_INDIVIDUAL_PLACE_OF_BIRTH_NOTE')->nullable; 

            $table->string('CONSOLIDATED_LIST_ENTITIES')->nullable; 
            $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY')->nullable; 
            $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_DATAID')->nullable; 
            $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_VERSIONNUM')->nullable; 
            $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_FIRST_NAME')->nullable; 
            $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_UN_LIST_TYPE')->nullable; 
            $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_REFERENCE_NUMBER')->nullable; 
            
            // $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_LISTED_ON')->nullable; 
            // $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_COMMENTS1')->nullable; 
            // $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE')->nullable; 
            // $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_LIST_TYPE_VALUE')->nullable; 
            // $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED')->nullable; 
            // $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_LAST_DAY_UPDATED_VALUE')->nullable; 
            // $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS')->nullable; 

            // $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_QUALITY')->nullable; 
            // $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ALIAS_ALIAS_NAME')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_CITY')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_COUNTRY')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_SORT_KEY_LAST_MOD')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_NOTE')->nullable; 

        //   $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STATE_PROVINCE')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_STREET')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_NAME_ORIGINAL_SCRIPT')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_ENTITY_ADDRESS_ZIP_CODE')->nullable; 
        //     $table->string('CONSOLIDATED_LIST_ENTITIES_ENTITY_SUBMITTED_ON')->nullable; 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanctionlists');
    }
}
