@extends('layout.layout')

@section('menu', 'Produk')

@section('content')

<main class="w-full h-max">

    <div class="m-14 px-10 flex flex-row gap-5 justify-center ">
        <div class="flex flex-col justify-center text-center items-center">
            <img src="{{URL('image/resicfectan.png')}}" width="155px" height="271px">
            <p>Resicfectan</p>
            <p>(Disinfektan)</p>
        </div>
        <div class="flex flex-col justify-center text-center items-center">
            <img src="{{URL('image/resicglass.png')}}" width="155px" height="271px">
            <p>Resiceramic</p>
            <p>(Pembersih Lantai
                Kamar Mandi) </p>
        </div>
        <div class="flex flex-col justify-center text-center items-center">
            <img src="{{URL('image/resicpel.png')}}" width="155px" height="271px">
            <p>Resicpel</p>
            <p>(Pembersih Lantai Ruangan)</p>
        </div>
        <div class="flex flex-col justify-center text-center items-center">
            <img src="{{URL('image/resicramic.png')}}" width="155px" height="271px">
            <p>Resicglass </p>
            <p>(Pembersih Kaca) </p>
        </div>
        <div class="flex flex-col justify-center text-center items-center">
            <img src="{{URL('image/resicrance.png')}}" width="155px" height="271px">
            <p>Resiceramic</p>
            <p>(Pembersih Lantai
                Kamar Mandi) </p>
        </div>
    </div>
    @auth
    <div class="m-14 px-10">
        <form action="/formpesanan/{{$idpesanan}}" method="POST">
            @csrf
            <h2 class="font-bold text-5xl mb-5"> Tambah Produk </h2>
            <label class=""> Produk 1 </label>
            <div class="flex flex-row gap-5 mt-3 mb-3">
                <select id="produk1" name="produk1" class="w-[412px] h-12 bg-white rounded-xl p-4 ">
                    <option>Pilih Produk </option>
                    @foreach($produk as $item)
                    <option value="{{$item->idproduk}}">{{$item->nama_produk}}</option>
                    @endforeach
                </select>

                <input id="produk1jumlah" name="produk1jumlah" type="number" class="h-12 bg-white p-4 rounded-xl" />
                {{--
            </div>
            <label class=""> Produk 1 </label>
            <div class="flex flex-row gap-5 mt-3 mb-3">
                <select id="produk2" name="produk2" class="w-[412px] h-12 bg-white rounded-xl p-4 ">
                    <option>Pilih Produk </option>
                    @foreach($produk as $item)
                    <option value="{{$item->idproduk}}">{{$item->nama_produk}}</option>
                    @endforeach
                </select>

                <input id="produk2jumlah" name="produk2jumlah" type="number" class="h-12 bg-white p-4 rounded-xl" />

            </div>
            <label class=""> Produk 1 </label>
            <div class="flex flex-row gap-5 mt-3 mb-3">
                <select id="produk3" name="produk3" class="w-[412px] h-12 bg-white rounded-xl p-4 ">
                    <option>Pilih Produk </option>
                    @foreach($produk as $item)
                    <option value="{{$item->idproduk}}">{{$item->nama_produk}}</option>
                    @endforeach
                </select>

                <input id="produk3jumlah" name="produk3jumlah" type="number" class="h-12 bg-white p-4 rounded-xl" />
            </div>
            <label class=""> Produk 1 </label>
            <div class="flex flex-row gap-5 mt-3 mb-3">
                <select id="produk4" name="produk4" class="w-[412px] h-12 bg-white rounded-xl p-4 ">
                    <option>Pilih Produk </option>
                    @foreach($produk as $item)
                    <option value="{{$item->idproduk}}">{{$item->nama_produk}}</option>
                    @endforeach
                </select>

                <input id="produk4jumlah" name="produk4jumlah" type="number" class="h-12 bg-white p-4 rounded-xl" />
            </div> --}}
            <button type="submit"
                class="w-[168px] text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Checkout</button>
        </form>
    </div>
    @endauth


</main>

@endsection