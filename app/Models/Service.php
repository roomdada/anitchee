<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function missionStatements()
    {
        return $this->hasMany(MissionStatement::class);
    }

    public function users()
    {
      return $this->belongsToMany(User::class);
    }
    
}
