<?php

namespace App\Http\Controllers;

use App\Actions\UpsertQrGenerateAction;
use App\DataTransferObjects\QrGenerateData;
use App\Http\Requests\UpsertQrGenerateRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class QrGenerateController extends Controller
{
    public function __construct(private readonly UpsertQrGenerateAction $upsertQrGenerateAction)
    {
    }


    public function generate(UpsertQrGenerateRequest $request)
    {
        $response = $this->upsert($request);
        $name = $request->name;

        return view('qr.qr-image', compact('response', 'name'));
    }

    /**
     * @param UpsertQrGenerateRequest $request
     * @return string|null
     */
    public function upsert(UpsertQrGenerateRequest $request)
    {
        $qrData = QrGenerateData::fromRequest($request);

        return $this->upsertQrGenerateAction->execute($qrData);

    }
}
