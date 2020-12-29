<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'subject' => $this->subject->name,
            'author' => $this->user->name,
            'slug' => $this->slug,
            'body' => $this->body,
            'published' => $this->created_at->diffForHumans()
        ];
        // return parent::toArray($request);
    }
}
