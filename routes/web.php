<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Home*/
Route::get('/', 'HomeController@index')->name('home.index');

/*News*/
Route::resource('news', 'NewsController');
Route::post('news/{id}/send_comment', 'NewsController@comment_send')->name('news.comment_send');
Route::post('/loadmore/load_news', 'NewsController@load_news')->name('loadmore.load_news');
/*Forum*/
Route::resource('forum', 'ForumController');
/*Forum topic*/
Route::resource('forum/topic', 'TopicController');/*Route::get('forum/topic/{id}', function (){
    return view('forum.topic');
});*/
//Route::resource('forum/topic/comment','TopicCommentController');
Route::post('forum/topic/{id}/comment', 'TopicCommentController@store')->name('comment.store');

/*Interview*/
Route::resource('interview', 'Interview\InterviewController');

/*Best*/
Route::resource('best', 'Best\BestController');

/*Replay*/
Route::resource("replay", 'Replay\ReplayController');
//Route::post('/loadmore/load_replays', 'Replay\ReplayHelper@loadNews')->name('load.more.replays');
Route::group(['prefix' => 'replay'], function () {
    Route::get('{id}/download', 'Replay\ReplayHelper@download')->name('replay.user.download');
    Route::any('{id}/download_count', 'Replay\ReplayHelper@downloadCount')->name('replay.user.download.count');
    Route::post('{id}/send_comment', 'Replay\ReplayHelper@saveComments')->name('replay.send_comment');

});
/*Tournament*/
Route::resource("tournament", 'Tournament\TournamentController');

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {

    Route::get('/friends_list', 'UserFriendController@getFriendsList')->name('user.friends_list');

    Route::get('{id}', 'UserController@show')->name('user_profile');
    Route::resource("{id}/user-gallery", 'User\UserGalleryController');
    Route::resource("{id}/user-topics", 'User\UserTopicsController');
    Route::resource("{id}/user-replay", 'User\UserReplayController');
    Route::resource("{id}/user-comments", 'User\UserCommentsController');
    Route::resource("{id}/user-rating-list", 'User\UserRatingListController');
    Route::resource("{id}/user-topic-rating-list", 'User\UserTopicRatingListController');

    Route::get('{id}/topic', 'TopicController@getUserTopic')->name('user.forum_topic');
    Route::get('{id}/edit', 'UserController@edit')->name('edit_profile');
    Route::post('{id}/save', 'UserController@update')->name('save_profile');
    Route::get('{id}/add_friend', 'UserFriendController@addFriend')->name('user.add_friend');
    Route::get('{id}/remove_friend', 'UserFriendController@removeFriend')->name('user.remove_friend');
    Route::get('{id}/friends_list', 'UserFriendController@getFriendsList')->name('user.friends_list.by_id');

});

Route::group(['prefix' => 'chat'], function () {

//    Route::group(['middleware' => 'auth'], function () {
        Route::post('/insert_message', 'ChatController@insert_message')->name('chat.add_message');
//    });

    Route::get('/get_messages', 'ChatController@get_messages')->name('chat.get_messages');
//    Route::post('/get_message', 'ChatController@get_message')->name('chat.get_message');

//    Route::get('/get_externalsmiles','ChatController@get_externalsmiles')->name('chat.get_smiles');
//    Route::get('/get_externalimages','ChatController@get_externalimages')->name('chat.get_images');
});

/*Galleries*/
Route::resource("galleries", 'User\GalleriesController');
Route::post('galleries/{id}/send_comment', 'User\GalleryHelper@saveComments')->name('galleries.send.comment');
/*Search*/
Route::any('search', 'SearchController@index')->name('search');
/*Search Replay*/
Route::any('replay-search', 'Replay\ReplaySearchController@index')->name('replay.search');


Auth::routes();
