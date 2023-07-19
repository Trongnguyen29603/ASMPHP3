@extends('templates.layout')
@section('content')
<form action="{{route('route_category_edit',['id'=>$categorys->id])}}" method="POST">
    @csrf
     <h1>Sửa danh mục khóa học</h1>
    <div class="mb-3 ml-5">
      <label class="form-label">Sửa danh mục khóa học </label>
      <input type="text" name="name" value="{{$categorys->name}}"  class="form-control ">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="{{route('route_category_index')}}">Category</a></button>
  </form>
@endsection