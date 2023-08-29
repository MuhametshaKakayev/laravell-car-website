<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iyzipay\Options;
use Iyzipay\Request\CreatePaymentRequest;
use Iyzipay\Model\Locale;
use Iyzipay\Model\Currency;
use Iyzipay\Model\PaymentChannel;
use Iyzipay\Model\PaymentGroup;
use Iyzipay\Model\PaymentCard;
use Iyzipay\Model\Buyer;
use Iyzipay\Model\Address;
use Iyzipay\Model\BasketItemType;
use Iyzipay\Model\BasketItem;
use Iyzipay\Model\Payment;



use IyzipayBootstrap;
use App\Http\Controllers\Controller;

use App\Models\Arabaİnsert;
use App\Models\Arabalar;
use App\Models\Populer_oto;
use App\Models\Logos;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Cartshopping;


class HomeController extends Controller
{


    public function show()
    {

        $arabalar = Arabalar::all();
        $populers = Populer_oto::all();
        $logolar = Logos::all();

        return view("index", ["arabalars" => $arabalar, "populers" => $populers, "logolar" => $logolar]);

    }


    public function index()
    {

        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == "admin") {
                return view("admin.adminhome");
            } elseif ($usertype == "user") {
                $arabalar = Arabalar::all();
                $populers = Populer_oto::all();
                $logolar = Logos::all();

                $user = auth()->user();
                Cartshopping::count();

                return view("index", ["arabalars" => $arabalar, "populers" => $populers, "logolar" => $logolar,]);
            }
        }
    }

    public function addcart(Request $request, $id)
    {

        if (Auth::id()) {

            $user = auth()->user();
            $user_id=$user->id;
            $araba = Arabaİnsert::find($id);
            $options = [
                'user_id'
            ];

            Cartshopping::instance('shopping')->add($id, $araba->adi,1, $araba->fiyat,$options)->associate("App\Models\Arabalar");
            Cartshopping::count();
            return redirect()->back()->with("message", "Başarılı bir şekilde sepete eklendi");
        } else {
            return redirect("login");
        }
    }
    public function showcart()
    {
        $user = auth()->user();
        $cartItems = cart::where("id", $user->id)->get();
        $count = $cartItems->count();
        Cartshopping::count();
        return view("showcart");
    }

    public function destroycart()
    {
        Cartshopping::instance('shopping')->destroy();

        return view("showcart");
    }

    public function deletecart($rowId)
    {
        Cartshopping::instance('shopping')->remove($rowId);
        return redirect()->back()->with("message", "Başarılı bir şekilde sepetten sildi");

    }
    public function adminview()
    {

        return view("admin/adminhome");
    }

    public function createPaymente(Request $request1)
    {


        $user = auth()->user();
        $user_id = $user->id;
        $name = $user->name;
        $email = $user->email;



        $expiry_year = $request1->input('expiry_year');
        $expiry_month = $request1->input('expiry_month');
        $cardNumber = $request1->input('card_number');
        $cvv = $request1->input('cvv');
        $totalAmount = $request1->input('total_amount');
        $adi_soyadi = $request1->input("adi_soyadi");

        $options = new Options();
        $options->setApiKey("sandbox-OModEnsCXXe0FhMmLGHpHrqRZw8B82Kj");
        $options->setSecretKey("sandbox-FZKIrctMFX9OO1LlAz0Xtl8HS6h4sWVp");
        $options->setBaseUrl("https://sandbox-api.iyzipay.com");

        $cartList = Cartshopping::instance('shopping')->content();
        foreach ($cartList as $row) {
        $request = new CreatePaymentRequest();
        $request->setLocale(Locale::TR);
        $request->setConversationId("123456789");
        $request->setPrice("$row->total");
        $request->setPaidPrice("$row->total");
        $request->setCurrency(Currency::TL);
        $request->setInstallment(1);
        $request->setBasketId("B67832");
        $request->setPaymentChannel(PaymentChannel::WEB);
        $request->setPaymentGroup(PaymentGroup::PRODUCT);
        }
        $paymentCard = new PaymentCard();
        $paymentCard->setCardHolderName(" $adi_soyadi");
        $paymentCard->setCardNumber("$cardNumber");
        $paymentCard->setExpireMonth(" $expiry_month");
        $paymentCard->setExpireYear("$expiry_year");
        $paymentCard->setCvc($cvv);
        $paymentCard->setRegisterCard(0);
        $request->setPaymentCard($paymentCard);

        $buyer = new Buyer();
        $buyer->setId("$user_id");
        $buyer->setName("$name");
        $buyer->setSurname("__");
        $buyer->setGsmNumber("+905350000000");
        $buyer->setEmail($email);
        $buyer->setIdentityNumber("74300864791");
        $buyer->setLastLoginDate("2015-10-05 12:43:35");
        $buyer->setRegistrationDate("2013-04-21 15:12:09");
        $buyer->setRegistrationAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $buyer->setIp("85.34.78.112");
        $buyer->setCity("Istanbul");
        $buyer->setCountry("Turkey");
        $buyer->setZipCode("34732");
        $request->setBuyer($buyer);

        $shippingAddress = new Address();
        $shippingAddress->setContactName("Jane Doe");
        $shippingAddress->setCity("Istanbul");
        $shippingAddress->setCountry("Turkey");
        $shippingAddress->setAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $shippingAddress->setZipCode("34742");
        $request->setShippingAddress($shippingAddress);

        $billingAddress = new Address();
        $billingAddress->setContactName("Jane Doe");
        $billingAddress->setCity("Istanbul");
        $billingAddress->setCountry("Turkey");
        $billingAddress->setAddress("Nidakule Göztepe, Merdivenköy Mah. Bora Sok. No:1");
        $billingAddress->setZipCode("34742");
        $request->setBillingAddress($billingAddress);

        $cartList = Cartshopping::instance('shopping')->content();

        $basketItems = array();
        foreach ($cartList as $row) {
        $firstBasketItem = new BasketItem();
        $firstBasketItem->setId("$row->id");
        $firstBasketItem->setName("$row->name");
        $firstBasketItem->setCategory1("Araba");
        $firstBasketItem->setCategory2("Accessories");
        $firstBasketItem->setItemType(BasketItemType::PHYSICAL);
        $firstBasketItem->setPrice("$row->total");

        $basketItems[0] = $firstBasketItem;
        }

        $request->setBasketItems($basketItems);



        $payment = Payment::create($request, $options);
       // print_r($payment);
        // print_r(self::$globv);
        if ($payment->getStatus() === 'success') {
            // Ödeme başarılı, kullanıcıyı teşekkür sayfasına yönlendirin
            //$this->confirmorder($request);
            $this->confirmorder($request1);
            $this->destroycart();
            return redirect()->route('showcart')->with('message', 'Ödeme işlemi başarılı oldu.');
        } else
        {
            // Ödeme başarısız, hata sayfasına yönlendirin veya hata mesajını gösterin
            return redirect()->route('showcart')->with('message', 'Ödeme işlemi başarısız');
        }
    }
    public function confirmorder($request1)
    {
        if (!$request1) {
            return redirect()->back()->with("message", "Hata: Yöntem için gerekli argüman eksik.");
        }

        $user = auth()->user();
        $name = $user->name;
        $email = $user->email;
        $user_id = $user->id;
        $cartList = Cartshopping::instance('shopping')->content();

        foreach ($cartList as $row) {
            $order = new Order();
            $order->user_id =  $user_id;
            $order->urun_adi = $row->name;
            $order->toplam = $row->price;
            $order->quantity = $row->qty;
            $order->name = $name;
            $order->email = $email;
            $order->status = "teslim edilmedi";
            $order->save();
        }


        return redirect()->back()->with("message", "Başarılı bir şekilde sipariş alındı");
    }

    public function ordershow()
    {
        if (Auth::id()) {
        $user_id = Auth()->user()->id;
        $order=order::where("user_id", $user_id)->get();
        return view("user.orders",compact("order"));
    }
    }

    public function showform()
    {
        return view("user.chekout");
    }
}

