<?php

namespace App\Actions;

use App\DataTransferObjects\QrGenerateData;
use App\Helpers\QrImageHelper;
use App\Services\QrService;
use Symfony\Component\HttpFoundation\Response;

class UpsertQrGenerateAction
{
    public function execute(QrGenerateData $qrGenerateData): ?string
    {
        $client = new QrService();

        $response = $client->getQr($qrGenerateData);

        if($response->status() != Response::HTTP_OK){
            return null;
        }

        $qrImage = new QrImageHelper();
        return $qrImage->generateQrImage($response->json('data.codigo'));



    }
}
