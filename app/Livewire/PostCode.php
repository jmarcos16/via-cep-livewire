<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PostCode extends Component
{
    public int $postCode;

    public string $host = 'https://viacep.com.br/ws/{cep}/json/';


    public string $address = '';

    public string $neighborhood = '';

    public string $city = '';


    public function searchPostCode()
    {

        $this->validate([
            'postCode' => 'required|numeric|digits:8'
        ]);

        $url = str_replace('{cep}', $this->postCode, $this->host);

        $response = Http::get($url)->object();

        $this->address = $response->logradouro;
        $this->neighborhood = $response->bairro;
        $this->city = $response->localidade;

    }


    public function render()
    {
        return view('livewire.post-code');
    }
}
