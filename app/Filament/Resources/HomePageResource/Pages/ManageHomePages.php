<?php

namespace App\Filament\Resources\HomePageResource\Pages;

use App\Filament\Resources\HomePageResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHomePages extends ManageRecords
{
    protected static string $resource = HomePageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
