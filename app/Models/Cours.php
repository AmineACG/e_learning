<?php
// app/Models/Cours.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = ['titre', 'description', 'syllabus', 'professeur_id'];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }

    public function ressources()
    {
        return $this->hasMany(Ressource::class);
    }

    public function forum()
    {
        return $this->hasOne(Forum::class);
    }
}
