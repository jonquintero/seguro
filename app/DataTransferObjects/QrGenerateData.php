<?php

namespace App\DataTransferObjects;

use App\Http\Requests\UpsertQrGenerateRequest;

class QrGenerateData
{
    public function __construct(
        public readonly string $name,
        public readonly int $quantity,
        public readonly int $phone,

    ) {
    }

    public static function fromRequest(UpsertQrGenerateRequest $request): self
    {
        return new static(
            $request->name,
            $request->quantity,
            $request->phone,

        );
    }
}
