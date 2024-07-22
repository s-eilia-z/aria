<?php

namespace App\Repositories;

use App\Contracts\MediaRepository;
use App\Models\Media;
use Prettus\Repository\Eloquent\BaseRepository;

class MediaEloquentRepository extends BaseRepository implements MediaRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return Media::class;
    }
}
