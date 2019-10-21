<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class Advert
 *
 * @package Petstore30
 *
 * @author  Donii Sergii <doniysa@gmail.com>
 * @OA\Schema(
 *     title="Advert model",
 *     description="advert model",
 * )
 */

class AdverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    /**
     * @OA\Property(
     *     title="ID",
     *     description="advert ID",
     * )
     *
     * @var integer
     */
    private $id;
    /**
     * @OA\Property(
     *     title="title",
     *     description="advert title",
     * )
     *
     * @var string
     */
    private $title;

    /**
     * @OA\Property(
     *     title="desc",
     *     description="advert description",
     * )
     *
     * @var string
     */
    private $desc;

    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
