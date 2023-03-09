<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game_user extends Model
{
    use HasFactory;
    //モデルでfillableかguaredを指定する
    protected $guarded = [
    'id',
    'created_at',
    'updated_at',
  ];
}
