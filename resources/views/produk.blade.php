@extends('layout.layout')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->

      <div class="br-pagebody pd-x-20 pd-sm-x-30 pd-y-20 mx-wd-1350">

        <div class="card widget-18 shadow-base mg-t-20">
            <div class="wt-content">
                <div class="wt-content-item">
                <h1 class="wt-title">Temukan dan Dapatkan</h1>
                <p class="mg-b-30">Temukan yang kamu mau disini</p>
    
                <form action="{{route('produk')}}" method="get">
                  @csrf
                <div class="d-sm-flex justify-content-center">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input name="cari" class="form-control" placeholder="Masukkan nama produk" type="text" />
                    </div><!-- input-group -->
                    <button type="submit" class="btn btn-info">Find</button>
                  </div>
                </form>
    
                <nav class="nav">
                    <a href="{{route('produk')}}" class="nav-link">
                    <span class="iconwrap bg-gray-200 icon-32"><i class="icon ion-gear-a"></i></span>
                    <p>Otomotif</p>
                    </a>
                    <a href="{{route('produk')}}" class="nav-link">
                    <span class="iconwrap bg-gray-200 icon-32"><i class="icon ion-tshirt"></i></span>
                    <p>Fashion</p>
                    </a>
                    <a href="{{route('produk')}}" class="nav-link">
                    <span class="iconwrap bg-gray-200 icon-32"><i class="icon ion-android-desktop"></i></span>
                    <p>Elektronik</p>
                    </a>
                    <a href="{{route('produk')}}" class="nav-link">
                    <span class="iconwrap bg-gray-200 icon-32"><i class="icon ion-wrench"></i></span>
                    <p>Alat</p>
                    </a>
                </nav>
                </div><!-- tx-center -->
            </div><!-- d-flex -->
            </div><!-- card -->

        <div class="card-columns column-count-4 mg-t-20">
            @foreach ($products as $product)
            <div class="card pd-25 bd-0 shadow-base" style="width: 300px; height: 400px">
                <img style="width: 200px; height: 200px;" src="{{ $product->image }}" class="img-fluid" alt="" />
                <div class="d-flex justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-14"><a href="{{ $product->url }}" class="tx-inverse">{{$product->name}}</a></p>
                </div>
                <div>
                        <p class="tx-danger tx-lato mg-b-0">{{$product->presentPrice()}}</p>
                        <p class="tx-danger tx-lato mg-b-0">Sekarang : {{$product->presentDisc()}}</p>
                </div>
                <a href="{{ $product->url }}" class="btn btn-success btn-oblong pd-x-25 pd-y-12 tx-11 tx-mont tx-uppercase tx-medium d-block">Selanjutnya</a>
            </div><!-- card -->
            @endforeach
        </div>

      </div><!-- br-pagebody -->
      <footer class="br-footer">
        {{--  footer here  --}}
      </footer>
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
