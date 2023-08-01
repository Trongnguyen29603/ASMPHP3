@extends('templates.layout')
@section('content')
<form action="{{route('route_khoa_hoc_edit',['id'=>$khoa_hocs->id]) }}" method="POST">
    @csrf
    <h1>Sửa khóa học</h1>
    <div class="mb-3">  
        <label class="form-label">Tên khóa hoc</label>
        <input type="text" value="{{$khoa_hocs->name}}" class="form-control" name="name">
    </div>
    <div class="mb-3">  
        <label class="form-label">Tên giảng viên</label>
        <input type="text" value="{{$khoa_hocs->name_gv}}" class="form-control" name="name_gv">
    </div>
    <div class="mb-3">  
        <label class="form-label">Giá</label>
        <input type="text" value="{{$khoa_hocs->price}}" class="form-control" name="price">
    </div>
    <div class="mb-3">  
        <label class="form-label">Mô tả</label>
        <input type="text" value="{{$khoa_hocs->describe}}" class="form-control" name="describe">
    </div>
    <div class="mb-3">  
        <label class="form-label">Chương trình học</label>
        <input type="text" value="{{$khoa_hocs->process}}" class="form-control" name="process">
    </div>   
    {{-- <div class="mb-3">  
        <label class="form-label">Loại khóa học</label>
        <select name="id_category" id="">
             @foreach($categorys as $loai)
                <option value="{{$loai->id}}">{{$loai->name}}</option>
             @endforeach 
        </select>
    </div>  --}}
    <div class="col-md-9 col-sm-8">
        <div class="row">
            <div class="col-xs-6">
                <img id="mat_truoc_preview" src="{{ $khoa_hocs->image?''.Storage::url($khoa_hocs->image):''}}" alt="your image"
                     style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                <input type="file" name="image" accept="image/*"
                       class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                <label for="cmt_truoc">Mặt trước</label><br/>
            </div>
        </div>
    </div>
    <select name="id_category" id="">
    @foreach($category as $item)
         @if($khoa_hocs->id_category == $item->id)
                <option selected value="{{$item->id}}">{{$item->name}}</option>
       @else
       <option value="{{$item->id}}">{{$item->name}}</option>
       @endif
   
   @endforeach
   </select>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-success"><a style="text-decoration: none; color:white" href="{{route('route_khoa_hoc_index')}}">list</a></button>
</form> 
@endsection