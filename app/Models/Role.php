<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  use HasFactory;

  protected $guarded = [];

  const SUPER_ADMIN = 1;
  const ADMIN = 2;
  const PROVIDER = 3;
  const CUSTOMER = 4;

  public function users()
  {
    return $this->hasMany(User::class);
  }
}
