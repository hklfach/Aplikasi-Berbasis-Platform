<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'price',
        'created_at',
        'updated_at',
      ];
    
    public function variants() {
      return $this->hasMany(Variant::class);
    }
        
}
