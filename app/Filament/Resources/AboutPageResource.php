<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutPageResource\Pages;
use App\Filament\Resources\AboutPageResource\RelationManagers;
use App\Models\AboutPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutPageResource extends Resource
{
    protected static ?string $model = AboutPage::class;

    protected static ?string $navigationIcon = 'heroicon-o-at-symbol';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('mission')
                    ->required(),
                Forms\Components\TextInput::make('values')
                    ->required(),
                Forms\Components\TextInput::make('vision')
                    ->required(),
                Forms\Components\TextInput::make('patricia')
                    ->required(),
                Forms\Components\TextInput::make('additional_qualifications')
                    ->required(),
                Forms\Components\TextInput::make('professional_experience')
                    ->required(),
                Forms\Components\TextInput::make('history')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mission')
                    ->searchable(),
                Tables\Columns\TextColumn::make('values')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vision')
                    ->searchable(),
                Tables\Columns\TextColumn::make('patricia')
                    ->searchable(),
                Tables\Columns\TextColumn::make('additional_qualifications')
                    ->searchable(),
                Tables\Columns\TextColumn::make('professional_experience')
                    ->searchable(),
                Tables\Columns\TextColumn::make('history')
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
            'index' => Pages\ManageAboutPages::route('/'),
        ];
    }
}
