@extends('templates.layout')
@section('content')
<form action="{{route('route_khoa_hoc_edit',['id'=>$khoa_hocs->id]) }}" method="POST">
    @csrf
    <div class="mb-3">  
        <label class="form-label">Tên khóa hoc</label>
        <input type="text" value="{{$khoa_hocs->name}}" class="form-control" name="name">
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
    <div class="mb-3">  
        <label class="form-label">danh mục </label>
        <input type="text" value="{{$khoa_hocs->id_category}}" class="form-control">
    </div> 

    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection