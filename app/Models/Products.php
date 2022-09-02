<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static select(string $string)
 * @method static latest()
 * @method static findOrFail(mixed $pro_id)
 */
class Products extends Model
{
    use HasFactory;
//    protected $fillable=[
//        'id',
//        'product_name',
//        'description',
//        'section_id',
//    ];
//تسخدام  بدلها الي فوق
protected $guarded= [];

public  function section  (): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
    return $this->belongsTo(sections::class);

}


}
