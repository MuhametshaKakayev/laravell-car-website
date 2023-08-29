{{-- <html>
    <body>
        {{-- <x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' listesi:') }}
        </h2>
    </x-slot>
        </x-app-layout> --}}
        <div id="iyzipay-checkout-form" class="popup"></div>
 {{-- <div class="container">
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
                <div class="button">
                    a class="btn btn-success" href="{{ route('araba.order') }}" method="POST">Odeme</a>

                        <button class="" href="{{ route('araba.order') }}">Pay</button>

                            <button type="submit" class="btn btn-danger">ode</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html> --}}

 <!DOCTYPE html>
<html>
<head>
    <title>Ödeme Formu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f5f5f5;
        }
        .payment-form {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"], input[type="date"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        .submit-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="payment-form">
        <h2>Ödeme Yap</h2>
        <form action="{{ route('araba.pay') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="card-number">Kart Numarası</label>
                <input type="text" id="card-number" name="card_number" value="5890040000000016"   placeholder="Kart Numaranızı Girin" required>
            </div>
            <div class="form-group">
                <label for="total-amount">Kullanıcı Adi soyadı</label>
                <input type="text" id="total-amount" name="adi_soyadi" value="Aa Aaa" placeholder="Adınızı girin" required>
            </div>
            <div class="form-group">
                <label for="expiry-date">Son Kullanma Tarihi ay</label>
                <input type="number" id="expiry-month" value="11" name="expiry_month" required>
                <div class="form-group">
                    <label for="expiry-date">Son Kullanma Tarihi yıl</label>
                    <input type="number" id="expiry-yeah" value="2025"  name="expiry_year" required>

            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv"  placeholder="CVV" required>
            </div>
            <button type="submit" class="submit-btn">Ödemeyi Tamamla</button>
        </form>
    </div>
</body>
</html>
