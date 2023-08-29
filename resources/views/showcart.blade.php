{{--
<x-app-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sipariş listesi:') }}
        </h2>
    </x-slot>
    <div style="width: 100%">
        <a style="margin-left: 80%" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Ana Sayfa') }}
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-success-status class="mb-4" :status="session('message')" />


            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <table class="table table-bordered min-w-full text-center text-sm font-light"”>
                    <thead class="border-b font-medium dark:border-neutral-500">
                        <tr style="font-size: initial">
                    <th scope="col">ID</th>
                    <th scope="col">ADI</th>
                    <th scope="col">FİYAT</th>
                    <th scope="col">ADET</th>
                    <th scope="col">TOPLAM</th>
                    <th scope="col">İŞLEM</th>



                </tr>

                <form action="{{ route('araba.orders'}}" method="POST">

                @csrf

                @foreach(Cartshopping::instance('shopping')->content() as $sepet)
                    <tr class="border-b dark:border-neutral-500">
                        <td>{{ $sepet->id }}</td>
                        <td>{{ $sepet->name }}
                        <input type="text" name="arabaadi[]" value="{{ $sepet->name }}">
                        </td>
                        <td>{{ $sepet->price }}
                            <input type="text" name="arabafiyat[]" value="{{ $sepet->price }}">
                        </td>
                        <td>{{$sepet->qty}}
                            <input type="text" name="arabaqty[]" value="{{ $sepet->qty }}">
                        </td>
                        <td>{{$sepet->subtotal}}</td>

                        <td>
                            <form action="{{ route('deletecart', ['id' => $sepet->rowId]) }}" method="POST">
                                @method('POST')
                                @csrf
                                <button type="submit" class="btn btn-danger">Sil</button>

                        </td>
                        <td>{{$sepet->tax}}</td>

                    </tbody>
                    @endforeach

                </table>

            </form>
                 <td>
                    <td><a class="btn btn-danger" href="{{ route('cart.destroy') }}">Temizle</a></td>
                    <td>Toplam tutar=<?php echo Cartshopping::total(); ?> </td>
                    <td>Toplam adet=<?php echo Cartshopping::count(); ?> </td>
            </tr>

            <button class="btn btn-success">Siparişi tamamla</button>
            </div>
        </div>
    </div>
</x-app-layout>



 --}}
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 <script src="assets/js/chekout.js"></script>
 <link rel="stylesheet" href="assets/css/chekout.css" />

 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sipariş listesi:') }}
        </h2>
    </x-slot>

    <div style="width: 100%">
        <a style="margin-left: 80%" href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Ana Sayfa') }}
        </a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-success-status class="mb-4" :status="session('message')" />

            <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('araba.order') }}" method="POST">
                    @csrf

                    <table class="table table-bordered min-w-full text-center text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr style="font-size: initial">
                                <th scope="col">ID</th>
                                <th scope="col">ADI</th>
                                <th scope="col">FİYAT</th>
                                <th scope="col">ADET</th>
                                <th scope="col">TOPLAM</th>
                                <th scope="col">İŞLEM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(Cartshopping::instance('shopping')->content() as $sepet)
                                <tr class="border-b dark:border-neutral-500">
                                    <td>{{ $sepet->id }}</td>
                                    <td>
                                        {{-- {{ $sepet->name }} --}}
                                        {{-- <input type="text" name="arabaadi" value="{{ $sepet->name }}" placeholder="Kart Numaranızı Girin" required> --}}
                                        <input type="text" name="arabaadi[]" value="{{ $sepet->name }}">
                                    </td>
                                    <td>
                                        {{-- {{ $sepet->price }} --}}
                                        <input type="text" name="arabafiyat[]" value="{{ $sepet->price }}">
                                    </td>
                                    <td>
                                        {{-- {{ $sepet->qty }} --}}
                                        <input type="text" name="arabaqty[]" value="{{ $sepet->qty }}">
                                    </td>
                                    <td>{{ $sepet->subtotal }}</td>
                                    <td>
                                        <form action="{{ route('deletecart', ['id' => $sepet->rowId]) }}" method="POST">
                                            @method('POST')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Sil</button>
                                        </form>
                                    </td>
                                    <td>{{ $sepet->tax }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>




                <div>
                    <a class="btn btn-danger" href="{{ route('cart.destroy') }}">Temizle</a>
                    <span>Toplam tutar={{ Cartshopping::total() }}</span>
                    <span>Toplam adet={{ Cartshopping::count() }}</span>
                    {{-- <button type="submit" class="btn btn-danger">Tamamla</button> --}}
                </div>

                <form action="{{ route('chekout.form') }}" method="POST">
                    @csrf
                     <div class="button">

                        <button type="submit" class="btn btn-danger">Odeme Yap</button>
                     </div>

                        </form>





{{--
<div class="container">

    <div class="card">
        <div class="form">
            <div class="left-side">
                <span class="success">Success</span>
                <div class="image">

                     <img src="https://imgur.com/QrKJmrf.jpg">
                </div>
                <div class="debit-card">
                    <div class="card_name">
                       <small>Cardholder name</small>
                       <span class="user_name">John Doe</span>
                    </div>
                        <div class="num_expiry">
                            <div class="card_number">
                               <small>Card Number</small>
                               <span class="set_card_number">0000 0000 0000 0000</span>
                            </div>
                            <div class="card_cvv">
                               <small>Valid upto</small>
                               <span class="user_card_cvv">MM/YYYY</span>
                           </div>

                        </div>
                </div>



            </div>
            <div class="right-side">
                <h3>Payment details</h3>
                <div class="input-text">
                    <input type="text" id="user_name_input" onkeyup="userName(this.value)" placeholder="Username" require>
                    <span>Cardholder name</span>
                </div>
                <div class="input-text">
                    <input type="text" id="user_card_number_input" placeholder="0000 0000 0000 0000" onkeyup="userCardNumber(this.value)" data-slots="0" data-accept="\d" require>
                    <span>Card number</span>
                </div>
                <div class="input-div">
                    <div class="input-text">
                       <input type="text" onkeyup="usercardcvv(this.value)" placeholder="MM/YYYY" data-slots="MY" require>
                       <span>Valid upto</span>
                    </div>
                    <div class="input-text ">
                       <input type="text" placeholder="000" data-slots="0" data-accept="\d" size="3" require>
                       <span>CVV</span>
                    </div>
                </div>



                    </div>
                </div>


            </div>

                </div> --}}

</div>

</x-app-layout>
