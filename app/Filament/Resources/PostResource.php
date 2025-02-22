<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $modelLabel = 'Publicação';
    protected static ?string $pluralModelLabel = 'Publicações';

    protected static ?string $navigationGroup = 'Administrativo';

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Título'),
                Forms\Components\Textarea::make('description')->rows(3)
                    ->required()
                    ->label('Descrição'),
                Forms\Components\RichEditor::make('content')
                    ->fileAttachmentsDisk('public')
                    ->required()
                    ->label('Conteúdo da Postagem'),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required()
                    ->label('Imagem'),
                Forms\Components\TextInput::make('tag')
                    ->placeholder('Tag é uma palavra que descreve o assunto da postagem.')
                    ->required(),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->label('Cidade'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Título'),
                Tables\Columns\TextColumn::make('description')->words(5)
                    ->searchable()
                    ->label('Descrição'),
                Tables\Columns\TextColumn::make('content')->words(5)
                    ->searchable()
                    ->html()
                    ->label('Conteúdo'),
                Tables\Columns\ImageColumn::make('image')->circular(),
                Tables\Columns\TextColumn::make('tag')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('city')
                    ->label('Cidade')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Data de Criação')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->label('Última Atualização')
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
            'index' => Pages\ManagePosts::route('/'),
        ];
    }
}
