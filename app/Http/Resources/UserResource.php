<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
                'id'=>$this->id,
                'firstname'=>$this->firstname,
                'lastname'=>$this->lastname,
                'dob'=>$this->dob,
                'email '=>$this->email ,
                'userimage'=>$this->userimage,
                'address'=>$this->address,
                'freelance'=>$this->freelance,
                'about'=>$this->about
            ];
    }
}