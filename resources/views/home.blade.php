@extends('layout.layout')
@section('content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      {{--  <div class="d-sm-flex align-items-center pd-t-15 pd-sm-t-25 pd-x-20 pd-sm-x-30">
        
      </div><!-- d-flex -->  --}}

      <div class="br-pagebody pd-x-20 pd-sm-x-30 pd-y-5 mx-wd-1350">

        <div class="card bd-0 shadow-base pd-25 pd-xs-40 mg-t-20">
            <div class="card-header bg-transparent pd-0 bd-b-0">
                <h1 class="tx-inverse text-center"><span class="fa fa-tag"></span> HOT SALE !</h1>
                <p class="tx-14 mg-b-20 mg-xs-b-30 text-center">Temukan Sekarang! Lebih Hemat! Lebih Mudah!</p>
            </div><!-- card-header -->
            <div class="card-block pd-0">
    
                <div class="row row-sm mg-t-20">
                    <div class="col-md-4 col-lg-6 mg-t-10 mg-lg-t-0">
                        <div class="form-group mg-b-0">
                        <label>Tanggal Awal</label>
                        <input type="text" class="form-control form-control-datepicker tx-14" data-language="en" placeholder="Tanggal Awal" />
                        </div><!-- form-group -->
                    </div><!-- col-2 -->
                    <div class="col-md-4 col-lg-6 mg-t-10 mg-lg-t-0">
                        <div class="form-group mg-b-0">
                        <label>Tanggal Akhir</label>
                        <input type="text" class="form-control form-control-datepicker tx-14" data-language="en" placeholder="Tanggal Akhir" />
                        </div><!-- form-group -->
                    </div><!-- col-2 -->
                </div><!-- row -->
                <div class="row row-sm mg-t-20">
                    <div class="col-md-6 col-lg-3">
                        <div class="form-group mg-b-0">
                        <label class="d-block">Kategori</label>
                        <select id="select-dropdown" class="form-control wd-100p select2" data-placeholder="Choose origin">
                            <option value="sfo" />Automotive (SFO)
                            <option value="lax" />Electronics (LAX)
                            <option value="Safari" />Home & Living (JFK)
                            <option value="Opera" />Health and Beauty (GUM)
                        </select>
                        </div><!-- form-group -->
                    </div><!-- col-3 -->
                    <div class="col-md-6 col-lg-3 mg-t-10 mg-md-t-0">
                        <div class="form-group mg-b-0">
                        <label class="d-block">Harga</label>
                        <div>
                            <select id="select-dropdown2" class="form-control wd-100p select2" data-placeholder="Choose destination">
                            <option value="sfo" />San Francisco (SFO)
                            <option value="lax" />Los Angeles (LAX)
                            <option value="Safari" />New York (JFK)
                            <option value="Opera" />Guam (GUM)
                            </select>
                        </div>
                        </div><!-- form-group -->
                    </div><!-- col-3 -->
                    <div class="col-md-6 col-lg-3 mg-t-10 mg-md-t-0">
                        <div class="form-group mg-b-0">
                        <label class="d-block">Umur</label>
                        <div>
                            <select id="select-dropdown2" class="form-control wd-100p select2" data-placeholder="Choose destination">
                            <option value="sfo" />San Francisco (SFO)
                            <option value="lax" />Los Angeles (LAX)
                            <option value="Safari" />New York (JFK)
                            <option value="Opera" />Guam (GUM)
                            </select>
                        </div>
                        </div><!-- form-group -->
                    </div><!-- col-3 -->
                    <div class="col-md-6 col-lg-3 mg-t-10 mg-md-t-0">
                        <div class="form-group mg-b-0">
                        <label class="d-block">Gender</label>
                        <div>
                            <select id="select-dropdown2" class="form-control wd-100p select2" data-placeholder="Choose destination">
                            <option value="sfo" />San Francisco (SFO)
                            <option value="lax" />Los Angeles (LAX)
                            <option value="Safari" />New York (JFK)
                            <option value="Opera" />Guam (GUM)
                            </select>
                        </div>
                        </div><!-- form-group -->
                    </div><!-- col-3 -->
                    {{--  <div class="col-md-4 col-lg-2 mg-t-10 mg-lg-t-0">
                        <div class="form-group mg-b-0">
                        <label>Passengers</label>
                        <input type="text" class="form-control tx-14" placeholder="No. of passenger" />
                        </div><!-- form-group -->
                    </div><!-- col-2 -->  --}}
                </div><!-- row -->

                <a href="./card-listing.html" class="btn btn-info tx-11 tx-spacing-1 tx-uppercase tx-medium tx-mont pd-y-12 pd-x-30 mg-t-30">Temukan</a>
            </div><!-- card-block -->
        </div><!-- card -->

        <div class="card-columns column-count-4 mg-t-20">
            <div class="card pd-25 bd-0 shadow-base">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="bg-danger pd-y-3 pd-x-10 tx-white tx-11 tx-roboto">20% off</span>
                    <a href="./card-listing.html" class="tx-gray-600"><i class="fa fa-heart-o"></i></a>
                </div><!-- d-flex -->
                <img src="./img/img41.jpg" class="img-fluid" alt="" />
                <div class="d-flex justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-14"><a href="./card-listing.html" class="tx-inverse">Elegant Handbag</a></p>
                    <p class="tx-danger tx-lato mg-b-0">$59.95</p>
                </div>
                <div class="mg-b-20 tx-warning">
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                </div>
                <a href="./card-listing.html" class="btn btn-success btn-oblong pd-x-25 pd-y-12 tx-11 tx-mont tx-uppercase tx-medium d-block">Add to cart</a>
            </div><!-- card -->
            <div class="card pd-25 bd-0 shadow-base">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="bg-danger pd-y-3 pd-x-10 tx-white tx-11 tx-roboto">20% off</span>
                    <a href="./card-listing.html" class="tx-gray-600"><i class="fa fa-heart-o"></i></a>
                </div><!-- d-flex -->
                <img src="./img/img41.jpg" class="img-fluid" alt="" />
                <div class="d-flex justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-14"><a href="./card-listing.html" class="tx-inverse">Elegant Handbag</a></p>
                    <p class="tx-danger tx-lato mg-b-0">$59.95</p>
                </div>
                <div class="mg-b-20 tx-warning">
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                </div>
                <a href="./card-listing.html" class="btn btn-success btn-oblong pd-x-25 pd-y-12 tx-11 tx-mont tx-uppercase tx-medium d-block">Add to cart</a>
            </div><!-- card -->
            <div class="card pd-25 bd-0 shadow-base">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="bg-danger pd-y-3 pd-x-10 tx-white tx-11 tx-roboto">20% off</span>
                    <a href="./card-listing.html" class="tx-gray-600"><i class="fa fa-heart-o"></i></a>
                </div><!-- d-flex -->
                <img src="./img/img41.jpg" class="img-fluid" alt="" />
                <div class="d-flex justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-14"><a href="./card-listing.html" class="tx-inverse">Elegant Handbag</a></p>
                    <p class="tx-danger tx-lato mg-b-0">$59.95</p>
                </div>
                <div class="mg-b-20 tx-warning">
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                </div>
                <a href="./card-listing.html" class="btn btn-success btn-oblong pd-x-25 pd-y-12 tx-11 tx-mont tx-uppercase tx-medium d-block">Add to cart</a>
            </div><!-- card -->
            <div class="card pd-25 bd-0 shadow-base">
                <div class="d-flex justify-content-between align-items-center">
                    <span class="bg-danger pd-y-3 pd-x-10 tx-white tx-11 tx-roboto">20% off</span>
                    <a href="./card-listing.html" class="tx-gray-600"><i class="fa fa-heart-o"></i></a>
                </div><!-- d-flex -->
                <img src="./img/img41.jpg" class="img-fluid" alt="" />
                <div class="d-flex justify-content-between mg-b-5">
                    <p class="mg-b-0 tx-14"><a href="./card-listing.html" class="tx-inverse">Elegant Handbag</a></p>
                    <p class="tx-danger tx-lato mg-b-0">$59.95</p>
                </div>
                <div class="mg-b-20 tx-warning">
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                    <i class="icon ion-star"></i>
                </div>
                <a href="./card-listing.html" class="btn btn-success btn-oblong pd-x-25 pd-y-12 tx-11 tx-mont tx-uppercase tx-medium d-block">Add to cart</a>
            </div><!-- card -->
        </div>
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        {{--  footer here  --}}
      </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
