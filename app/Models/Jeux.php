<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jeux extends Model
{
    use HasFactory;
    protected $table = 'jeux';
    protected $fillable=['name', 'producteur', 'release_year', 'createur_id'];

    public function createur(){
        return $this->belongsTo('createur_id');
    }
}
