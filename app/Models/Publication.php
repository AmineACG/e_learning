<?php
// app/Models/Publication.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = ['titre', 'annee', 'type', 'sujet', 'lien', 'cours_id'];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}