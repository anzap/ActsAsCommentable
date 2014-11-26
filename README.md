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

Once this operation completes, the final step is to add the service provider and to run a migration. Open app/config/app.php, and add a new item to the providers array.

    'Slynova\ActsAsCommentable\ActsAsCommentableServiceProvider'

Now you need to run migration

    php artisan migrate --bench="slynova/acts-as-commentable"

Usage
=====

Set in your model that it's "commentable".

      <?php
      
      use Slynova\ActsAsCommentable\ActsAsCommentableTrait;
      
      class Post extends Eloquent
      {
        
        use ActsAsCommentableTrait;
        
      }
      
After that you have access to `comments` method.

    $post = Post::first();
    
    $comment = new \Slynova\ActsAsCommentable\Comment;
    $comment->body = 'My first comment!';
    
    $post->comments()->save($comment);
    
    dd(Post::first()->comments);
    
Credits
=======

* [jackdempsey](https://github.com/jackdempsey) - This plugin is heavily influenced/liberally borrowed/stolen from [acts_as_commentable](https://github.com/jackdempsey/acts_as_commentable)




