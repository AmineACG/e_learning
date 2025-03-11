<?php
// app/Models/Annonce.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    protected $fillable = ['contenu', 'date_publication', 'professeur_id'];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }
}
