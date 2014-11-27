<?php

class Comment extends Eloquent
{
    protected $fillable = ['title', 'body', 'subject'];

    public function hasChildren()
    {
        return empty($this->parent_id);
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function commentable()
    {
        return $this->morphTo();
    }
    
}