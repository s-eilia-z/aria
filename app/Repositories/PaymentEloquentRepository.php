<?php

namespace App\Repositories;

use App\Contracts\PaymentRepository;
use App\Models\Payment;
use Prettus\Repository\Eloquent\BaseRepository;

class PaymentEloquentRepository extends BaseRepository implements PaymentRepository
{

    /**
     * @inheritDoc
     */
    public function model(): string
    {
        return Payment::class;
    }
}
