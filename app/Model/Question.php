<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title','slug','body','category_id','user_id'
    ];
    // キー名のカスタマイズ
    // https://readouble.com/laravel/5.8/ja/routing.html
    // ルーティングにてスラッグでの記述を実現（idの代わりにslugをキーに利用している）
    // https://qiita.com/netfish/items/4bd83755143bb0d298cb
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function replies()
    {
        return $this->hasMany('App\Model\Reply');
    }

    public function category()
    {
        return $this->belongsTo('App\Model\Category');
    }

    public function getPathAttribute()
    {
        return asset("api/question/$this->slug");
    }
}
