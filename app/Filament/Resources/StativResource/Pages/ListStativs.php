<?php

namespace App\Filament\Resources\StativResource\Pages;

use App\Filament\Resources\StativResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStativs extends ListRecords
{
    protected static string $resource = StativResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
