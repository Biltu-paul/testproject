<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
   use SoftDeletes;
   public $table = 'todos';		
   protected  $fillable =['title','completed','user_id'];
   protected $dates = ['deleted_at'];
	
   public function getCompletedAttribute($value){
   		if($value){
   			return true;
   		}
		return false;
   }
   
	
}
