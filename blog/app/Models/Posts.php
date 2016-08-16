<?php

namespace BillJellesmaBlog\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use DB;

class Posts extends Model
{
  protected $table = 'posts';
    /**
     * The attributes that are mass assignable.
     * These attributes must be present for models to post
     * @var array
     */
    protected $fillable = [
        'title',
        'text',
        'slug',
        'thumbnail',
        'user_id',
    ];
    public static function getUserByID($id, $wanted){
      $user = DB::table('users')->where('id', $id)->first();
      switch($wanted){
        case 'username':
          $result = $user->username;
          break;
      }
      return $result;
    }

public function getAvatarUrl()
{
  return "https://www.gravatar.com/avatar/{{ md5($this->email)}}?d=mm&s=40";
}
public static function imageHandle($name, $file){
  $imageName = $name . '.' .  $file->getClientOriginalExtension();
  $imagePath = '/' . env('IMAGE_DIR'). '/posts/';
  $file->move($imagePath, $imageName);
  return $imageName;
}

}
