<?php

namespace App\Filament\Resources\StativResource\Pages;

use App\Filament\Resources\StativResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStativ extends EditRecord
{
    protected static string $resource = StativResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
