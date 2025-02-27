<?php

namespace App\Filament\Fabricator\PageBlocks;


use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class SecondContactUs extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('second-contact-us')
            ->schema([
               Section::make('Heading')
                ->description('')
                ->schema([
                    TextInput::make('contact_title')->required(),
                    Textarea::make('contact_description')->required(),
                ])
                // ->columns(2),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
