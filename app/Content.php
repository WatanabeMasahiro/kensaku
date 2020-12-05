<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{

    protected $guarded = array('id');

    public static $rules = array (
        'title' => 'required',
        'text'  => 'required',
    );

    public function getRecord()
    {
        return $this->id . ': ' . $this->title;
    }

    public function getId()
    {
        return $this->id;
    }

}
