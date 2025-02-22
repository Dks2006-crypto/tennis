<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialResource\Pages;
use App\Filament\Resources\SocialResource\RelationManagers;
use App\Models\Social;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialResource extends Resource
{
    protected static ?string $model = Social::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function canCreate(): bool
    {
        if(Social::count() >= 1) {
            return false;
        }
        return true;
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('СоциалОчка')->schema([
                    TextInput::make('vk')
                        ->label('Ссылка на вк')
                        ->required()
                        ->url(),
                    TextInput::make('tg')
                        ->label('Ссылка на tg')
                        ->required()
                        ->url(),
                    TextInput::make('git')
                        ->label('Ссылка на git')
                        ->required()
                        ->url(),
                    TextInput::make('ok')
                        ->label('Ссылка на ok')
                        ->required()
                        ->url(),
                    TextInput::make('ins')
                        ->label('Ссылка на zov')
                        ->required()
                        ->url(),
                    TextInput::make('x')
                        ->label('Ссылка на x')
                        ->required()
                        ->url(),
                    TextInput::make('youtube')
                        ->label('Ссылка на youtube')
                        ->required()
                        ->url(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSocials::route('/'),
            'create' => Pages\CreateSocial::route('/create'),
            'edit' => Pages\EditSocial::route('/{record}/edit'),
        ];
    }
}
