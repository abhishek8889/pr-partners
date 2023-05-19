<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageBundle extends Model
{
    use HasFactory;
    protected $table = 'package_bundle';
    public function category(){
        return $this->hasOne(PressPackageCategory::class,'id','press_package_category_id');
    }
    
}
