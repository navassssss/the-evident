<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('term')
                    ->label('Name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true) // Trigger only on blur
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('scheme', Str::slug($state));
                    }),

                TextInput::make('scheme')
                    ->label('Slug')
                    ->required()
                    ->readOnly()
                    ->maxLength(255),
                    Forms\Components\Select::make('section_id')
    ->label('Section')
    ->relationship('section', 'name')
    ->required()
    ->searchable()
    ->preload()
    ->createOptionForm([
        Forms\Components\TextInput::make('name')
            ->label('Section Name')
            ->required()
            ->live(onBlur: true)
            ->afterStateUpdated(fn ($state, callable $set) => 
                $set('slug', \Str::slug($state))
            ),

        Forms\Components\TextInput::make('slug')
            ->label('Slug')
            ->required()
    ])

                // Forms\Components\TextInput::make('label')
                //     ->maxLength(255)
                //     ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('term')
                    ->label('Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('scheme')
                    ->label('Slug')
                    ->formatStateUsing(fn(string $state) => '/' . $state)
                    ->searchable(),
                Tables\Columns\TextColumn::make('label')
                    ->searchable()
                    ->hidden(),
                TextColumn::make('posts_count')
                    ->label('Posts')
                    ->counts('posts') // Automatically counts related posts
                    ->sortable()
                    ->alignCenter(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
