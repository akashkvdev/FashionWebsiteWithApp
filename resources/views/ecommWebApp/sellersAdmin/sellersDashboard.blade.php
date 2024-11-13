@extends('ecommWebApp.sellersAdmin.sellersCommonlayout')

@section('sellersContents')

{{-- <div class="" style="margin-top: 50%"></div> --}}
<div class="container mt-3 "  >
    <div class="row row-cols-1 row-cols-md-4 mt-5 ">
        <div class="col mb-2">
           <a href="{{route('addProductsBySeeler')}}">
            <div class="card" >
                <div class="card-header py-3">Add Products</div>
                <div class="card-body card-background" style="background-image: url('https://cdn-icons-png.flaticon.com/512/10608/10608883.png');  background-size: contain; background-repeat: no-repeat; background-position: center; height: 150px;"></div>
            </div>
           </a>
        </div>
        <div class="col mb-2">
            <div class="card">
                <div class="card-header py-3">All Products</div>
                <div class="card-body card-background" style="background-image: url('{{asset('/img/cardbackgroundImage/products.png')}}');  background-size: contain; background-repeat: no-repeat; background-position: center; height: 150px;"></div>
            </div>
        </div>
        <div class="col mb-2">
            <div class="card">
                <div class="card-header py-3">Add Categories</div>
                <div class="card-body card-background" style="background-image: url('{{asset('/img/cardbackgroundImage/category.png')}}');  background-size: contain; background-repeat: no-repeat; background-position: center; height: 150px;"></div>
            </div>
        </div>
        <div class="col mb-2">
            <div class="card">
                <div class="card-header py-3">Your Products Sale</div>
                <div class="card-body card-background" style="background-image: url('{{asset('/img/cardbackgroundImage/growth.png')}}');  background-size: contain; background-repeat: no-repeat; background-position: center; height: 150px;"></div>
            </div>
        </div>
        <!-- Repeat for additional cards -->
    </div>
</div>





@endsection