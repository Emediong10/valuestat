<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Layouts\Layout;
use Z3d0X\FilamentFabricator\Models\Contracts\Page;
use Z3d0X\FilamentFabricator\Services\PageRoutesService;


class PageController extends Controller
{
    public function __invoke(?Page $filamentFabricatorPage = null): string
    {
        // Handle root (home) page
        if (blank($filamentFabricatorPage)) {
            /**
             * @var PageRoutesService $routesService
             */
            $routesService = resolve(PageRoutesService::class);

            /** @var Page $filamentFabricatorPage */
            $filamentFabricatorPage = $routesService->findPageOrFail('/');
        }

        if(!$filamentFabricatorPage->published){
            abort(503);
        }

        /** @var ?class-string<Layout> $layout */
        $layout = FilamentFabricator::getLayoutFromName($filamentFabricatorPage->layout);

        if (! isset($layout)) {
            throw new \Exception("Filament Fabricator: Layout \"{$filamentFabricatorPage->layout}\" not found");
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
            ['component' => $component, 'page' => $filamentFabricatorPage]
        );
    }

}
