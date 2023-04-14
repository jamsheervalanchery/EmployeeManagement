<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $table = 'leave';
    protected $primaryKey = 'id';
    protected $fillable = ['leaveName'];
    use HasFactory;
}
