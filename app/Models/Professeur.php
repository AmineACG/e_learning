<?php
// app/Models/Professeur.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'biographie', 'photo', 'google_scholar'];

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }
}
