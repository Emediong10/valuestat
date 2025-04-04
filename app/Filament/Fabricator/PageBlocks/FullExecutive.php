<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Executive;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FullExecutive extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('full-executive')
            ->schema([
                //
            ]);
    }

    public static function mutateData(array $data): array
    {
        $path=explode('/',request()->path());
        $count=count($path)?count($path)-1:1;
        $executive= Executive::where(['slug'=>$path[$count]])->first();
        //dd($path[$count]);
        $data['executive']=$executive;
        return $data;
    }
}