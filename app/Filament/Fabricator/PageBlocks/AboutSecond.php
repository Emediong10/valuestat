<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
// use Filament\Infolists\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class AboutSecond extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('about-second')
            ->schema([
                Section::make('Heading')
                    ->description('')
                    ->schema([
             TextInput::make('main_heading'),
                TextInput::make('sub_heading'),

                Repeater::make('features')
                    ->schema([
                FileUpload::make('image'),
                TextInput::make('title'),
                Textarea::make('description'),
                    ]),
                    ])

            ]);
    }
    // 'second_card_button_title',
// 'first_card_button_title',
// 'second_card_link',

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
// @props([
//     'main_heading',
//     'sub_heading',
//     'features',
//     'feature',
//     'image',
//     'title',
//     'description',
// ])
