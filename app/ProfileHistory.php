<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHistory extends Model
{
  protected $guardedb = array('id');
     public static $rules = array(
      'profiles_id' => 'required',
      'edited_at' => 'required',
      );
     
}
