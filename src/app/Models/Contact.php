<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'category_id', 'detail'];

    public static $rules = array(
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required|integer|between:1,3',
        'email' => 'required|email',
        'tell' => 'required|integer',
        'address' => 'required|string',
        'building' => 'string',
        'category_id' => 'required|between:1,5',
        'detail' => 'required|string|max:120'
    );

    public function category()
    {
        return $this->hasOne('Aoo\Models\Category');
    }
}
