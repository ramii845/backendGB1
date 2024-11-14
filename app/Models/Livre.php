<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'isbn',
        'imagelivre',
        'description',
        'prix',
        'qteStock',
        'categorieID'
        ];
        public function categorie()
        {
        return $this->belongsTo(Categorie::class,"categorieID");
        }
         

}
