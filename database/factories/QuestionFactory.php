<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Model\Category;
use App\User;

$factory->define(App\Model\Question::class, function (Faker $faker) {
    $title = $faker->sentence;
    
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        // https://readouble.com/laravel/5.8/ja/helpers.html#method-str-slug
        'body' => $faker->text,
        'category_id'=> function(){
            return Category::all()->random();
        },
        'user_id'=> function(){
            return User::all()->random();
        }
        
        //
    ];
});
