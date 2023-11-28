<?php

namespace App\Helpers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;


class QrImageHelper
{
    public function generateQrImage(string $data)
    {
        return QrCode::size(200)->generate($data);

    }
}
