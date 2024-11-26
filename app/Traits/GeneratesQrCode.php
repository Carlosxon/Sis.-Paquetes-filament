<?php

namespace App\Traits;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

trait GeneratesQrCode
{
    public function generateQrCode($data, $path)
    {
        // Genera y guarda el código QR como un archivo PNG
        QrCode::format('png')->size(300)->generate($data, $path);
    }
}
