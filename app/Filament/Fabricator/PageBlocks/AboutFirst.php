<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class AboutFirst extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('about-first')
            ->schema([
              TextInput::make('title'),
              TextInput::make('description'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}