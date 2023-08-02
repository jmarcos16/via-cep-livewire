<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Attributes\Rule;
use Livewire\Component;

class SearchAddress extends Component
{

    public string $host = 'https://viacep.com.br/ws/{cep}/json/';
    public array|null $address = null;

    #[Rule(['required', 'size:8', 'regex:/^[0-9]{8}$/i'])]
    public  string|null $cep;

    public function render() : View
    {
        return view('livewire.search-address');
    }

    #[NoReturn]
    public function searchAddress() : void
    {
        $this->validate();

        $response = Http::get(str_replace('{cep}', $this->cep, $this->host))->json();
        in_array('erro', $response)
            ? $this->address = throw ValidationException::withMessages(['cep' => 'PostCode not found'])
            : $this->address = $response;
        $this->dispatch('cep-searched');
    }
}
