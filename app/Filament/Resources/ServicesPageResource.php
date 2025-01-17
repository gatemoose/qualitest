<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicesPageResource\Pages;
use App\Filament\Resources\ServicesPageResource\RelationManagers;
use App\Models\ServicesPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServicesPageResource extends Resource
{
    protected static ?string $model = ServicesPage::class;
    protected static ?string $modelLabel = 'PÁG Serviço';
    protected static ?string $pluralModelLabel = 'PÁGS Serviços';

    protected static ?string $navigationGroup = 'Páginas';
    
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('blue_phrase')
                    ->required(),
                Forms\Components\Textarea::make('text1')
                    ->rows(3)
                    ->required(),
                Forms\Components\Textarea::make('text2')
                    ->rows(3)
                    ->required(),
                Forms\Components\Textarea::make('text3')
                    ->rows(3)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('blue_phrase')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
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
            'index' => Pages\ManageServicesPages::route('/'),
        ];
    }
}
