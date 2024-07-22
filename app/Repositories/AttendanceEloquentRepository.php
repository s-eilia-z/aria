<?php

namespace App\Repositories;

use App\Contracts\AttendanceRepository;
use App\Models\Attendance;
use Prettus\Repository\Eloquent\BaseRepository;

class AttendanceEloquentRepository extends BaseRepository implements AttendanceRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return Attendance::class;
    }
}
