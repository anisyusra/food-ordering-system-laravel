@extends('BackEnd.master')
@section('title')
    Category manage
@endsection
@section('content')

        {{-- for display message --}}
            @if(Session::get('sms'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('sms')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            {{-- end message --}}
            
            <div class="card my-5">
             
              <div class="card-header">
                <h3 class="card-title">Category of Foods sell</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Order Number</th>
                    <th>Created On</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php($i = 1)
                    @foreach($categories as $cate)
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$cate->category_name}}</td>
                    <td>{{$cate->order_number}}</td>
                    <td>{{$cate->added_on}}</td>
                    
                    <td> 
                      @if($cate->category_status == 1)
                      <a class="btn btn-outline-success" href="{{ route('Inactive_cate', ['category_id'=>$cate->category_id]) }}">
                        <i class="fas fa-arrow-up" title="Click to Inactive"></i>
                      </a>
                      @else
                      <a class="btn btn-outline-info" href="{{ route('category_active', ['category_id'=>$cate->category_id]) }}">
                        <i class="fas fa-arrow-down" title="Click to Active"></i>
                      </a>
                      @endif                      
                      <a class="btn btn-outline-dark"data-toggle="modal" data-target="#edit{{$cate->category_id}}">
                        <i class="fas fa-edit" title="Click to change it"></i>
                      </a>
                      <a class="btn btn-outline-danger" href="{{ route('cate_delete',  ['category_id'=>$cate->category_id]) }}">
                        <i class="fas fa-trash" title="Click to destroy"></i>
                      </a>
                    </td>
                  </tr>
                  
                  {{-- ================================== modal start here ========================= --}}

                        <div class="modal fade" id="edit{{$cate->category_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Update Category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            <div class="modal-body">
                              <form action="{{ route('cate_update')}}" method="post">
                                @csrf
                                <div class="form-group">
                                  <label>Category name</label>
                                  <input type="text" class="form-control" name="category_name" value="{{$cate->category_name}}">
                                  <input type="hidden" class="form-control" name="category_id" value="{{$cate->category_id}}">
                                </div>
                                <div class="form-group">
                                  <input type="number" class="form-control" name="order_number" value="{{$cate->order_number}}">
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-primary" name="btn" value="Update">
                                </div>

                              </form>
                      </div>
                      </div>
                      </div>
                      </div>
                  {{-- ================================== modal end here =========================== --}}
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection