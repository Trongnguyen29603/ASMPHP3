@extends('templates.layout')
@section('content')

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Giảng viên</th>
        <th>Price</th>
        <th>Mô tả</th>
        <th>Chương trình</th>
        <th>Danh mục</th>
        <th>Thao tác</th>
    </tr>
    <tbody>
        @foreach ($khoa_hoc as $item)
            <tr>
            <td>{{$item->idkh}}</td>
            <td>{{$item->namekh}}</td>
            <td>{{$item->name_gv}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->describe}}</td>
            <td>{{$item->process}}</td>
          
            <td><img src="{{ $item->image?''.Storage::url($item->image):''}}" style="width: 100px" /></td>
            <td>
                <option value="{{$item->id}}">{{$item->name}}</option>
            </td>
            <td>
                <button type="button" class="btn btn-success"><a style="text-decoration: none; color:white" href="{{route('route_khoa_hoc_edit',['id'=>$item->idkh])}}">Sửa</a></button>
                <button type="button" class="btn btn-danger"><a style="text-decoration: none; color:white" href="{{route('route_khoa_hoc_delete',['id'=>$item->idkh])}}">Xóa</a></button>
            </td>
            </tr>  
        @endforeach
    </tbody>
</table>
<button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="{{route('route_khoa_hoc_add')}}">New khóa học</a></button>
@endsection

