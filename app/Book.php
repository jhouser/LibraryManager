<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function authors() {
        return $this->belongsToMany('App\Author', 'book_author');
    }
    
    public function formatAuthors() {
        $names = [];
        foreach ($this->authors as $author) {
            $names[] = $author->name;
        }
        return implode(',', $names);
    }
}
