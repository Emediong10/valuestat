<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class YoutubeVideos extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('youtube-videos')
            ->schema([
                Section::make('YouTube Videos')

                    ->schema([
                                Repeater::make('videos')
                                    ->label('Video List')
                                    ->schema([
                                        TextInput::make('youtube_id')
                                            ->label('YouTube Video ID')
                                            ->prefix('https://www.youtube/')
                                            ->helperText('please delete this part away before saving https://www.youtube/'),

                                        TextInput::make('title')
                                            ->label('Video Title'),

                                        Textarea::make('description')
                                            ->label('Video Description'),
                                    ]),
                    ]),
            ]);
    }


    public static function mutateData(array $data): array
    {
        return $data;
    }
}

// 'videos','youtube_id','title', 'description'
