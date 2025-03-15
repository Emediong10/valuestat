<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class HeroWhyChooseUs extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero-why-choose-us')
            ->schema([
                Section::make('Feature Section Settings')
                ->schema([
                    TextInput::make('title')->required(),
                    TextInput::make('subtitle')->required(),
                    Textarea::make('description')->required(),
                    Repeater::make('features')
                        ->schema([
                            Card::make()
                                ->schema([
                                    TextInput::make('content_title')->required(),
                                    Textarea::make('content_description')->required(),
                                    Grid::make(2)
                                        ->schema([
                                            Select::make('icon')
                                                ->label('Choose an Icon')
                                                ->options([
                                                    'icon-line2-pointer' => 'Pointer',
                                                    'icon-line2-credit-card' => 'Credit Card',
                                                    'icon-line2-shield' => 'Shield',
                                                    'icon-line2-notebook' => 'Notebook',
                                                    // 'icon-line2-phone' => 'Phone',
                                                    'icon-line2-basket' => 'Shopping Basket',
                                                    'icon-line2-globe' => 'Globe',
                                                    'icon-line2-user' => 'User',
                                                    'icon-line2-settings' => 'Settings',
                                                    'icon-line2-screen-desktop text-primary' => 'Desktop ',
                                                    'icon-line2-bulb text-warning' => 'Lighting Bulb',
                                                    'icon-line2-support text-danger' => 'Support',
                                                    'icon-line2-user text-success' => 'User',
                                                    'icon-line2-graph text-info' => 'Graph',
                                                ])
                                                ->required(),
                                            Select::make('color')
                                                ->label('Icon Color')
                                                ->options([
                                                    'primary' => 'Blue',
                                                    'danger' => 'Red',
                                                    'warning' => 'Yellow',
                                                    'info' => 'Cyan',
                                                    'success' => 'Green',
                                                ])
                                                ->required(),
                                        ]),
                                ])
                        ])
                ])
                                    ]);

    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}