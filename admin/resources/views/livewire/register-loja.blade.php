<div>
    <form wire:submit.prevent="saveLoja">
        <div class="container mx-auto flex flex-row text-left w-ful shadow-md my-7 bg-color-light">
            <div class="w-1/2 flex-col text-center bg-white rounded-xl hidden md:flex">
                <h1 class="font-medium text-3xl my-3 font-sans text-yellow-500">
                    Restaurante {{$trading_name}}
                </h1>
                <img src={{asset('images/restaurante.svg')}} alt="cozinheiro" class="hidden w-3/5 sm:flex mx-auto"/>
            </div>
            <div class="w-full p-2 md:w-1/2 ml-auto py-5 rounde">
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="text" 
                            wire:model="corporate_name" 
                            placeholder="Razão Social" 
                            label="Razão Social"
                        />
                        @error('corporate_name') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="text" 
                            wire:model="trading_name" 
                            placeholder="Nome Fantasia" 
                            label="Nome Fantasia"
                        />
                        @error('trading_name') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="text" 
                            wire:model="cnpj" 
                            placeholder="CNPJ" 
                            label="CNPJ"
                        />
                        @error('cnpj') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="text" 
                            wire:model="web_site" 
                            label="Website"
                            placeholder="www.site.com.br" 
                        />
                        @error('web_site') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="tel" 
                            wire:model="phone" 
                            label="Telefone Comercial" 
                            placeholder="(99)99999999"
                        />
                        @error('phone') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="tel" 
                            wire:model="cel_phone" 
                            label="Celular Comercial" 
                            placeholder="(99)999999990"
                        />
                        @error('cel_phone') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="email" 
                            wire:model="email" 
                            label="Email Comercial" 
                            placeholder="email@email.com.br"
                        />
                        @error('email') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="text" 
                            wire:model="representante_legal" 
                            label="Representante Legal" 
                            placeholder="Representante Legal"
                        />
                        @error('representante_legal') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <x-input 
                    type="email" 
                    wire:model="representante_legal_email" 
                    label="Representante Legal Email" 
                    placeholder="email@email.com.br"
                />
                @error('representante_legal_email') 
                    <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                @enderror
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="text" 
                            wire:model="cep" 
                            label="Cep" 
                            placeholder="99999-999"
                            wire:keydown="cep"
                        />
                        @error('cep') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row justify-between">
                    <div class="flex flex-col w-full">
                        <x-input 
                            type="text" 
                            wire:model="address" 
                            label="Endereço" 
                            placeholder="Rua..."
                        />
                        @error('address') 
                            <span class="text-red-500 italic text-sm mx-3">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
