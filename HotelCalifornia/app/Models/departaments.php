<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class departaments extends Model
{
    public $timestamps = false; 
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = [''];

    public function departament(){
        return $this->HasOne (empleats::class,'departament_id');
    } 

}
