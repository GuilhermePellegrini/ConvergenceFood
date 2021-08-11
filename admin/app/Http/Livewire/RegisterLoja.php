<?php

namespace App\Http\Livewire;

use App\Models\Loja;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class RegisterLoja extends Component
{
    public $corporate_name;
    public $trading_name;
    public $cnpj;
    public $web_site;
    public $phone;
    public $cel_phone;
    public $email;
    public $representante_legal;
    public $representante_legal_email;
    public $endereco_id;
    public $cep;
    public $address;
    public $district;
    public $number;
    public $complement;
    public $cidade_id;
    public $estado_id;

    protected $rules = [
        'corporate_name' => 'required|min:6|max:255',
        'trading_name' => 'required|min:6|max:20',
        'cnpj' => 'required|size:14|unique:lojas',
        'web_site' => 'nullable',
        'phone' => 'required|max:11|min:10',
        'cel_phone' => 'nullable|max:11|min:10',
        'email' => 'required|email|unique:lojas|max:255',
        'representante_legal' => 'required|max:255',
        'representante_legal_email' => 'required|email|unique:lojas|max:255',
        'endereco_id' => 'required|int',
        'cep' => 'required|size:8',
        'address' => 'required|max:255',
        'district' => 'required|max:255',
        'number' => 'required|max:100',
        'complement' => 'max:255',
        'cidade_id' => 'required',
        'estado_id' => 'required',
    ];

    protected $validationAttributes = [
        'corporate_name' => 'Razão Social',
        'trading_name' => 'Nome Fantasia',
        'cnpj' => 'CNPJ',
        'web_site' => 'Site',
        'phone' => 'Telefone Comercial',
        'cel_phone' => 'Celular',
        'email' => 'Email',
        'representante_legal' => 'Representante Legal',
        'representante_legal_email' => 'Email do Representante Legal',
        'endereco_id' => 'Endereço',
        'cep' => 'CEP',
        'address' => 'Endereço',
        'district' => 'Bairro',
        'number' => 'Número',
        'complement' => 'Complemento',
        'cidade_id' => 'Cidade',
        'estado_id' => 'Estado',
    ];

    public function render()
    {
        return view('livewire.register-loja');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveLoja()
    {
        $validatedData = $this->validate();
        Loja::create($validatedData);
    }

    public function cep()
    {
        if(strlen($this->cep) == 8){
            $response = Http::get('https://viacep.com.br/ws/'.$this->cep.'/json/')->json();
            $this->address = $response['logradouro'];
        }
    }
}
