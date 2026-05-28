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
       $estoque = Estoque::find(2);

        if ($estoque) {
            $quantidade_minima = $estoque->nivel_minimo;
        } else {
            $quantidade_minima = null; 
        }
       
        $quantidade = $data['quantidade'];

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
