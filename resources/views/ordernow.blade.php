@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-6">
    <table class="table table-striped">
    <tbody>
      <tr>
        <td>Price</td>
        <td>Rs. {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>Rs. 0</td>
      </tr>
      <tr>
        <td>Delivery Charges</td>
        <td>Rs. 100</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>Rs. {{$total + 100}}</td>
      </tr>
    </tbody>
  </table>

  <form method="POST" action="orderplace">
  @csrf
  <div class="form-group">
  <label for=""> Address </label>
    <textarea name="address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="">Payment Method</label>
    <p><input type="radio" value="cash" name="payment"> <span> Cash On Delivery </span> </p>
    <p><input type="radio" value="cash" name="payment"> <span> Online Payment </span> </p>
  </div>
  <button type="submit" class="btn btn-default">Order Now</button>
</form>

    </div>
</div>

@endsection