<?php

namespace App\Repositories;

use App\Models\Photo_details;
use App\Repositories\BaseRepository;

class Photo_detailsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'gps_location',
        'status',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Photo_details::class;
    }
}
