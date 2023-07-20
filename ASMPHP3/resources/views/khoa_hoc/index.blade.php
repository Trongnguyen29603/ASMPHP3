@extends('templates.layout')
@section('content')

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Mô tả</th>
        <th>Chương trình</th>
        <th>Danh mục</th>
        <th>thao tác</th>
    </tr>
    <tbody>
        @foreach ($khoa_hoc as $item)
            <tr>
            <td>{{$item->idkh}}</td>
            <td>{{$item->namekh}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->describe}}</td>
            <td>{{$item->process}}</td>
            <td>
                <option value="{{$item->id}}">{{$item->name}}</option>
            </td>
            <td>
                <td><a href="{{route('route_khoa_hoc_edit',['id'=>$item->idkh])}}">Sửa</a></td>
                <td><a href="{{route('route_khoa_hoc_delete',['id'=>$item->idkh])}}">Xóa</a></td>
            </td>
            </tr>  
        @endforeach
    </tbody>
</table>
<button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="{{route('route_khoa_hoc_add')}}">New khóa học</a></button>
@endsection

