<?php

namespace Modules\Blog\App\Filament\Resources\CategoryResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Blog\App\Filament\Resources\CategoryResource;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
