@extends('templatesclient.nav')
@section('khoahoc')

{{-- @foreach($khoa_hoc as $khoa)
<div class="properties pb-20">
    <div class="properties__card">
        <div class="properties__img overlay1">
            <a href="#"><img src="{{ $khoa->image?''.Storage::url($khoa->image):''}}" style="width: 100px" /></a>
        </div>
        <div class="properties__caption">
            <p>User Experience</p>
            <h3><a href="#">Fundamental of UX for Application design</a></h3>
            <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
            </p> --}}
            {{-- <div class="properties__footer d-flex justify-content-between align-items-center">
                <div class="restaurant-name">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half"></i>
                    </div> --}}
                    {{-- <p><span>(4.5)</span> based on 120</p>
                </div>
                <div class="price">
                    <span>{{$khoa->price}}</span>
                </div>
            </div>
            <a href="#" class="border-btn border-btn2">Find out more</a>
        </div>
    </div>
</div>
@endforeach --}}

@endsection