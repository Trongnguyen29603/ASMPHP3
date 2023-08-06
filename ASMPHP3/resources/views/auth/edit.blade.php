@extends('templates.layout')
@section('content')
<form action="{{route('route_account_edit',['id'=>$account->id]) }}" method="POST">
    @csrf
    <h1>Sửa Account</h1>
    <div class="mb-3">  
        <label class="form-label">Tên </label>
        <input type="text" value="{{$account->name}}" class="form-control" name="name">
    </div>
    <div class="mb-3">  
        <label class="form-label">Tên email</label>
        <input type="text" value="{{$account->email}}" class="form-control" name="email">
    </div>
    <div class="mb-3">  
        <label class="form-label">password</label>
        <input type="text" value="{{$account->password}}" class="form-control" name="password">
    </div>
    <div class="mb-3">  
        <label class="form-label">Role</label>
       
        <select class="form-select" aria-label="Default select example" name="role">
            <option selected>Chọn Role</option>
            <option value="0" @if($account->role == 0) selected @endif>Admin</option>
            <option value="1" @if($account->role == 1) selected @endif>User</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection