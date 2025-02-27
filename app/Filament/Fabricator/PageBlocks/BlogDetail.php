<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Blog;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BlogDetail extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('blog-detail')
            ->schema([
                //
            ]);
    }

    public static function mutateData(array $data): array
    {
        $path=explode('/',request()->path());
        $count=count($path)?count($path)-1:1;
        $blog= Blog::where(['slug'=>$path[$count]])->with('author')->first();
        //dd($blog);
        $data['blog']=$blog;
        return $data;
    }
}
