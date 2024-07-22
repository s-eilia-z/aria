<?php

namespace App\Repositories;

use App\Contracts\CategoryRepository;
use App\Models\Category;
use Prettus\Repository\Eloquent\BaseRepository;

class CategoryEloquentRepository extends BaseRepository implements CategoryRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return Category::class;
    }
}
