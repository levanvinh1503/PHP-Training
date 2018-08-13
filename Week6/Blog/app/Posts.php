<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * Get the categories that owns the post.
     */
    public function CategoriesPost()
    {
        return $this->belongsTo('App\Categories', 'categories_id_fkey', 'categories_id');
    }
}
