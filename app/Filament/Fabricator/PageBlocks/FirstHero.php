<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FirstHero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('first-hero')
            ->schema([
                Section::make('Hero Block Section')
                ->schema([

                    Card::make()
                        ->schema([
                            TextInput::make('title'),
                            TextInput::make('sub_title'),
                            Select::make('display_text_size')
                                ->options([
                                    '1' => 'Bigger Text',
                                    '3' => 'Medium Text',
                                    '7' => 'Small Text',
                                ]),

                            Grid::make(2)
                                ->schema([

                                    TextInput::make('play_store')->label('Download Title'),
                                    TextInput::make('play_store_link')->label('Download Link'),
                                    TextInput::make('apple_store')->label('Documentation Title'),
                                    FileUpload::make('apple_store_link')->label('Documentation'),
                    ]),
                        ])->columnSpan(1),

                    Card::make()
                        ->schema([
                            FileUpload::make('image1'),
                            FileUpload::make('image2'),
                        ])->columnSpan(1),
                ])
                ->columns(2)

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

// 'title',
// 'background_image',
// 'display_text_size',
// 'sub_title',
// 'apple_store_link',
// 'apple_store',
// 'play_store_link',
// 'play_store',
// 'image1',
// 'image2',
