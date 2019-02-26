<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $fillable = [
        'file_path'
    ];

    protected $uploads = '/uploaded_books/';

    public function getfile_pathAttribute($file){
        return $this->uploads . $file;
    }
}
