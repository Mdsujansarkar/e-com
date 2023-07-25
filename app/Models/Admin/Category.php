<?php

namespace App\Models\Admin;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Uuid;
    use HasFactory;
    protected $fillable = ['category'];
}
