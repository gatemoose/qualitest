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
    protected static ?string $modelLabel = 'Sobre';
    protected static ?string $pluralModelLabel = 'Sobre';

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
                    ])->required()->label('Missão'),
                Forms\Components\RichEditor::make('values')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Valores'),
                Forms\Components\RichEditor::make('vision')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Visão'),
                Forms\Components\RichEditor::make('patricia')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('Sobre Patrícia'),
                Forms\Components\RichEditor::make('additional_qualifications')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'bulletList',
                        'redo',
                        'undo'
                    ])->required()->label('Qualificação Complementar'),
                Forms\Components\RichEditor::make('professional_experience')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'bulletList',
                        'redo',
                        'undo'
                    ])->required()->label('Experiência Profissional'),
                Forms\Components\RichEditor::make('history')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'strike',
                        'underline',
                        'redo',
                        'undo'
                    ])->required()->label('História'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->paginated(false)
            ->columns([
                Tables\Columns\TextColumn::make('patricia')->words(10)->html()->label('Sobre Patrícia'),
                Tables\Columns\TextColumn::make('professional_experience')->words(10)->html()->label('Experiência Profissional'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAboutPages::route('/'),
        ];
    }

    public static function canCreate(): bool
    {
        return false; // Remove o botão de criar.
    }
}
