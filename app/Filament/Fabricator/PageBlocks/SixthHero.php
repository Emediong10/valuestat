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

class SixthHero extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('sixth-hero')
            ->schema([
                Section::make('Feature Section')
    ->schema([
        TextInput::make('heading')
            ->label('Main Heading')
            ->default('Experienced by 46,000+ People.')
            ->required(),

        Textarea::make('subheading')

           ->label('Subheading')
            // ->default('Enthusiastically morph unique web-readiness via impactful platforms. Intrinsicly matrix premium expertise for diverse expertise. Intrinsicly drive collaborative bandwidth for accurate testing.')
            ->required(),

        Repeater::make('features')
            ->label('Feature Items')
            ->schema([
                Select::make('icon')
                ->label('Feature Icon')
                ->options([
                    'icon-line2-screen-desktop text-primary' => 'Desktop Image ',
                    'icon-line2-bulb text-warning' => 'Lighting Bulb image',
                    'icon-line2-support text-danger' => 'Support image',
                    'icon-line2-user text-success' => 'User image',
                    'icon-line2-graph text-info' => 'Graph image',

                ])
                // ->searchable()
                ->required(),

                TextInput::make('title')
                    ->label('Feature Title')
                    ->placeholder('Enter feature title')
                    ->required(),

                Textarea::make('description')
                    ->label('Feature Description')
                    ->placeholder('Enter feature description')
                    ->required(),
            ])
            ->columns(3)
            ->addable()
            ->deletable()
            ->reorderable(),

        FileUpload::make('image')
            ->label('Feature Image')
            ->required(),

            FileUpload::make('video')
            ->label('Feature Video')
            ->directory('videos')
            ->maxSize(102400),

    ])
    ->collapsible()

            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}
