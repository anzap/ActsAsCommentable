<?php


trait ActsAsCommentableTrait
{
    public function comments()
    {
        return $this->morphMany('Comment', 'commentable');
    }
} 