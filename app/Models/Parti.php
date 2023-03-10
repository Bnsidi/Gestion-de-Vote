<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parti extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom',
    ];
    public function candidat(){
        return $this->belongTo(Candidat::class);
    } 
}
