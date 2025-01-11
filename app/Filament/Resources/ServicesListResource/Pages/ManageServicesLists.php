<?php

namespace App\Filament\Resources\ServicesListResource\Pages;

use App\Filament\Resources\ServicesListResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageServicesLists extends ManageRecords
{
    protected static string $resource = ServicesListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
