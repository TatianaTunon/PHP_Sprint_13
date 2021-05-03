<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleats extends Model
{
    public $timestamps = false; 
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = [''];

    public function departament(){
        return $this->belongsTo(departaments::class,'departament_id');
    } 

    public function empleat(){
        return $this->belongsTo(reservas::class,'empleat_id');
    } 

}
