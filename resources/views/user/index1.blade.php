
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
                        {{ __('Arabalar listesi:') }}
                    </h2>
                </x-slot>

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                        <x-success-status class="mb-4" :status="session('message')" />

                        <div class="py-4 px-4 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                            <table class="table table-bordered min-w-full text-center text-sm font-light"”>
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr style="font-size: initial">
                                        <th scope="col">ID</th>
                                        <th scope="col">ADI</th>
                                        <th scope="col">MARKA</th>
                                        <th scope="col">FİYAT</th>
                                        <th scope="col">sene</th>
                                        <th scope="col">renk</th>
                                        <th scope="col">vites</th>
                                        <th scope="col">km</th>
                                        <th scope="col" colspan="2">İŞLEMLERİ</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($arabas as $list)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td>{{ $list->id }}</td>
                                            <td>{{ $list->adi }}</td>
                                            <td>{{ $list->marka }}</td>
                                            <td>{{ $list->fiyat }}</td>
                                            <td>{{ $list->sene }}</td>
                                            <td>{{ $list->renk }}</td>
                                            <td>{{ $list->vites }}</td>
                                            <td><img src="{{ $list->resim }}" style="width:50px;height:50px" alt=""/></td>
                                            {{-- <td>{{ $list->resim }}</td> --}}


                                            <td>
                                                <form action="{{ route('araba.edit', ['id' => $list->id]) }}" method="GET">
                                                    @method('GET')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Edit</button>
                                                </form>
                                            </td>


                                            <td>
                                                <form action="{{ route('araba.destroy', ['id' => $list->id]) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="6" Liste bulunamdı> </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </x-app-layout>

            <!-- partial -->

            @include("admin.css_js")

            <!-- Javascript codes -->
</body>

</html>
