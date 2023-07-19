@extends('templates.layout')
@section('content')

<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Thao tác</th>
    </tr>
    <tbody>
        @foreach ($categorys as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>
                <td><a href="{{route('route_category_edit',['id'=>$item->id])}}">Sửa</a></td>
                <td><a href="{{route('route_category_delete',['id'=>$item->id])}}">Xóa</a></td>
            </td>
            </tr>  
        @endforeach
    </tbody>
</table>
<button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="/category/add">New Category</a></button>
@endsection

