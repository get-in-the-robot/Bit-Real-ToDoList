<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'project', 'name', 'color', 'priority', 'symbol', 'completed'
    ];

    public function Project(){
        return $this->belongsTo('App\Project', 'project');
    }
}
