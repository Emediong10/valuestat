<?php

namespace App\Providers;

use App\Models\Page;
//use App\Models\Menu;
use App\Models\MenuItem;
use App\Livewire\MenuBuilder;
use Illuminate\Pagination\Paginator;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\MenuResource;
use App\Http\Controllers\PageController;
use App\Filament\Resources\MenuItemResource;
use Z3d0X\FilamentFabricator\Models\Page as VendorPage;
use Biostate\FilamentMenuBuilder\Models\Menu as VendorMenu;
use Biostate\FilamentMenuBuilder\Models\MenuItem as VendorMenuItem;
use Biostate\FilamentMenuBuilder\Http\Livewire\MenuBuilder as VendorMenuBuilder;
use Z3d0X\FilamentFabricator\Http\Controllers\PageController as VendorPageController;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuResource as VendorMenuResource;
use Biostate\FilamentMenuBuilder\Filament\Resources\MenuItemResource as VendorMenuItemResource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $loader = AliasLoader::getInstance();
        $loader->alias(VendorPage::class, Page::class);
        $loader->alias(VendorPageController::class, PageController::class);
       // $loader->alias(VendorMenu::class, Menu::class);
        $loader->alias(VendorMenuItem::class, MenuItem::class);
        $loader->alias(VendorMenuItemResource::class, MenuItemResource::class);
        $loader->alias(VendorMenuResource::class, MenuResource::class);
        $loader->alias(VendorMenuBuilder::class, MenuBuilder::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }
}
