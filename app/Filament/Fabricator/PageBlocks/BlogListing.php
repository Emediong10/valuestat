<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Blog;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class BlogListing extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('blog-listing')
            ->schema([
                TextInput::make('url_prefix')->label('URL Prefix')->default('/blogs'),
                Select::make('blogs')->options(function(){
                    $blogs = Blog::where('published',1)->pluck('title','id')->toArray();
                    $default=['*'=>'All blogs'];
                    $all_depts=$blogs+$default;
                    return $all_depts;
                })
                ->searchable()
                ->preload()
                ->required(),

               TextInput::make('per_page')->label('News Items Per Page')->required()
            ]);

    }

    public static function mutateData(array $data): array
{
    $perPage = $data['per_page'] ?? 10;
     $data['blogs']=Blog::where('published', 1)
     ->orderBy('created_at', 'desc')
     ->with('author')
     ->paginate($perPage);
    return $data;
}

}
