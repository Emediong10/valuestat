<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Executive;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use App\Filament\Resources\ExecutiveResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ExecutiveResource\RelationManagers;

class ExecutiveResource extends Resource
{
    protected static ?string $model = Executive::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Executives')
                    ->schema([
                        TextInput::make('name')
                        ->required()
                        ->afterStateUpdated(function (Get $get, Set $set, $state) {
                            $set('slug', Str::slug($state));
                         })
                         ->minLength(2)
                         ->maxLength(150)
                        ->debounce('500ms')
                        ->label('Executive name'),
                        TextInput::make('slug')
                        ->required(),
                        TextInput::make('email')
                        ->label('Email (Optional)'),

                        TextInput::make('position')
                        ->required(),
                        ])->columns(2),

                        Section::make('Heading')
                        ->description('')
                        ->schema([
                            Grid::make(2)
                            ->schema([
                                Repeater::make('social_media')
                                    ->label('Social Media Links')
                                    ->schema([
                                        Grid::make(2)
                                            ->schema([
                                                Select::make('platform')
                                                    ->label('Select Social Media')
                                                    ->options([
                                                        'facebook' => 'Facebook',
                                                        'twitter' => 'Twitter',
                                                        'linkedin' => 'LinkedIn',
                                                        'instagram' => 'Instagram',
                                                    ])
                                                    ->required(),

                                                TextInput::make('link')
                                                    ->label('Social Media Link')
                                                    ->placeholder('Enter the profile link')
                                                    ->url()
                                                    ->required(),
                                            ]),
                                    ])
                                    ->columnSpanFull()
                                    ->collapsible()
                                    ->reorderable()
                                    ->addActionLabel('Add Social Media'),
                            ]),
                        ]),


                        Section::make('About the Executive')
                        ->schema([
                            FileUpload::make('image')
                            ->image()
                            ->multiple()
                            ->directory('executives')
                            ->columnSpanFull(),
                            RichEditor::make('biography')
                                ->required()
                                ->columnSpanFull(),
                            Toggle::make('active')
                                ->label('Check the box to make the Executive active'),
                        ]),









                        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('position')->searchable()->sortable(),
                TextColumn::make('created_at')->date()->searchable()->sortable(),
                TextColumn::make('updated_at')->date()->searchable()->sortable(),
                BooleanColumn::make('active'),

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
            'index' => Pages\ListExecutives::route('/'),
            'create' => Pages\CreateExecutive::route('/create'),
            'edit' => Pages\EditExecutive::route('/{record}/edit'),
        ];
    }
}
