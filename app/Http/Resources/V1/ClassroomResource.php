<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

//importamos resources
use App\Http\Resources\V1\StudentResource;
use App\Http\Resources\V1\DegreeResource;
use App\Http\Resources\V1\SectionResource;
use App\Http\Resources\V1\LevelResource;
use App\Http\Resources\V1\TurnResource;

class ClassroomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ClassId' =>$this->id,
            'Student' => new StudentResource($this->students),
            'Degree' => new DegreeResource($this->degrees),
            'Section' => new SectionResource($this->sections),
            'Level' => new LevelResource($this->levels),
            'Turn' => new TurnResource($this->turns),
        ];
    }
}
