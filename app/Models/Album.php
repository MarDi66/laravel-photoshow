<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function index() 
    {
        return view('albums.index');
    }

    public function create()
    {
        return view('albums.create');
    }
}
