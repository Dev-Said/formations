<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remember extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'model_id');
    }
    public function module()
    {
        return $this->belongsTo(Module::class, 'model_id');
    }
    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'model_id');
    }
    public function question()
    {
        return $this->belongsTo(Question::class, 'model_id');
    }
    public function reponse()
    {
        return $this->belongsTo(Reponse::class, 'model_id');
    }
}
