@extends('layouts.master1')
@section('content')
      <div class="content">
        <div class="row">
           <div class="col-lg-4 col-md-8 col-sm-8">
            <div class="card card-stats">
              <a href="https://www.negexc.com" style="text-decoration: none;"><div class="card-body ">
                <div class="row">
                  <div class="col-10 col-md-12">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-10 col-md-12">
                    <div class="numbers">
                      <p class="card-category" align="center">BTC</p>
                      <p class="card-title" align="center">Bitcoin</p>

                        <p>
                    </div>
                  </div>
                </div>
              </div></a>
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
              <a href="https://www.negexc.com" style="text-decoration: none;"><div class="card-body ">
                <div class="row">
                  <div class="col-10 col-md-12">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-10 col-md-12">
                    <div class="numbers">
                      <p class="card-category" align="center">ETH</p>
                      <p class="card-title" align="center">Ethereum</p>
                      

                        <p>
                    </div>
                  </div>
                </div>
              </div></a>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i> Update Now
                </div>
              </div>
            </div>
          </div>
           
          
          
        </div>
       <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title" align="center">Buy Token</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>Metode Pembayaran</label>
                        <select class="form-control" nama="metode">
                          <option>BTC</option>
                          <option>ETH</option>
                          </select>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="text" class="form-control" placeholder="Amount" >
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Negexc Coin</label>
                        <input type="text" class="form-control" value="value dari database">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Bonus (15%)</label>
                        <input type="text" class="form-control" value="15% x Jumlah negexc coin">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label align="center">Total</label>
                        <input type="text" class="form-control" placeholder="Bonus + Jumlah negexc coin">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address Wallet</label>
                        <input type="text" class="form-control" value="0xF5cA230578E48A4cDEE64f012F00A8459E8Bd0d7" >
                      </div>
                    </div>
                  </div>
                  
                  
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Purchase</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div> 
      
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" align="center"> History</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th class="text-right">
                        Salary
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                          Oud-Turnhout
                        </td>
                        <td class="text-right">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td class="text-right">
                          $23,789
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td class="text-right">
                          $56,142
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td class="text-right">
                          $38,735
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td class="text-right">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $78,615
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $98,615
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        
      </div>  
      </div>


@endsection