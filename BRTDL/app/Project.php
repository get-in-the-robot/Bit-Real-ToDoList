<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Project extends Model
{
    protected $fillable = [
        'name', 'description', 'image', 'color', 'public', 'symbol', 'user'
    ];

    public function User(){
        return $this->belongsTo('App\User', 'user');
    }

    public function Tasks(){
        return $this->hasMany('App\Task', 'project');
    }

}
