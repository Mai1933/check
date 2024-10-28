<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = ['content'];

    public function contacts(){
        return $this->belongsTo('App\Models\Contact');
    }
}
