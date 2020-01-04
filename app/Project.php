<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=[
        'name' ,'description','owner_id'
    ];
    //protected $guarded=[];
    
    public function owner(){
        return $this->belongsTo(User::class);
    }
    
    public function tasks(){
        return $this->hasMany(Tasks::class);
    }
    public function addTask($task){
        $this->tasks()->create($task);
    }
}
