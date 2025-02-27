<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ThirdHero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('third-hero')
            ->schema([

         Section::make('Heading')
                ->schema([

        FileUpload::make('background_image')
            ->label('Background Image'),


        Select::make('image_position')
            ->label('Image Position')
            ->options([
                'col-md-6 order-md-1' => 'Left',
                'col-md-6 order-md-2' => 'Right',
            ])
            ->live()
            // ->default('col-md-6 order-md-1'),
    ]),

Section::make('Text Section')
    ->description('If you select the image on the left, choose "Right" for the text and vice versa.')
    ->schema([

        Select::make('text_position')
            ->label('Text Position')
            ->options([
                'col-md-6 bg-color dark order-md-1' => 'Left',
                'col-md-6 bg-color dark order-md-2' => 'Right',
            ])
            ->reactive()
            ->afterStateUpdated(fn ($state, callable $set) =>
                $set('text_position', $state === 'col-md-6 order-md-1'
                    ? 'col-md-6 bg-color dark order-md-2'
                    : 'col-md-6 bg-color dark order-md-1')
            ),


        Repeater::make('collection')
            ->schema([
                Section::make('Content')
                    ->schema([
                        TextInput::make('title')
                            ->label('Text Content')
                            ->placeholder('Enter text here'),
                            Textarea::make('sub_title'),
                    ])

            ]),
    ])

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}

// 'background_image',
// 'title',
// 'collection',
// 'sub_title'

// 'Image_position_right',
// 'text_position_left',

// col-md-6 bg-color dark order-md-1 ->eftl

// -> right
