<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FourthHero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('fourth-hero')
            ->schema([
                Section::make('Heading')
                ->schema([
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),

                    TextInput::make('sub_title')
                        ->label('Subtitle')
                        ->required(),
                ])
                ->columns(2),

            Section::make('Gallery')
                ->schema([
                    Repeater::make('collection')
                        ->label('Image Gallery')
                        ->schema([
                            FileUpload::make('gallery_image')
                                ->label('Gallery Image')
                                ->image()
                                ->required(),
                        ])
                        ->grid(4)
                        ->columnSpanFull(), 
                ])

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}


// 'gallery_image',
// 'title',
// 'sub_title',
// 'collection'
