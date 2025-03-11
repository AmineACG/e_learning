<?php
// app/Models/Reponse.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    protected $fillable = ['contenu', 'date_post', 'etudiant_id', 'professeur_id', 'question_id'];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
