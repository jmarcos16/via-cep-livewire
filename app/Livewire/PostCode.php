<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Rule;
use Livewire\Component;

class PostCode extends Component
{
    #[Rule('required|regex:/^[0-9]{5}-[0-9]{3}$/')]
    public $postCode;

    public string $host = 'https://viacep.com.br/ws/{cep}/json/';


    public string $address = '';

    public string $neighborhood = '';

    public string $city = '';


    public function searchPostCode()
    {

        $this->validate();

        $url = str_replace('{cep}', $this->postCode, $this->host);

        $response = Http::get($url)->object();


        !$response->erro ?: throw ValidationException::withMessages(['postCode' => 'PostCode not found']);

        $this->address = $response->logradouro;
        $this->neighborhood = $response->bairro;
        $this->city = $response->localidade;

    }


    public function render()
    {
        return view('livewire.post-code');
    }
}
