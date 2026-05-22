<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FrontendSectionResource\Pages;
use App\Filament\Resources\FrontendSectionResource\RelationManagers;
use App\Models\FrontendSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FrontendSectionResource extends Resource
{
    protected static ?string $model = FrontendSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('area_image')
                    ->image(),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('type')
                    ->options(['latest' => 'Latest', 'popular' => 'Popular', 'featured' => 'Featured', 'category' => 'Category'])
                    ->reactive()
                    ->afterStateUpdated(function ($state, Get $get, Set $set) {
                        if ($get('type') !== 'category') {
                            $set('category_ids', null);
                        }
                    })
                    ->required(),
                // Forms\Components\TextInput::make('trending_days')
                //     ->numeric()
                //     ->default(null),
                Forms\Components\Select::make('category_ids')
                    ->multiple()
                    ->label('Categories')
                    ->options(
                        \App\Models\Category::pluck('term', 'id')
                    )
                    // ->disabled(fn(Get $get) => $get('type') != 'category')
                    ->searchable()
                    ->preload()
                    ->maxItems(2)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('post_limit')
                    ->required()
                    ->numeric()
                    ->default(6),
                Forms\Components\Toggle::make('is_active')
                    ->label('Active')
                    ->inline(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('area_image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type'),
                // Tables\Columns\TextColumn::make('trending_days')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('post_limit')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
                Tables\Actions\ViewAction::make(),
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
    public static function shouldRegisterNavigation(): bool
    {
        return false;
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFrontendSections::route('/'),
            'create' => Pages\CreateFrontendSection::route('/create'),
            'view' => Pages\ViewFrontendSection::route('/{record}'),
            'edit' => Pages\EditFrontendSection::route('/{record}/edit'),
        ];
    }
}
