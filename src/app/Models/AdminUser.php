<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = ['name', 'email', 'password'];

    public static $rules = array(
        'name' => 'required|varchar|max:255',
        'email' => 'required|varchar|max:255',
        'password' => 'required|varchar|max:255'
    );
}
