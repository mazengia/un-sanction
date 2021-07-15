<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sanctionlist extends Model
{
    protected $fillable = ['id', 'CONSOLIDATED_LIST_id', 'INDIVIDUALS_id', 'DATAID', 'VERSIONNUM',
    'FIRST_NAME','SECOND_NAME','THIRD_NAME','UN_LIST_TYPE'] ;
}
