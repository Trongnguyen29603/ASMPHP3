@extends('templatesclient.layoutclient')
@section('content')
{{-- slider --}}
<section class="slider-area ">
  <div class="slider-active">
      <!-- Single Slider -->
      <div class="single-slider slider-height d-flex align-items-center">
          <div class="container">
              <div class="row">
                  <div class="col-xl-6 col-lg-7 col-md-12">
                      <div class="hero__caption">
                          <h1 data-animation="fadeInLeft" data-delay="0.2s">Online learning<br> platform</h1>
                          <p data-animation="fadeInLeft" data-delay="0.4s">Build skills with courses, certificates, and degrees online from world-class universities and companies</p>
                          <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Join for Free</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!--================End Home Banner Area =================-->
<div class="row">
  <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"></th>
          <th scope="col">Sản phẩm </th>
          <th scope="col">Giá</th>
          <th scope="col">giảm viên</th>
          <th scope="col">Mô tả</th>
          <th scope="col">Thao tác</th>
        </tr>
      </thead>
      <tbody> 
          
 <form action="{{route('route_bill',['id'=>$khoahoc->id])}}" method="POST">
        <tr>
          <th><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
          <td><img src="{{ $khoahoc->image?''.Storage::url($khoahoc->image):''}}" style="width: 100px" /></td>
         
          <th scope="row">{{$khoahoc->name}}</th>
          <td>{{$khoahoc->price}}</td>
          <td>{{$khoahoc->name_gv}}</td>
          {{-- <td><input type="number"></td> --}}
          <td>{{$khoahoc->describe}}</td>
          {{-- <td><button type="button" class="btn-close" aria-label="Close"></button></td> --}}
        </tr>
        
    
      </form>
      </tbody>
    </table>
     <hr>
      {{-- <h1>TỔNG CỘNG : 340.000 đ</h1> --}}
      {{-- <button type="button" class="btn btn-primary">Thanh toán</button> --}}
</div>
 
<form action="{{}}" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Phone</label>
        <input type="text" class="form-control" name="phone">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Address</label>
        <input type="text" class="form-control" name="address">
      </div>
         
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection