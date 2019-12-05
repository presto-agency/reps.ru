<?php


namespace App\Http\ViewComposers\RightSide;

use App\Models\Replay;
use Illuminate\View\View;


class LastReplayComposer
{

    /**
     * @param  View  $view
     */
    public function compose(View $view)
    {
        $view->with('lastReplaysTitleRight', 'Пользовательские реплеи');

        $view->with('lastReplaysRight',
            self::getCacheLastReplay('last5ReplaysRight'));
    }

    /**
     * @return mixed
     */
    private static function getLastReplay()
    {
        return Replay::withCount('comments')
            ->where('user_replay',Replay::REPLAY_USER)
            ->where('approved', 1)
            ->orderByDesc('id')
            ->take(5)
            ->get();
    }

    /**
     * @param $cache_name
     *
     * @return mixed
     */
    public static function getCacheLastReplay($cache_name)
    {
        if (\Cache::has($cache_name) && ! \Cache::get($cache_name)->isEmpty()) {
            $data_cache = \Cache::get($cache_name);
        } else {
            $data_cache = \Cache::remember($cache_name, 300,
                function () {
                    return self::getLastReplay();
                });
        }

        return $data_cache;
    }

}
