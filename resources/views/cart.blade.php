@extends('layouts.app')

@section('title', 'Cart | Pakai.in')

@section('main')
<div class="flex flex-row justify-start pt-10 pl-20">
    <div class="">
        <a href="dashboard.html">
            <ion-icon name="arrow-back-outline" class="text-3xl text-[#2DBE78]"></ion-icon>
        </a>
    </div>
</div>

<div class="flex flex-col items-center">
    <div class="text-3xl font-bold">SHOPPING CART</div>
    <div class="text-[#2DBE78] font-semibold">{{$rentData->count()}} Items</div>
</div>

<div class="flex flex-row justify-start text-center mt-10">
    <div class=" w-[34%] p-">
        <h1 class="font-medium text-[#2DBE78]">Product</h1>
    </div>
    <div class=" w-[12.5%] p-5">
        <h1 class="font-medium text-[#2DBE78]">Color</h1>
    </div>
    <div class="w-[12.5%] p-5">
        <h1 class="font-medium text-[#2DBE78]">Size</h1>
    </div>
    <div class=" w-[12.5%] p-5">
        <h1 class="font-medium text-[#2DBE78]">Units</h1>
    </div>
    <div class=" w-[12.5%] p-5">
        <h1 class="font-medium text-[#2DBE78]">Amount</h1>
    </div>
    <div>

    </div>
</div>

<div class="flex flex-col justify-center items-center ml-10">
    @foreach ($rentData as $data)
    <div class="w-[85%] p-5 produk">
        <div class="flex flex-row  items-center">
            <div class="flex flex-row  items-center w-[460px] justify-start gap-5">
                <img class="h-[200px]" style="border-radius: 12px" src="/img/item/{{$data->img}}" alt="">
                <h1 class="font-semibold">{{$data->name}} <br><span class="font-light">{{$data->start_date}} s/d
                        {{$data->end_date}}</span></h1>
            </div>
            <div class="items-center text-center  w-[237px]">
                {{$data->color}}
            </div>
            <div class="items-center text-center  w-[237px]">
                {{$data->size}}
            </div>
            <div>
                <div class="flex flex-row items-center justify-center gap-5  w-[237px] align-middle">
                    <form method="post" action="/cart/update/subtract/{{$data->id}}">
                        @csrf
                        <button type="submit" class="substract">
                            <ion-icon name="remove-circle-outline" class="text-2xl text-[#2DBE78]"></ion-icon>
                        </button>
                    </form>

                    <span class="quantity">{{$data->qty}}</span>
                    <form action="/cart/update/add/{{$data->id}}" method="post">
                        @csrf
                        <button type="submit" class="add" onclick="function(e){e.preventDefault()}">
                            <ion-icon name="add-circle-outline" class="text-2xl text-[#2DBE78]"></ion-icon>
                        </button>
                    </form>

                </div>
            </div>
            <div class="items-center text-center w-[237px] price">
                Rp {{$data->total_harga}}
            </div>
            <div>
                <!-- remove button -->
                <div class="flex flex-row items-center justify-center gap-5 align-middle">
                    <form method="post" action="/cart/delete/{{$data->id}}">
                        @csrf
                        <button class="remove" type="submit">
                            <ion-icon name="trash-outline" class="text-2xl text-[#2DBE78]"></ion-icon>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach


    <div class="flex flex-col justify-center items-center">
        <div class="text-3xl font-bold text-[#2DBE78]">
            Total: <span id="total">Rp {{$totalPrice}}</span>
        </div>
        <div class="mt-5">
            <button class="bg-[#2DBE78] text-white font-semibold py-2 px-4 rounded-full">CHECKOUT</button>
        </div>
    </div>
</div>
<script>
    // add or subtract quantity
// jelek klo mo diganti monggo
const add = document.getElementsByClassName('add');
const subtract = document.getElementsByClassName('substract');
const quantity = document.getElementsByClassName('quantity');
const price = document.getElementsByClassName('price');
const totalprice = document.getElementById('total');
const produk = document.getElementsByClassName('produk');
const remove = document.getElementsByClassName('remove');


console.log(totalprice.innerHTML);



// change quantity when add or subtract is clicked
// for (let i = 0; i < add.length; i++) {
//     var currentPrice = price[i].innerHTML;
//     add[i].addEventListener('click', function (e) {
//         e.preventDefault();
//         if (quantity[i].innerHTML < 10) {
//             quantity[i].innerHTML++;
           
//             // price[i].innerHTML = currentPrice * quantity[i].innerHTML; 
//             // totalprice.innerHTML = parseInt(totalprice.innerHTML) + parseInt(currentPrice);
//         }
//         else{
//             alert('Max quantity reached');
//         }
//     });
//     subtract[i].addEventListener('click', function (e) {
//         e.preventDefault();
//         if (quantity[i].innerHTML > 1) {
//             quantity[i].innerHTML--;
//             price[i].innerHTML = currentPrice * quantity[i].innerHTML;
//             totalprice.innerHTML = parseInt(totalprice.innerHTML) - parseInt(currentPrice);
//         }   
//     });
    
//     // remove item from cart
   
// }
</script>
@endsection