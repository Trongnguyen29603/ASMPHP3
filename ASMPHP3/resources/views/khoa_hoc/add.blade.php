@extends('templates.layout')
@section('content')
<form action="{{route('route_khoa_hoc_add') }}" method="POST">
    @csrf
    <div class="mb-3">  
        <label class="form-label">Tên khóa hoc</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">  
        <label class="form-label">Giá</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">  
        <label class="form-label">Mô tả</label>
        <input type="text" class="form-control" name="describe">
    </div>
    <div class="mb-3">  
        <label class="form-label">Chương trình học</label>
        <input type="text" class="form-control" name="process">
    </div>   <div class="mb-3">  
        <label class="form-label">Loại khóa học</label>
        <select name="id_category" id="">
             @foreach($categorys as $loai)
                <option value="{{$loai->id}}">{{$loai->name}}</option>
             @endforeach 
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection