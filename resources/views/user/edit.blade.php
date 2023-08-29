<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Araba editle:') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-success-status class="mb-4" :status="session('message')" />

        <div class="py-4 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('araba.update', ['id' => $araba->id]) }}" method="POST" style="margin-left: 40%">
                @method('POST')
                @csrf
                <div class="block text-gray-700 text-sm font-bold mb-2">
                    <x-input-label for="adi" :value="__('İD')" />
                    <x-text-input id="adi" class="block text-gray-700 text-sm font-bold mb-2" type="text"
                        name="adi" disabled :value="$araba->id" autofocus />
                </div>
                <div class="block text-gray-700 text-sm font-bold mb-2">
                    <x-input-label for="adi" :value="__('Adını ekle')" />
                    <x-text-input id="adi" class="block text-gray-700 text-sm font-bold mb-2" type="text"
                        name="adi" :value="$araba->adi" autofocus />
                </div>
                <div>
                    <x-input-label for="marka" :value="__('Markasını ekle')" />
                    <x-text-input id="marka" class="block text-gray-700 text-sm font-bold mb-2" type="text"
                        name="marka" :value="$araba->marka" autofocus />
                </div>
                <div>
                    <x-input-label for="fiyat" :value="__('Fiyatını ekle')" />
                    <x-text-input id="fiyat" class="block text-gray-700 text-sm font-bold mb-2" type="text"
                        name="fiyat" :value="$araba->fiyat" autofocus />
                </div>
                <div>
                    <x-input-label for="sene" :value="__('Senesini ekle')" />
                    <x-text-input id="sene" class="block text-gray-700 text-sm font-bold mb-2" type="text"
                        name="sene" :value="$araba->sene" required autofocus />
                </div>
                <div>
                    <x-input-label for="renk" :value="__('Renk ekle')" />
                    <x-text-input id="renk" class="block text-gray-700 text-sm font-bold mb-2" type="text"
                        name="renk" :value="$araba->renk" required autofocus />
                </div>
                <div>
                    <x-input-label for="vites" :value="__('Vites ekle')" />
                    <x-text-input id="vites" class="block text-gray-700 text-sm font-bold mb-2" type="text"
                        name="vites" :value="$araba->vites" required autofocus />
                </div>
                <div>
                    <x-input-label for="resim" :value="__('Resim ekle')" />
                    <x-text-input id="resim" class="block text-gray-700 text-sm font-bold mb-2" type="file"
                        accept=".png,.jpg,.gif" name="image" :value="$araba->resim" autofocus />
                </div>
                <div>
                    <x-input-label for="km" :value="__('araba km')" />
                    <x-text-input id="km" class="block text-gray-700 text-sm font-bold mb-2" type="text"
                        name="km" :value="$araba->km" required autofocus />
                </div>
                <div>
                    <x-primary-button class="ml-3"> {{ __('Guncelle') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
