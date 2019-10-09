<?php

Route::get('', ['as' => 'admin.dashboard', function () {
    $content = view('admin.dashboard');
    return AdminSection::view($content);
}]);

Route::get('information', ['as' => 'information', function () {
    $content = 'Define your information here.';
    return AdminSection::view($content, 'Information');
}]);

Route::delete('interview_variant_answers/delete/{id}', '\App\Http\Controllers\Admin\InterviewVariantAnswerController@delete')->name('admin.answers.delete');

Route::get('interview_questions/show/{id}', '\App\Http\Controllers\Admin\InterviewQuestionsController@show');

Route::get('replays/show/{id}', '\App\Http\Controllers\Admin\ReplayController@show');
Route::post('replays/show/{id}/send_comment', '\App\Http\Controllers\Admin\ReplayController@comment')->name('admin.replays.comment_send');
Route::delete('replays/show/{id}/delete_comment', '\App\Http\Controllers\Admin\ReplayController@deleteComment')->name('admin.replays.comment_delete');

Route::get('usergallery/show/{id}', '\App\Http\Controllers\Admin\UserGalleryController@show');
Route::post('usergallery/show/{id}/send_comment', '\App\Http\Controllers\Admin\UserGalleryController@comment')->name('admin.usergallery.comment_send');
Route::delete('usergallery/show/{id}/delete_comment', '\App\Http\Controllers\Admin\UserGalleryController@deleteComment')->name('admin.usergallery.comment_delete');



//Route::get('', '\App\Http\Controllers\MyController@index');


Route::get('forum_topics/show/{id}', '\App\Http\Controllers\Admin\ForumTopicController@show');
Route::post('forum_topics/show/{id}/send_comment', '\App\Http\Controllers\Admin\TopicCommentController@store')->name('admin.forum.topic.comment_send');

//Route::get('translations/{groupKey?}', '\Barryvdh\TranslationManager\Controller@getIndex');
