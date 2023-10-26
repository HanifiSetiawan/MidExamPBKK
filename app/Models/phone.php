<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $table = 'phones'; 
    protected $fillable = ['name', 'amount', 'type', 'condition','picture'];
}
