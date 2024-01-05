 @extends('FrontEnd.master')

@section('title')
    checkout
@endsection

@section('content')
    
     <div class="products">
         <div class="container">
              <div class="col-md-9 product-w3ls-right">
                {{--@if(Session::get('sms'))
                     <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('sms') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                        </button>
                     </div>
                  @endif--}}
                  <div class="card">
                    <div class="card-header text-muted">
                        <h3>Dear {{ Session::get('customer_name') }}.</h3> <h4 class="text-center">We've to know which payment method you want.</h4>
                    </div>
                    <div class="card mt-4">
                        <h5 class=" card-header mt-4 text-center text-center text-muted">Please select your payment</h5>
                        <div class="card-body">
                            <div class="checkout-left">
                                <div class="address_form_agile mt-sn-5 mt-4">

                                <form action="{{route('FrontHome')}}" method="post">
                                    @csrf
                                    <table class ="table">
                                        <tr>
                                            <th>Cash</th>
                                            <td><input type="radio" name="payment_type" value="cash"></td>
                                            
                                        </tr>
                                        <tr>
                                            <th>Online banking</th>
                                            <td><input type="radio" name="payment_type" value="online"></td>
                                        </tr>
                                        </div>
                                        
      

                                    </table>
                            
                                </form>

                                <div class="modal-footer">
                                            <a href="{{route('FrontHome')}}" class="btn btn-info">
                                                <span class="mt-5">Confirm</span>
                                            </a>
                                        </div>

                                </div>
                            </div>
                        </div> 



@endsection