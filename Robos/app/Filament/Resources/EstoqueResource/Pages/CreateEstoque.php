<?php

namespace App\Filament\Resources\EstoqueResource\Pages;

use App\Filament\Resources\EstoqueResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Produto;
use Filament\Notifications\Notification;

use function Laravel\Prompts\title;

class CreateEstoque extends CreateRecord
{
    protected static string $resource = EstoqueResource::class;

    protected function afterCreate(): void
    {
      
    }

}
