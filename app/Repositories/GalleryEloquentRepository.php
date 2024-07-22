<?php

namespace App\Repositories;

use App\Contracts\GalleryRepository;
use App\Models\Gallery;
use Prettus\Repository\Eloquent\BaseRepository;

class GalleryEloquentRepository extends BaseRepository implements GalleryRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return Gallery::class;
    }
}
