<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CareerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
      //"qualifications" => QualificationResource::collection($this->qualifications),
      //'qualifications' => QualificationResource::collection($this->whenLoaded('qualifications')),
    ];
  }
}
