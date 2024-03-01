<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CareerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
    return [
      "id" => $this->id,
      "title" => $this->title,
      "salary" => [
          "low" => $this->salary_low,
          "medium" => $this->salary_medium,
          "high" => $this->salary_high
      ],
      //'qualifications' => QualificationResource::collection($this->whenLoaded('qualifications')),
    ];
  }
}
