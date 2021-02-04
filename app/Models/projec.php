<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projec extends Model
{
    use HasFactory;

    protected $fillable = ['p_number','p_name','p_lead','status','price'];
}
