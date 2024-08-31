<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            
            'comment_text' => $this->comment_text,
            'rating' => $this->rating,
            'product_name' => $this->product->title,
            'user_name' => $this->user->name,
            'created_at' => $this->created_at,
          
            // Các thuộc tính khác nếu có
        ];
    }
}
