
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
@include("admin.css_js")
</head>

<body>

    <x-app-layout>
        <div style="width: 100%">
            <a style="margin-left: 80%" href="{{ route('arabalar.show') }}" :active="request()->routeIs('arabalar.show')">
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

                                    <th scope="col">Müsteri adi</th>
                                    <th scope="col">Müşteri emaili</th>
                                    <th scope="col">Urun adi</th>
                                    <th scope="col">FİYAT</th>
                                    <th scope="col">adet</th>
                                    <th scope="col">Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $orders)
                                        <tr class="border-b dark:border-neutral-500">

                                            <td>{{ $orders->name }}</td>
                                            <td>{{ $orders->email }}</td>
                                            <td>{{ $orders->urun_adi }}</td>
                                            <td>{{ $orders->toplam }}</td>
                                            <td>{{ $orders->quantity }}</td>
                                            <td>{{ $orders->status }}</td>

                                    </tr>


                                    @endforeach
                                </tbody>
                                    </table>
                    </div>
                </div>
            </div>
    </x-app-layout>

            @include("admin.css_js")

            <!-- Javascript codes -->
</body>

</html>
