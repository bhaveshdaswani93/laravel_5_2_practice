<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Post;
use App\User;
use App\Rule;
use App\Country;
use App\Photo;
use App\Tag;
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/insertEl',function(){
//     $post = new Post;
//     $post->title = 'test title';
//     $post->content = 'test content';
//     $post->save();
// });
// Route::get('/updateEl',function(){
//     Post::where('id',1)->update(['title'=>'updated title']);
// });
// Route::get('/delete',function(){
//     $post = Post::find(4);
//     $post->delete();
// });
// Route::get('/delete2',function(){
//     Post::destroy(2);
// });
// Route::get('/delete3',function(){
//     Post::where('id',3)->delete();
// });
// Route::get('/getSoftDelete',function(){
//     return Post::onlyTrashed()->get();
// });
// Route::get('/forceDelete',function(){
//     return Post::withTrashed()->where('id',5)->forceDelete();
// });
// Route::get('/user/{id}/post',function($id){
//     return User::find($id)->post;
// });
// Route::get('/post/{id}/user',function($id){
//     return Post::find($id)->user;
// });
// Route::get('/user/{id}/posts',function($id){
//     $posts =  User::find(1)->posts;
//     foreach($posts as $post) {
//         echo $post->title."<br>";
//     }
// });
// Route::get('/user/{id}/rules',function($id){
//     return User::find($id)->rules()->orderBy('name')->get();
// });
// Route::get('/rule/{id}/users',function($id){
//     $users = Rule::find($id)->users;
//     // return ($user->name);
//     foreach ($users as $user) {
//         return $user->name;
//         // var_dump($user);
//     }
// });
// Route::get('/user/pivot',function(){
//     $user = User::find(1);
//     foreach ($user->rules as $rule) {
//         # code...
//         var_dump( $rule->pivot->created_at );
//         // var_dump($rule->pivot);
//     }

// });

// Route::get('/user/country',function(){
//     $country = Country::find(1);
//     foreach($country->posts as $post)
//     {
//         echo $post->title."<br>";
//     }
// });
// Route::get('/user/{id}/photos',function($id){
//     $user = User::find($id);
//     foreach($user->photos as $photo) {
//         return $photo->path;
//     }
// });
// Route::get('/post/{id}/photos',function($id){
//     return Post::find($id)->photos;
// });
// Route::get('/photo/{id}/owner',function($id){
//     return Photo::findOrFail($id)->imageable;
// });
// Route::get('/post/{id}/tags',function($id){
//     $post  = Post::find($id);
//     foreach($post->tags as $tag)
//     {
//         return $tag->name;
//     }
// });
// Route::get('/tag/{id}/owner',function($id){
//     $tag = Tag::find($id);
//     foreach($tag->posts as $post)
//     {
//         return $post->content;
//     }
// });

Route::resource('posts','PostController');
// Route::group(['middleware'=>'web'],function(){
//     Route::resource('posts','PostController');
// });