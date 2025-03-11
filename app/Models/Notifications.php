<?php
// app/Models/Notification.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['etudiant_id', 'professeur_id', 'message', 'type', 'date', 'vu'];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }
}