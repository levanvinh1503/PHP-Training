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
     * 
     * @return array
     */
    public function CategoryPost()
    {
        return $this->belongsTo('App\Categories', 'category_id_fkey', 'id');
    }
}
