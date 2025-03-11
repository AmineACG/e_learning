<?php
// app/Models/Etudiant.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['nom', 'prenom', 'email', 'password_hash'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }

    public function messagesContact()
    {
        return $this->hasMany(MessageContact::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
