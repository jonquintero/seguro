<?php

namespace App\Http\Controllers;

use App\Actions\UpsertQrGenerateAction;
use App\DataTransferObjects\QrGenerateData;
use App\Http\Requests\UpsertQrGenerateRequest;
use Illuminate\Http\Request;

class QrGenerateController extends Controller
{
    public function __construct(private readonly UpsertQrGenerateAction $upsertQrGenerateAction)
    {
    }

    public function create()
    {
        return view('qr.generate');
    }

    public function generate(UpsertQrGenerateRequest $request)
    {
        $response = $this->upsert($request);
        $name = $request->name;

        return view('qr.qr-image', compact('response', 'name'));
    }

    public function upsert(UpsertQrGenerateRequest $request)
    {
        $qrData = QrGenerateData::fromRequest($request);

        return $this->upsertQrGenerateAction->execute($qrData);

    }
}
