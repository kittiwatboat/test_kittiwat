<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $table = 'test';
    protected $primaryKey = 'id';
    protected $fillable = ['id','request_unique_no','transaction_id','transaction_status','description','barcode','balance','create_date','created_at','updated_at'];
}
