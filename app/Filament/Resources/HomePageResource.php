<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomePageResource\Pages;
use App\Filament\Resources\HomePageResource\RelationManagers;
use App\Models\HomePage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomePageResource extends Resource
{
    protected static ?string $model = HomePage::class;
    protected static ?string $modelLabel = 'Home';
    protected static ?string $pluralModelLabel = 'Home';

    protected static ?string $navigationGroup = 'Páginas';

    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\RichEditor::make('initial_description')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Descrição Inicial'),
                Forms\Components\RichEditor::make('why_qualitest')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Por que a Qualitest?'),
                Forms\Components\RichEditor::make('our_values')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Nossos Valores'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->columns([
                Tables\Columns\TextColumn::make('initial_description')
                    ->words(10)->html()->label('Descrição Inicial'),
                Tables\Columns\TextColumn::make('why_qualitest')
                    ->words(10)
                    ->searchable()
                    ->label('Por que nós?'),
                Tables\Columns\TextColumn::make('our_values')
                    ->words(10)
                    ->searchable()
                    ->label('Nossos Valores')
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
            'index' => Pages\ManageHomePages::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Disable the "Create" button
    }
}
