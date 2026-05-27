<?php

namespace App\Filament\Resources\ProdutoResource\Pages;

use App\Filament\Resources\ProdutoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Estoque;
use Filament\Notifications\Notification;

class CreateProduto extends CreateRecord
{
    protected static string $resource = ProdutoResource::class;

    protected function beforeCreate(): void
    {
       $data = $this->data;

       $quantidade_minima = Estoque::find($data['nivel_minimo']);
       $quantidade = (int)$data['quantidade'];

       if($quantidade < $quantidade_minima){
            Notification::make()
            ->title('Quantidade Errada')
            ->body("Precisa ter no mínimo '{$quantidade_minima}'.")
            ->danger()
            ->send();
        $this->halt();
        }
    }
}
