<?php

namespace BillJellesmaBlog\Http\Controllers;
use BillJellesmaBlog\Models\Posts;
use Illuminate\Http\Request;
use DB;
use Auth;

class PostController extends Controller {



  public function getPost($slug){
    $post=Posts::where('slug', '=', $slug)->firstOrFail();
    return view('posts.show')->with('post', $post);
  }
  public function getPostEdit($slug){
    $post=Posts::where('slug', '=', $slug)->firstOrFail();
    return view('posts.edit')->with('post', $post);
  }
  public function postPostEdit($slug, Request $request){
    $this->validate($request, [
      'title' => 'max:255',
      'text' => 'max:5000',
      'thumbnail' => 'max:255|mimes:png,jpg,jpeg,gif',
  ]);
  $custom_slug = str_replace(' ', '-', $request->input('title'));
  if ($request->hasFile('thumbnail')) {
      $imageName = Posts::imageHandle('Thumbnail-' . $slug, $request->file('thumbnail'));
      $whereClause = [
      'title' => $request->input('title'),
      'text' => $request->input('text'),
      'thumbnail' => $imageName,
      'slug' => $custom_slug,
    ];
        }else{
          $whereClause = [
          'title' => $request->input('title'),
          'text' => $request->input('text'),
          'slug' => $custom_slug,
        ];
      }

  if($request->hasFile('thumbnail')){
  DB::table('posts')
    ->where('slug', $slug)
    ->update($whereClause);
}
else{
  DB::table('posts')
    ->where('slug', $slug)
    ->update([
    'title' => $request->input('title'),
    'text' => $request->input('text'),
    'slug' => $custom_slug,
  ]);
}
  //move picture to images folder

  return redirect('/home')->with('info', 'Your post has been updated');
}

  public function getNew(){
    return view('posts.new');
  }

  public function postNew(Request $request) {
    //the code for Validator can be found in the illuminate docs
    $this->validate($request, [
        'title' => 'required|max:255|unique:posts',
        'text' => 'required|max:5000',
        'thumbnail' => 'max: 255'
    ]);
    $custom_slug = str_replace(' ', '-', $request->input('title'));
    if ($request->hasFile('thumbnail')) {
        $imageName = Posts::imageHandle('Thumbnail-' . $slug, $request->file('thumbnail'));
    }else{
      $imageName = 'Thumbnail-default.png';
    }

    Posts::create([
      'title' => $request->input('title'),
      'text' => $request->input('text'),
      'slug' => $custom_slug,
      'thumbnail' => $imageName,
      'user_id' => Auth::id(),
    ]);
    return redirect('/home')->with('info', 'Your post has been saved');
  }


  public function deletePost(Posts $post){
    $post->delete();

    return redirect('/home')->with('info', 'Your post is deleted');
  }
} ?>
