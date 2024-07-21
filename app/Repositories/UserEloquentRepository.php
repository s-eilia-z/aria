<?php

namespace App\Repositories;

use App\Contracts\UserRepository;
use App\Models\User;
use Prettus\Repository\Eloquent\BaseRepository;

class UserEloquentRepository extends BaseRepository implements UserRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return User::class;
    }
}
