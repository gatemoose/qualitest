<?php

namespace App\Filament\Resources\ClientResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Models\Document;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\ViewColumn;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;


class DocumentsRelationManager extends RelationManager
{
    protected static string $relationship = 'documents';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Título')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('url')
                    ->label('Arquivo')
                    ->disk('local')
                    // ->visibility('private')
                    // ->multiple() // Alterar o $casts do Model para Array.
                    ->directory('documents')
                    // ->preserveFilenames()
                    ->required(),
                Forms\Components\DatePicker::make('expiration_date')
                    ->label('Data de Expiração')
                    ->minDate(now())
                    ->required(),
                // Forms\Components\Select::make('client_id')
                //     ->relationship('clients', 'name')
                //     // ->searchable()
                //     ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Título'),
                Tables\Columns\TextColumn::make('url')->label('Documento')
                ->url(fn (Document $url): string => asset('storage/' . $url->url))
                ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('expiration_date')
                    ->label('Data de Expiração')
                    ->dateTime('d/m/Y'),
                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                // Baixar pdf.
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
