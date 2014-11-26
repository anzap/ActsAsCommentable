<?php namespace Slynova\ActsAsCommentable;


trait ActsAsCommentableTrait
{
    public function comments()
    {
        return $this->morphMany('Slynova\ActsAsCommentable\Comment', 'commentable');
    }
} 