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
    protected static ?string $modelLabel = 'PÁG Sobre';
    protected static ?string $pluralModelLabel = 'PÁGS Sobre';

    protected static ?string $navigationGroup = 'Páginas';

    protected static ?string $navigationIcon = 'heroicon-o-at-symbol';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\RichEditor::make('mission')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required(),
                Forms\Components\RichEditor::make('values')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required(),
                Forms\Components\RichEditor::make('vision')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required(),
                Forms\Components\RichEditor::make('patricia')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required(),
                Forms\Components\RichEditor::make('additional_qualifications')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'bulletList',
                        'redo',
                        'undo'
                    ])->required(),
                Forms\Components\RichEditor::make('professional_experience')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'bulletList',
                        'redo',
                        'undo'
                    ])
                    ->required(),
                Forms\Components\RichEditor::make('history')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->columns([
                Tables\Columns\TextColumn::make('mission')->words(10)
                    ->html(),
                // Tables\Columns\TextColumn::make('values')->words(10)
                //     ->html()
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('vision')->words(10)
                //     ->html()
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('patricia')->words(10)
                //     ->html()
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('additional_qualifications')
                //     ->html()
                //     ->words(10)
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('professional_experience')
                //     ->html()
                //     ->words(10)
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('history')->words(10)
                //     ->html()
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ]);
            // ->bulkActions([
            //     Tables\Actions\BulkActionGroup::make([
            //         // Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            // ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAboutPages::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Disable the "Create" button
    }
}
