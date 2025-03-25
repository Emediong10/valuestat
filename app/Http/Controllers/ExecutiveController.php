<?php

namespace App\Http\Controllers;

use App\Models\Executive;
use Illuminate\Http\Request;

class ExecutiveController extends Controller
{
    public function render_blog(Request $request, Executive $executive)
    {

        $page=Page::where('slug','executive/?executive ')->first();

        $executive = Bxecutive::where('id',$request->route()->getAction()['executive'])->first();


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
