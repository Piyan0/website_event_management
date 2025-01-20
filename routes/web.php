<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Bookmark;
use App\Models\Comment;
use App\Models\User;

// dump(env("APP_DEBUG"));
// dump(env("APP_ENV"));
Route::get('/', function () {

  session()->put("current_menu", "home");
  session(["user_id" => 1]);
  $user_id = 1;
  $user_model = User::find($user_id);
  $event_data = Event::inRandomOrder()->limit(5)->get();
  return view("index", ["event_data"=> $event_data]);
});
Route::get('/upcoming', function () {

  session()->put("current_menu", "upcoming");

  $event_data = Event::inRandomOrder()->limit(2)->get();
  return view("index", ["event_data"=> $event_data]);
});
Route::get('/history', function () {
  session()->put("current_menu", "bookmark");
  $user_id = session()->get('user_id');
  session()->put("current_menu", "history");

  $user_model = User::find($user_id);
  $bookmarks = $user_model->histories;
  $event_data = [];
  foreach($bookmarks as $i) {
    array_push($event_data, $i->event);
  }
  return view("index", ["event_data"=> $event_data]);

});
Route::get('/bookmark', function () {
  session()->put("current_menu", "bookmark");
  $user_id = session()->get('user_id');
  $user_model = User::find($user_id);
  $bookmarks = collect($user_model->bookmarks)->sortByDesc("created_at");
  $event_data = [];
  foreach($bookmarks as $i) {
    array_push($event_data, $i->event);
  }
  
  return view("index", ["event_data"=> $event_data]);
});
Route::get('/comments', function (Request $req) {
  session()->put("recent_viewed_post", $req->query("id"));
  $event_data = Event::find(
    $req->query("id")
  );
  $comments= collect($event_data->comments)->sortByDesc("created_at");
  return view("comment_view", ["event_data"=> $event_data, "comments" => $comments]);
});
Route::post('/comment', function (Request $req) {
  $content= $req->input("comment");
  $req->validate(
    ["comment"=> "required|min:1|max:256"]
  );
  $event_id= session("recent_viewed_post");
  $user_name= User::find(session("user_id"))->name;
  Comment::create([
    "name" => $user_name,
    "event_id" => $event_id,
    "content" => $content
  ]);
  return redirect("/comments?id=$event_id");
});
Route::post('/search', function (Request $req){
  session()->put("current_menu", null);
  $search= $req->input("search_value");
  
  $req->validate([
  "search_value" => "required|min:1|max:256"
  ]);
  
  $result= Event::where("tittle" ,"LIKE", "%$search%")->get();
  return view("index", ["event_data" => $result]);
});

Route::get("/add_bookmark", function(Request $req){
  $id= $req->query("id");
  Bookmark::firstOrCreate(
  [
  "event_id"=> $id,
  "user_id"=> session("user_id"),
  ]
  );
  return view("bookmark_added");
});

