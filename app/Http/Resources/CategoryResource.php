<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'id' => $this->id,
            'title_ru' => $this->title_ru,
            'title_ro' => empty($this->title_ro) ? $this->title_ru : $this->title_ro,
            'title_en' => empty($this->title_en) ? $this->title_ru : $this->title_en,
            'desc_ru' => $this->desc_ru,
            'desc_ro' => empty($this->desc_ro) ? $this->desc_ru : $this->desc_ro,
            'desc_en' => empty($this->desc_en) ? $this->desc_ru : $this->desc_en,
            'preview' => env('APP_URL') . '/storage/' . $this->preview,
            'images' => ImageResource::collection($this->images),
        ];
    }
}
