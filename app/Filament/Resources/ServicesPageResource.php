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
    protected static ?string $modelLabel = 'Serviço';
    protected static ?string $pluralModelLabel = 'Serviços';

    protected static ?string $navigationGroup = 'Páginas';
    
    protected static ?string $navigationIcon = 'heroicon-o-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('blue_phrase')
                    ->label('Frase Azul')
                    ->placeholder('Esta frase é mostrada antes dos textos, acima do título.')
                    ->required(),
                Forms\Components\RichEditor::make('text1')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Texto 1'),
                Forms\Components\RichEditor::make('text2')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Texto 2'),
                Forms\Components\RichEditor::make('text3')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Texto 3'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->columns([
                Tables\Columns\TextColumn::make('blue_phrase')
                    ->words(5)
                    ->label('Frase Azul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('text1')
                    ->searchable()
                    ->label('Texto 1')
                    ->words(10)
                    ->toggleable(isToggledHiddenByDefault: false),
                Tables\Columns\TextColumn::make('text2')
                    ->searchable()
                    ->label('Texto 2')
                    ->words(10)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('text3')
                    ->searchable()
                    ->label('Texto 1')
                    ->words(10)
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageServicesPages::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Disable the "Create" button
    }
}
