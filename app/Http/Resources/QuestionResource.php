<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'path' => $this->path,
            'body' => $this->body,
            'created_at' => $this->created_at->diffForHumans(),// "XX days ago" のような表記で出力可能
            'user' => $this->user->name,
        ];
    }
}
