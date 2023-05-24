<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PressPackageCategory extends Model
{
    use HasFactory;
    protected $table = 'press_package_category';

    public function package(){
        return $this->hasMany(PackageBundle::class, 'press_package_category_id','id');
    }
}
