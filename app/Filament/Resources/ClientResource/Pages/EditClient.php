<?php

namespace App\Filament\Resources\ClientResource\Pages;

use Filament\Actions;
use Illuminate\Support\Str;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ClientResource;

class EditClient extends EditRecord
{
    protected static string $resource = ClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('reset_password', 'Nova Senha') // Fazer 1 botão que altera a senha.
            ->icon('heroicon-o-key')
            ->requiresConfirmation()
            ->color('primary')
            ->action(function () {
                $client = $this->record;

                $newPassword = Str::password(8);

                $client->password = bcrypt($newPassword);
                $client->save();

                // Mail::to($user->email)->send(new NewPasswordMail($newPassword));

                Notification::make()
                    ->title('Senha redefinida com sucesso.')
                    ->success()
                    ->send();

                dd([
                    'NEW PASSWORD' => $newPassword,
                    'NEW PASSWORD (HASHED)' => $client->password,
                ]);
            }),

            Actions\DeleteAction::make()->icon('heroicon-o-trash'),
        ];

        // $password = Str::password(8);
    }
}
