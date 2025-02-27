<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class SeventhHero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('seventh-hero')
            ->schema([

                Section::make('Testimonials')
                    ->description('Testimonials')
                    ->schema([
                    Repeater::make('testimonials')
                        ->schema([
                    FileUpload::make('image')
                    ->label('Client image')
                    ->directory('testimonials')
                    ->image()
                    ->required(),

                Textarea::make('content')
                    ->label('Testimonial Text')
                    ->required(),

                TextInput::make('name')
                    ->label('Client Name')
                    ->required(),

                        ]),


                    ])
                    // ->columns(2),


                //     'testimonials',
                //     'image',
                //    ' content',
                //    'name'
                // TextInput::make('company')
                //     ->label('Company Name')
                //     ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
