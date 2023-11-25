<?php

namespace Modules\Blog\App\Filament\Resources\AuthorResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\Blog\App\Filament\Resources\AuthorResource;

class CreateAuthor extends CreateRecord
{
    protected static string $resource = AuthorResource::class;
}
