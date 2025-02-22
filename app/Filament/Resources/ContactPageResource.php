<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactPageResource\Pages;
use App\Filament\Resources\ContactPageResource\RelationManagers;
use App\Models\ContactPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactPageResource extends Resource
{
    protected static ?string $model = ContactPage::class;
    protected static ?string $modelLabel = 'Contato';
    protected static ?string $pluralModelLabel = 'Contato';

    protected static ?string $navigationGroup = 'Páginas';

    protected static ?string $navigationIcon = 'heroicon-o-phone-arrow-down-left';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('address')
                    ->required()
                    ->label('Endereço'),
                Forms\Components\RichEditor::make('phone')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Número de Telefone'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Emails para Contato'),
                Forms\Components\TextInput::make('google_maps_embedding')
                    ->label('Link do Embedding do Google Maps')
                    ->placeholder('Obs.: Adicionar somente o conteúdo dentro de src do iframe.')
                    ->required(),
                Forms\Components\RichEditor::make('social_media')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'link',
                        'redo',
                        'undo'
                    ])->required()->label('Redes Sociais'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('address')
                    ->words(5)
                    ->label('Endereço')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->words(10)
                    ->label('Telefone')
                    ->html()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->words(10)
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('social_media')
                    ->words(10)
                    ->html()
                    ->label('Redes Sociais')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageContactPages::route('/'),
        ];
    }
}
