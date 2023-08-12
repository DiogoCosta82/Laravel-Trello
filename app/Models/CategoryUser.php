<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoryUser extends Pivot
{
    protected $primaryKey = ['user_id', 'category_id'];
 
    public function position()
    {
        return $this->belongsTo(CategoryUser::class, 'column');
    }
}
