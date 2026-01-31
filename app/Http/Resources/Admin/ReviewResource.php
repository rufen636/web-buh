<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'title' => $this->title,
            'description' => $this->description,
            'image' => [
                'small_uri' => $this->image ?
                    (
                        // Проверяем, содержит ли small_uri http:// или https://
                    str_starts_with($this->image->small_uri, 'http://') ||
                    str_starts_with($this->image->small_uri, 'https://')
                        ? $this->image->small_uri  // Если уже содержит http/https, возвращаем как есть
                        : request()->getScheme() . '://' . request()->getHost() .
                        Storage::url($this->image->small_uri)
                    )
                    : " ",
            ],
            'published' => (int)$this->published,
            'rates' => $this->rates
        ];
    }
}
