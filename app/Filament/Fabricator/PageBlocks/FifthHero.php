<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\MarkdownEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FifthHero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('fifth-hero')
            ->schema([
                Section::make()
                ->schema([
                    TextInput::make('title'),
                    TextInput::make('sub_title'),
                ])
                ->columns(2),

            Section::make('Card Sections')
                ->schema([
                    Grid::make(2)
                        ->schema([
                            Section::make('Card 1')
                                ->schema([
                                    TextInput::make('first_card_title')
                                        ->label('First Card Title'),
                                    TextInput::make('first_card_sub_title')
                                        ->label('First Card Subtitle'),

                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('first_card_button_title')
                                                ->label('button title'),
                                            TextInput::make('first_card_link')
                                                ->url(),

                                            ]),

                                    Repeater::make('first_card_collection')
                                        ->schema([
                                            TextInput::make('first_title')
                                                ->label('Collection Title'),
                                        ])
                                        ->columns(1)
                                ])
                                ->collapsible(),

                            Section::make('Card 2')
                                ->description('This is the second card')
                                ->schema([
                                    TextInput::make('second_card_title')
                                        ->label('Second Card Title'),
                                    TextInput::make('second_card_sub_title')
                                        ->label('Second Card Subtitle'),

                                        Grid::make(2)
                                            ->schema([
                                                TextInput::make('second_card_button_title')
                                                ->label('button name'),
                                                TextInput::make('second_card_link')
                                                ->url(),

                                            ]),

                                    Repeater::make('second_card_collection')
                                        ->schema([
                                            TextInput::make('second_title')
                                                ->label('Collection Title'),
                                        ])
                                        ->columns(1)
                                ])
                                ->collapsible(),
                        ]),
                ]),

            Section::make('Frequently Asked Questions')
                ->description('Manage frequently asked questions')
                ->schema([
                    TextInput::make('faq_main_title')
                        ->label('FAQ Main Title'),
                    Repeater::make('faq_collection')
                        ->schema([
                            TextInput::make('title')
                                ->label('Question'),
                           Textarea::make('content')
                                ->label('Answer'),
                        ])
                        ->columnSpanFull(),
                ])
                ->collapsible()


    ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}



// 'second_card_button_title',
// 'first_card_button_title',
// 'second_card_link',


// 'title',
// 'sub_title',
// 'first_card_title',
// 'first_title',
// 'first_card_sub_title',
// 'first_card_collection',
// 'second_title',
// 'first_card_link',
// 'second_card_sub_title',
// 'second_card_collection',
// 'faq_main_title',
// 'faq_collection',
// 'title',
// 'content',
