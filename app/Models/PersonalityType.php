<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalityType extends Model
{
    use HasFactory;
    protected $table = 'personalities';
    protected $fillable = ['name', 'description'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function personalities()
    {
        return $this->belongsTo(PersonalityType::class, 'personalities', 'id', 'id')
            ->withPivot('intensity')
            ->withTimestamps();
    }
}
