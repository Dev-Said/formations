<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre',
        'modules_id',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
