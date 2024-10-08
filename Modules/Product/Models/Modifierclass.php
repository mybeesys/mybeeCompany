<?php

namespace Modules\Product\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Product\Database\Factories\ModifierclassFactory;

class ModifierClass extends Model
{
    use HasFactory;
    protected $table = 'product_modifierclasses';
        
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name_ar',
        'name_en',
        'order',
        'active'
    ];

    public function getFillable(){
        return $this->fillable;
    }

    public $type = 'modifierClass';
    public $childType = 'modifier';
    public $childKey = 'class_id';

    public function childs()
    {
        return $this->hasMany(Modifier::class, 'class_id', 'id');
    }

    // protected static function newFactory(): ModifierclassFactory
    // {
    //     // return ModifierclassFactory::new();
    // }
}
