

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
@include("admin.css_js")
</head>

<body>
        @include('admin.sidebar')
        <!-- partial -->

            @include('admin.navbar')

            <!-- partial -->
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Araba ekle') }}
                    </h2>
                </x-slot>
                <div style="width: 100%">
                    <a style="margin-left: 80%" href="{{ route('adminview') }}" :active="request()->routeIs('adminview')">
                        {{ __('Ana Sayfa') }}
                    </a>
                </div>
                <div class="py-12">

                    <x-success-status class="mb-4" :status="session('message')" />

                    <div class="py-4 px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <form action="{{route("araba.store") }}" method="POST" style="margin-left: 40%">
                            @csrf

                            <div class="block text-gray-700 text-sm font-bold mb-2">
                                <x-input-label for="adi" :value="__('Adını ekle')" />
                                <x-text-input id="adi" class="block text-gray-700 text-sm font-bold mb-2" type="text" name="adi" :value="old('adi')"  autofocus />
                            </div>
                            <div>
                                <x-input-label for="marka" :value="__('Markasını ekle')" />
                                <x-text-input id="marka" class="block text-gray-700 text-sm font-bold mb-2" type="text" name="marka" :value="old('marka')"  autofocus />
                            </div>
                            <div>
                                <x-input-label for="fiyat" :value="__('Fiyatını ekle')" />
                                <x-text-input id="fiyat" class="block text-gray-700 text-sm font-bold mb-2" type="text" name="fiyat" :value="old('fiyat')"  autofocus />
                            </div>
                            <div>
                                <x-input-label for="sene" :value="__('Senesini ekle')" />
                                <x-text-input id="sene" class="block text-gray-700 text-sm font-bold mb-2" type="text" name="sene" :value="old('sene')" required autofocus />
                            </div>
                            <div>
                                <x-input-label for="renk" :value="__('Renk ekle')" />
                                <x-text-input id="renk" class="block text-gray-700 text-sm font-bold mb-2" type="text" name="renk" :value="old('renk')" required autofocus />
                            </div>
                            <div>
                                <x-input-label for="vites" :value="__('Vites ekle')" />
                                <x-text-input id="vites" class="block text-gray-700 text-sm font-bold mb-2" type="text" name="vites" :value="old('vites')" required autofocus />
                            </div>
                            <div>
                                <x-input-label for="resim" :value="__('Resim ekle')" />
                                <x-text-input id="resim" class="block text-gray-700 text-sm font-bold mb-2" type="file" accept=".png,.jpg,.gif"  name="resim" :value="old('resim')"  autofocus />
                            </div>
                            <div>
                                <x-input-label for="km" :value="__('araba km')" />
                                <x-text-input id="km" class="block text-gray-700 text-sm font-bold mb-2" type="text" name="km" :value="old('km')" required autofocus />
                            </div>
                            <div>
                            <x-primary-button class="ml-3"> {{ __('kaydet') }}
                            </x-primary-button>
                        </div>
                        </form>
                    </div>
                </div>
            </x-app-layout>

            <!-- partial -->

            @include("admin.css_js")

            <!-- Javascript codes -->
</body>

</html>
