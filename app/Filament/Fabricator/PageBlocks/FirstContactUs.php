<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FirstContactUs extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('first-contact-us')
            ->schema([
                Section::make('Contact us')
                    ->description('')
                    ->schema([
            TextInput::make('heading')->required(),
            TextInput::make('subheading')->required(),
            FileUpload::make('background_image'),
                    ])
                    // ->columns(2),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
