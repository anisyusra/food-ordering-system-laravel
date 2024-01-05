@extends('FrontEnd.master')

@section('title')
    Cart Show Item
@endsection

@section('content')

    <div class="products">
        <div class="container">
            <div class="col-md-9 product-w3ls-right">
                
            <div class="card">
                <h3 class="card-header text-center mt-3" style="background-color:lightyellow; height: 70px; width: auto">
                    Cart Items
                </h3>
                <div class="card-body">
                <table class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Remove</th>
                            <th scope="col">Dish Name</th>
                            <th scope="col">Dish Image</th>
                            <th scope="col">Dish Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Grand Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i=1)
                        @php($sum=0)
                        @foreach($CartDish as $dish)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <th scope="row">
                                <a href="{{ route('remove_item', ['rowId' => $dish->rowId])}}" type="button" class="btn btn-danger">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                            </th>
                            <td>{{$dish->name}}</td>
                            <td><img src="{{ asset($dish->options->image) }}" style="height: 50px; height: 50px; border-radius: 50%"></td>
                            
                            @if($dish->options->half_price==null)
                                <td>RM{{$dish->price+2}}</td>
                            @else
                                <td>RM{{ $dish->options->half_price+2}}</td>
                            @endif

                            <td>
                                <form action="{{route ('update_cart')}}" method="post">
                                    @csrf 
                                    <input type="hidden" name="rowId" value=" {{$dish->rowId}}">
                                    <input type="text" name="qty" value=" {{$dish->qty}}" style="width: 35px; height:25px" min="1">
                                    <input type="submit" name="btn" class="btn btn-success" value=" Update" 
                                    style="width: 57px; height:25px;  padding-top:0; padding-bottom: 0; padding-left: 0;
                                    padding-right:0 ">
                                </form>
                            </td>

                            @if($dish->options->half_price==null)
                                <td>RM{{$subTotal = $dish->price*$dish->qty}}</td>
                            @else
                                <td>RM{{$subTotal = $dish->options->half_price*$dish->qty}}</td>
                            @endif
                            <td>{{$dish->$subTotal+2}}</td>
                           <input type="hidden" value="{{$sum = $sum + $subTotal}}">

                        </tr>
                      
                        @endforeach
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center">= RM{{$sum +2}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


       

@if(Session::get('customer_id'))
        
<div class="col-md-9 product-w3ls-right">
            <a href="{{route ('/shipping')}}" class="btn btn-info" style="float: right">
                <i class="fa fa-shopping-bag"></i>
                Checkout
            </a>
        </div> 
@else
    <div class="col-md-9 product-w3ls-right">
            <a href="" data-toggle="modal" data-target="#login_or_register"  class="btn btn-info" style="float: right">
                <i class="fa fa-shopping-bag"></i>
                Checkout
            </a>
        </div>
         

@endif

         



    </div>
</div>
</div>



<!-- POpup-->
<div class="modal fade" id="login_or_register" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
            <span aria-hidden = "true">x</span>
        </button>
      </div> 


      
      <div class="modal-body">

        <div class="col-md-6">
          
            <div class="card"> 
                 
                <div class="card-body">
                    
                    <h4>Order checkOut!</h4>

                    <h4 class="mt-5">Your order will be proceed after the payment.</h4>
                    <h6 class="mt-5">**Your information are required to place an order too.</h6>

                    @csrf 
                    <div class="login-agileinfo"> 
				    <form action="{{route('store_user_order')}}" method="post"> 
                    @csrf
                    <input class="agile-ltext" type="text" name="name" placeholder="Username" required="">
					<input class="agile-ltext" type="email" name="email" placeholder="Your Email" required="">
					<input class="agile-ltext" type="text" name="phone_number" placeholder="Your Phone Number" required="">
</form>
</div>

                </div>
                </div>
                </div>
                
            

    
      <div class="modal-footer">
           <a href="{{route('checkout_payment')}}" class="btn btn-info" style="float: right"">
                        
                    <span class="mt-5">Continue</span>
                </a>

      </div>
    </div>
  </div>
</div>
 </div> 
@endsection
