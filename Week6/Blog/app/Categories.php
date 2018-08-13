<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * Get the post that owns the categories.
     */
    public function CategoriesPost()
    {
    	return $this->hasMany('App\Posts', 'categories_id_fkey', 'categories_id');
    }
}
