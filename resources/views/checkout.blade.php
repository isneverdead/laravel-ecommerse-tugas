@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="card">
        <div class="card-header">
          Invoices
        </div>
        <div class="card-body">
          <h5 class="card-title">Your Order details</h5>
          <li class="list-group-item  d-flex justify-content-between align-items-center">
                Price : 
            <span>
                Rp.{{$total}}
            </span>
        </li>
        <li class="list-group-item  d-flex justify-content-between align-items-center">
                Tax (10%) : 
            <span>
                Rp.{{$total * 0.1}}
            </span>
        </li>
        <li class="list-group-item  d-flex justify-content-between align-items-center">
                Delivery : 
            <span>
                Rp.{{$total * 0.05}}
            </span>
        </li>
        <li class="list-group-item  d-flex justify-content-between align-items-center">
                Total : 
            <span>
                Rp.{{$total * 0.05 + $total * 0.1 + $total}}
            </span>
        </li>
        <form method="POST" action="/orderplace">
            @csrf
              <div class="form-group mt-2">
                  <textarea placeholder="enter your address" name="address" class="form-control"></textarea>
              </div>
              <div class="form-group">
                  <label for="">Payment Method</label>
                  <p><input type="radio" value="cash" name="payment" id=""><span> Online Payment</span></p>
                  <p><input type="radio" value="cash" name="payment" id=""><span> EMI Payment</span></p>
                  <p><input type="radio" value="cash" name="payment" id=""><span> Cash On Delivery</span></p>
              </div>
              <button type="submit" class="btn btn-success">Order Now</button>
          </form>
        </div>
      </div>
</div>
    
@endsection