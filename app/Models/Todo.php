<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    // In fillable you are supposed to fill it with columns that you want to change by user
    protected $fillable = ['user_id', 'status', 'description'];

    // In guarded you are supposed to fill it with columns that you want to not change by user
    // protected $guarded = [];
    
}
