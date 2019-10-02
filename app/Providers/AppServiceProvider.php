<?php

namespace App\Providers;


use App\Models\ForumTopic;
use App\Models\Replay;
use App\Models\UserGallery;
use App\Observers\ForumTopicObserver;
use App\Observers\ReplayObserver;
use App\Observers\UserGalleryObservers;
use Illuminate\Support\ServiceProvider;
use App\Models\InterviewQuestion;
use App\Observers\InterviewQuestionObserver;


class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

//    private $views;

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
//    Factory private  $viewFactory;
    public function boot()
    {
        InterviewQuestion::observe(InterviewQuestionObserver::class);
        UserGallery::observe(UserGalleryObservers::class);
        Replay::observe(ReplayObserver::class);
        ForumTopic::observe(ForumTopicObserver::class);


//        $this->views = $viewFactory;
//        $this->compose('*', InterviewQuestionObserver::class);
//        $this->compose('admin.quick_form', UserComposer::class);
//        $this->compose('admin.quick_refund', UserComposer::class);
    }

//    private function compose($views, string $viewComposer)
//    {
//        $this->app->singleton($viewComposer);
//        $this->views->composer($views, $viewComposer);
//    }
}
