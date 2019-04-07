<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;

class LikeController extends Controller
{
     public function likeIt(Reply $reply)
     {
            $reply->like()->create(
                [
                    'user_id' => '1'
                    // 'user_id' => auth()->id,
                ]
            );
     }     
     public function unLikeIt(Reply $reply)
     {
            // 'user_id' => auth()->id,
            $reply->like()
            // ->where('user_id',auth()->id)->first()->delete();
            ->where('user_id',1)->first()->delete();

     }
}
