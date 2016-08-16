<?php

namespace BillJellesmaBlog\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use DB;
use Auth;
class User extends Model implements AuthenticatableContract
{
  use Authenticatable;
  protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

public function getName(){
  if ($this->first_name && $this->last_name){
    return "{$this->first_name} {$this->last_name}";
  }
  if($this->first_name){
    return $this->first_name;
  }
  return null;
}

public function getNameOrUsername(){
  return $this->getName() ?: $this->username;
}

public function getFirstNameOrUsername(){
  return $this->first_name ?: $this->username;
}

public function getAvatarUrl()
{
  return "https://www.gravatar.com/avatar/{{ md5($this->email)}}?d=mm&s=40";
}

public static function admin(){
  if (Auth::id() ==1){
    return true;
  }else{
    return false;
  }
}

}
