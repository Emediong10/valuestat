<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class SecondHero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('second-hero')
            ->schema([
                Section::make('Main Section')
                ->schema([

                    TextInput::make('main_title')
                        ->label('Main Title')
                        ->required(),

                    TextInput::make('sub_main_title')
                        ->label('Sub Main Title')
                        ->required(),


                    Repeater::make('items')
                        ->label('Content Items')
                        ->schema([
                            Section::make('Item Details')
                                ->description('Ensure you add exactly four items for consistency.')
                                ->schema([
                                    TextInput::make('title')
                                        ->label('Title')
                                        ->required(),

                                    Textarea::make('sub_title')
                                        ->label('Subtitle')
                                        ->required(),

                                    FileUpload::make('image')
                                        ->label('Image')
                                        ->required(),
                                ]),
                        ])
                        ->minItems(4)
                        ->maxItems(4),
                ])

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
