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
                Tables\Columns\TextColumn::make('url')->label('Título')
                ->url(fn (Document $url): string => asset('storage/' . $url->url))
                ->openUrlInNewTab(),
                Tables\Columns\TextColumn::make('expiration_date')
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
                Tables\Actions\DeleteAction::make(), // Baixar PDF pela tabela.
                // Tables\Actions\Action::make('download')
                //     ->label('Download')
                //     ->icon('heroicon-o-download')
                //     ->url(fn (Document $record): string => route('client.documents.download', $record))
                //     ->openUrlInNewTab(), // Optional: Open in a new tab
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
