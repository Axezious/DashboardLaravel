@extends('layouts.master1')
@section('content')
      <div class="content">
        <div class="row">
           <div class="col-lg-4 col-md-8 col-sm-8">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-10 col-md-12">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-10 col-md-12">
                    <div class="numbers">
                      <p class="card-category" align="center">Amount of Token</p>
                      <p class="card-title" align="center">4.000NGX</p>

                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update Now
                </div>
              </div>
            </div>
          </div>
           <div class="col-lg-4 col-md-8 col-sm-8">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-10 col-md-12">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-10 col-md-12">
                    <div class="numbers">
                      <p class="card-category" align="center">Total Purchase</p>
                      <p class="card-title" align="center">3,354 ETH
                      <p class="card-title" align="center">0.01 BTC
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i> Last day
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-8 col-sm-8">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-10 col-md-12">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger" align="center"></i>
                    </div>
                  </div>
                  <div class="col-10 col-md-12">
                    <div class="numbers">
                      <p class="card-category" align="center">Total Transaction</p>
                      <p class="card-title" align="center">23
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i> In the last hour
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
        
      </div>


@endsection