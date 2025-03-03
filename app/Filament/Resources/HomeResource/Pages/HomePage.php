<?php

namespace App\Filament\Resources\HomeResource\Pages;

use App\Filament\Resources\HomeResource;
use Filament\Resources\Pages\Page;

class HomePage extends Page
{
    protected static string $resource = HomeResource::class;

    protected static string $view = 'filament.resources.home-resource.pages.home-page';
}
