<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionStatement extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function provider()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function customer() 
    {
      return $this->belongsTo(User::class, 'customer_id');
    }
}
