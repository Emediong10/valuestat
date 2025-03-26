<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Executive;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class ExecutiveListing extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('executive-listing')
            ->schema([
                TextInput::make('url_prefix')->label('URL Prefix')->default('/about'),
                Select::make('executives')->options(function(){
                    $executives = Executive::where('active', 1)->pluck('name', 'id')->toArray();
                    $default = ['*' => 'All executives'];
                    $all_executives = array_merge($default, $executives); // Merging properly
                    return $all_executives;
                })
                ->searchable()
                ->preload()
                ->required() ,

               TextInput::make('per_page')->label('News Items Per Page')->required()
            ]);
    }

    public static function mutateData(array $data): array
    {
    $perPage = $data['per_page'] ?? 10;
     $data['executives'] = Executive::where('active', 1)
     ->orderBy('created_at', 'asc')
     ->paginate($perPage);
        return $data;
    }
}