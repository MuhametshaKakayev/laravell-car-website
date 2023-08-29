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

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                    <x-success-status class="mb-4" :status="session('message')" />

                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Order Status</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                    <th> Müsteri adi </th>
                                                    <th scope="col">Müşteri emaili</th>
                                                    <th> Order No </th>
                                                    <th> Fiyat </th>
                                                    <th> Urun adi</th>
                                                    <th> Payment Mode </th>
                                                    <th> Start Date </th>
                                                    <th> Payment Status </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($order as $orders)
                                                <tr>

                                                    <td>

                                                        <span class="ps-2">{{ $orders->name }}</span>
                                                    </td>
                                                    <td>{{ $orders->email }}</td>
                                                    <td> {{ $orders->id }} </td>
                                                    <td> {{ $orders->toplam }} </td>
                                                    <td>{{ $orders->urun_adi }}</td>

                                                    <td> Credit card </td>
                                                    <td>{{ $orders->created_at }} </td>
                                                    <td>
                                                        <div class="{{ $orders->status == 'teslim edilmedi' ? 'btn btn-danger' : 'btn btn-success' }}">
                                                            {{ $orders->status }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-primary" href="{{ route('status.update',$orders->id) }}">
                                                            Onayla</a></td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





{{--
                    <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                        <table class="table table-bordered min-w-full text-center text-sm font-light"”>
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr style="font-size: initial">
                                    <th scope="col">İd</th>
                                    <th scope="col">Müsteri adi</th>
                                    <th scope="col">Müşteri emaili</th>
                                    <th scope="col">Urun adi</th>
                                    <th scope="col">FİYAT</th>
                                    <th scope="col">adet</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $orders)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td>{{ $orders->id }}</td>
                                            <td>{{ $orders->name }}</td>
                                            <td>{{ $orders->email }}</td>
                                            <td>{{ $orders->urun_adi }}</td>
                                            <td>{{ $orders->toplam }}</td>
                                            <td>{{ $orders->quantity }}</td>
                                            <td>{{ $orders->status }}</td>
                                            <td>
                                                <a class="btn btn-success" href="{{ route('status.update',$orders->id) }}">
                                                    Teslim edildi</a></td>

                                    </tr>


                                    @endforeach
                                </tbody>
                                    </table> --}}
                    </div>
                </div>
            </div>
            <!-- partial -->

            @include("admin.css_js")

            <!-- Javascript codes -->
</body>

</html>
