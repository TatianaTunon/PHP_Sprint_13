<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $guarded = [''];

    public function empleat(){
        return $this->belongsTo(empleats::class,'empleat_id');
    } 
}
