@extends('templates.layout')
@section('content')
<form action="{{route('route_category_add')}}" method="POST">
    @csrf
     <h1>Thêm danh mục khóa học</h1>
    <div class="mb-3 ml-5">
      <label class="form-label">Danh mục khóa học </label>
      <input type="text" name="name"  class="form-control ">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="/category">Category</a></button>
  </form>
@endsection
