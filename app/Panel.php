<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panel extends Model

{
    protected $fillable = [
        'num_panel',
        'user_id',
        'topic'
    ];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'user_id',
            'panel'
        );
    }
    // public function author()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // public static function add ($fields)
    // {
    //     $panel = new static;
    //     $panel->fill($fields)
    //   //  $panel->user_id = 1;
    //     $panel->save();
    //     return $panel;
    // }

    // public function edit($fields)
    // {
    //     $this->fill($fields);
    //     $this->save();
    // }

    // public function remove()
    // {
    //    // $this->removeImage();
    //     $this->delete();
    // }
}
