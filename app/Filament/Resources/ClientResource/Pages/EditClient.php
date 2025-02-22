<?php

namespace App\Filament\Resources\ClientResource\Pages;

use Filament\Actions;
use App\Mail\SendPassword;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ClientResource;

class EditClient extends EditRecord
{
    protected static string $resource = ClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('Redefinir Senha')
            ->icon('heroicon-o-key')
            ->requiresConfirmation()
            ->color('primary')
            ->action(function () {
                $client = $this->record;

                $newPassword = Str::password(8);

                $client->password = bcrypt($newPassword);
                $client->save();

                Notification::make()
                    ->title('Senha redefinida com sucesso.')
                    ->success()
                    ->send();
                    
                Mail::to($client->email)->send(new SendPassword($newPassword));
            }),
            Actions\DeleteAction::make()->icon('heroicon-o-trash'),
        ];
    }
}
