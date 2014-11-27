ActsAsCommentable
=================

Provides a single Comment model that can be attached to any model(s) within your app for Laravel 4. It creates a Comment model and handles the plumbing between that model and any models that you declare to be commentable models.
Inspired by [jackdempsey/acts_as_commentable](https://github.com/jackdempsey/acts_as_commentable) for Rails.

Install
=======

Edit your project's composer.json file to require `slynova/acts-as-commentable`.

    "require": {
      "slynova/acts-as-commentable": "dev-master"
    }

Next, update Composer from the Terminal:

    composer update

Once this operation completes, the final step is to run a migration.

    php artisan migrate --package="slynova/acts-as-commentable"

Usage
=====

Set in your model that it's "commentable".

      <?php
      
      class Post extends Eloquent
      {
        
        use ActsAsCommentableTrait;
        
      }
      
After that you have access to `comments` method.

    $post = Post::first();
    
    $comment = new Comment;
    $comment->body = 'My first comment!';
    
    $post->comments()->save($comment);
    
    dd(Post::first()->comments);
    
Credits
=======

* [jackdempsey](https://github.com/jackdempsey) - This plugin is heavily influenced/liberally borrowed/stolen from [acts_as_commentable](https://github.com/jackdempsey/acts_as_commentable)




