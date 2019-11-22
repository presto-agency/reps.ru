<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ForumTopic extends Model
{

    protected $fillable
        = [
            'title', 'forum_section_id', 'user_id', 'reviews', 'rating',
            'preview_content', 'preview_img', 'content', 'comments_count',
            'news', 'start_on',
        ];

    public function forumSection()
    {
        return $this->belongsTo(ForumSection::class, 'forum_section_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the topic comments.
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    /**
     * @return HasMany
     */
    public function positive()
    {
        return $this->hasMany('App\Models\UserReputation', 'object_id')
            ->where('relation', UserReputation::RELATION_FORUM_TOPIC)
            ->where('rating', 1);
    }

    /**
     * @return HasMany
     */
    public function negative()
    {
        return $this->hasMany('App\Models\UserReputation', 'object_id')
            ->where('relation', UserReputation::RELATION_FORUM_TOPIC)
            ->where('rating', '-1');
    }

}
