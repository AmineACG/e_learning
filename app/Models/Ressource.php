<?php
// app/Models/Ressource.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    protected $fillable = ['nom_fichier', 'type', 'taille', 'cours_id', 'date_upload'];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}