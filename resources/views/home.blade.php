@extends('layout.layout')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
      <div class="br-pagebody pd-x-20 pd-sm-x-30 pd-y-20 mx-wd-1350">

        <div class="card bd-0 shadow-base pd-25 pd-xs-40 mg-t-20">
            <div class="card-header bg-transparent pd-0 bd-b-0">
                <h1 class="tx-inverse text-center"><span class="fa fa-tag"></span> HOT SALE !</h1>
                <p class="tx-14 mg-b-20 mg-xs-b-30 text-center">Temukan Sekarang! Lebih Hemat! Lebih Mudah!</p>
            </div><!-- card-header -->
            <div class="card-block pd-0">

                <form action="{{route('home')}}" method="get">
                    @csrf
                <div class="row row-sm mg-t-20">
                    <div class="col-md-4 col-lg-3 mg-t-10 mg-lg-t-0">
                        <div class="form-group mg-b-0">
                        <label>Tanggal Awal</label>
                        <input type="date" name="awal" class="form-control tx-14" data-language="en" placeholder="Tanggal Awal" />
                        </div><!-- form-group -->
                    </div><!-- col-2 -->
                    <div class="col-md-4 col-lg-3 mg-t-10 mg-lg-t-0">
                        <div class="form-group mg-b-0">
                        <label>Tanggal Akhir</label>
                        <input type="date" name="akhir" class="form-control tx-14" data-language="en" placeholder="Tanggal Akhir" />
                        </div><!-- form-group -->
                    </div><!-- col-2 -->
                    <div class="col-md-4 col-lg-3 mg-t-10 mg-lg-t-0">
                        <div class="form-group mg-b-0">
                        <label class="d-block">Umur</label>
                        <input type="number" name="age" min="1" max="150" class="form-control" placeholder="umur" />
                        </div><!-- form-group -->
                    </div><!-- col-3 -->
                    <div class="col-md-4 col-lg-3 mg-t-10 mg-lg-t-0">
                        <div class="form-group mg-b-0">
                        <label class="d-block">Gender</label>
                        <div>
                            <select class="form-control wd-100p select2" name="jenis">
                                <option value="male" />Male
                                <option value="female" />Female
                                <option value="both" />Both
                            </select>
                        </div>
                        </div><!-- form-group -->
                    </div><!-- col-3 -->
                    <div class="col-md-6 col-lg-3 mg-t-10 mg-md-t-0">
                        <input type="submit" value="Temukan" class="btn btn-info tx-11 tx-spacing-1 tx-uppercase tx-medium tx-mont pd-y-12 pd-x-30 mg-t-30"/>
                    </div>
                </div><!-- row -->
                </form>
            </div><!-- card-block -->
        </div><!-- card -->

        <div class="card-columns column-count-4 mg-t-20">
            @foreach ($products as $product)
            <div class="card pd-25 bd-0 shadow-base" style="width: 300px; height: 400px">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ $product->url }}" class="tx-gray-600"><i class="fa fa-heart-o"></i></a>
                </div><!-- d-flex -->
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
