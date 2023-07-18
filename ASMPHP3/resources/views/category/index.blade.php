@extends('templates.layout')
@section('content')

<table border="1">
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
                <a href="category/edit/{{$item->id}}" >Sửa</a>
            </td>
            </tr>  
        @endforeach
    </tbody>
</table>
<button  class="btn btn-primary ml-5 "><a style="text-decoration: none; color: white;" href="/category/add">New Category</a></button>
@endsection

