<?php

namespace App\Filament\Fabricator\PageBlocks;


use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
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
               Section::make('Content Heading')
                ->description('')
                ->schema([
                    TextInput::make('content_title')->required(),
                    Textarea::make('content_sub_title')->required(),

                    FileUpload::make('card_image'),

                    Grid::make(2)
                        ->schema([
                        TextInput::make('contact_title'),
                        Textarea::make('contact_description'),
                        ]),

                    Grid::make(2)
                        ->schema([
                TextInput::make('email'),
                TextInput::make('phone'),
                        ]),

                ]),
                Section::make('information')
                    // ->description('')
                    ->schema([
                        Repeater::make('getSocial')
                        ->schema([
                            Select::make('name')
                            ->options([
                                'facebook'   => 'Facebook',
                                'instagram'  => 'Instagram',
                                'google'     => 'Google',
                                'twitter'    => 'Twitter',
                                'linkedin'   => 'LinkedIn',
                                'youtube'    => 'YouTube',
                                'whatsapp'   => 'WhatsApp',
                                'telegram'   => 'Telegram',
                                'tiktok'     => 'TikTok',
                                'snapchat'   => 'Snapchat',
                                'reddit'     => 'Reddit',
                                'pinterest'  => 'Pinterest',
                                'tumblr'     => 'Tumblr',
                                'discord'    => 'Discord',
                                'twitch'     => 'Twitch'
                            ])
                            ->required(),

                        TextInput::make('url')
                            ->label('Social Media URL')
                            ->required()
                            ->url(),
                    ])
                    ->minItems(1)
                    ->maxItems(5) // Adjust max items if needed


                        ]),

                    ])
                    ->columns(2);

                // ->columns(2),

    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}


// 'contact_title',
// 'contact_description',
// 'content_title',
// 'content_sub_title',
// 'phone',
// 'content_title',
// 'email',
// 'getSocial',
// 'name',
// 'url',
// 'card_image'
