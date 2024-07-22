<?php

namespace App\Repositories;

use App\Contracts\ProgramRepository;
use App\Models\Program;
use Prettus\Repository\Eloquent\BaseRepository;

class ProgramEloquentRepository extends BaseRepository implements ProgramRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return Program::class;
    }
}
