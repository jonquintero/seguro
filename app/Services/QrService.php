<?php

namespace App\Services;

use App\DataTransferObjects\QrGenerateData;
use Illuminate\Support\Facades\Http;

class QrService
{
    public function getQr(QrGenerateData $qrGenerateData): \GuzzleHttp\Promise\PromiseInterface|\Illuminate\Http\Client\Response
    {

        return Http::withToken( config('services.qr.key'))
            ->post(config('services.qr.url').config('services.qr.code'), [
                'cantidad' => $qrGenerateData->quantity,
                'numeroautorizacion' => config('services.qr.authorization'),
            ]);
    }
}
