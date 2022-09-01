<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string)
 * @method static create(array $array)
 */
class sections extends Model
{
    use HasFactory;
     protected $fillable=[
            'id',
            'section_name',
            'sections_description',
            'created_by',
     ];

}
