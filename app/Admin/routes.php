<?php

Route::get('', [
    'as'   => 'admin.dashboard',
    'uses' => '\App\Http\Controllers\Admin\DashboardController@index',
]);

Route::delete('interview_variant_answers/{id}/delete', '\App\Http\Controllers\Admin\InterviewVariantAnswerController@delete')->name('admin.answers.delete');

Route::get('interview_questions/{id}/show', '\App\Http\Controllers\Admin\InterviewQuestionsController@show');

Route::get('replays/{id}/show', '\App\Http\Controllers\Admin\ReplayController@show');
Route::post('replays/{id}/show/send_comment', '\App\Http\Controllers\Admin\ReplayController@comment')->name('admin.replays.comment_send');
Route::delete('replays/{id}/show/delete_comment', '\App\Http\Controllers\Admin\ReplayController@deleteComment')->name('admin.replays.comment_delete');
Route::post('replays/{id}/download', '\App\Http\Controllers\Admin\ReplayController@download')->name('admin.replay.download');

Route::get('user_galleries/show/{id}', '\App\Http\Controllers\Admin\UserGalleryController@show');
Route::post('user_galleries/show/{id}/send_comment', '\App\Http\Controllers\Admin\UserGalleryController@comment')->name('admin.usergallery.comment_send');
Route::delete('user_galleries/show/{id}/delete_comment', '\App\Http\Controllers\Admin\UserGalleryController@deleteComment')->name('admin.usergallery.comment_delete');

Route::get('streams/show/{id}', '\App\Http\Controllers\Admin\StreamController@show');


Route::get('forum_topics/{id}/show', '\App\Http\Controllers\Admin\ForumTopicController@show');
Route::post('forum_topics/show/{id}/send_comment', '\App\Http\Controllers\Admin\TopicCommentController@store')->name('admin.forum.topic.comment_send');

Route::get('users/{id}/send-email-create', '\App\Http\Controllers\Admin\EmailController@emailCreate')->name('admin.user.email-send.create');
Route::post('users/send-email-send', '\App\Http\Controllers\Admin\EmailController@emailSend')->name('admin.user.email-send.send');

Route::get('translations/{groupKey?}', '\Barryvdh\TranslationManager\Controller@getIndex');

Route::get('tourney_lists/{id}/match_generator', '\App\Http\Controllers\Admin\Tournament\MatchGeneratorController@show')->name('admin.tourney.show');
Route::post('tourney_lists/match_generator', '\App\Http\Controllers\Admin\Tournament\MatchGeneratorController@matchGenerator')->name('admin.tourney.match.generator');

/**
 * Logs
 */
Route::group(['middleware' => ['superAdminOnly']], function () {
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});
