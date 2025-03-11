<?php
// app/Models/Question.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['contenu', 'date_post', 'etudiant_id', 'forum_id'];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }
}
