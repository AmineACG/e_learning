<?php
// app/Models/MessageContact.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageContact extends Model
{
    protected $fillable = ['professeur_id', 'etudiant_id', 'title', 'contenu', 'date_envoi'];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}