<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Executive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;

class ExecutiveController extends Controller
{
    public function render_executive(Request $request, Executive $executive)
    {

        $page=Page::where('slug','about/?executive')->first();

        $executive = Executive::where('id',$request->route()->getAction()['executive'])->first();


        if(!$page->published)
        {
            abort(503);
        }

        $page->seo_tags=$executive->seo_tags;
        $page->description=$executive->meta_description;
        $page->title=$executive->title;

        /** @var ?class-string<Layout> $layout */
        $layout = FilamentFabricator::getLayoutFromName($page?->layout);

        if (! isset($layout)) {
            throw new Exception("Filament Fabricator: Layout \"{$page->layout}\" not found");
        }

        /** @var string $component */
        $component = $layout::getComponent();
         return Blade::render(
             <<<'BLADE'
             <x-dynamic-component
                 :component="$component"
                 :page="$page"
             />
             BLADE,
             ['component' => $component, 'page' => $page]
         );

    }
}
