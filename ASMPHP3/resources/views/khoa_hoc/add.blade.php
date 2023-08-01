@extends('templates.layout')
@section('content')
<form action="{{route('route_khoa_hoc_add')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1>Thêm khóa học</h1>
    <div class="mb-3">  
        <label class="form-label">Tên khóa hoc</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">  
        <label class="form-label">Tên giảng viên</label>
        <input type="text" class="form-control" name="name_gv">
    </div>
    <div class="mb-3">  
        <label class="form-label">Giá</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">  
        <label class="form-label">Mô tả</label>
        <input type="text" class="form-control" name="describe">
    </div>
    {{-- image --}}
    <div class="mb-3">  
        <label class="form-label">Chương trình học</label>
        <input type="text" class="form-control" name="process">
        <div class="form-group">
            <label class="col-md-3 col-sm-4 control-label">Ảnh khóa học</label>
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-xs-6">
                        <img id="mat_truoc_preview" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image"
                             style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                        <input type="file" name="image" accept="image/*"
                               class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                        <label for="cmt_truoc">Mặt trước</label><br/>
                    </div>
                </div>
            </div>
    </div>
    {{-- image --}}
    </div>   <div class="mb-3">  
        <label class="form-label">Loại khóa học</label>
        <select name="id_category" id="">
             @foreach($categorys as $loai)
                <option value="{{$loai->id}}">{{$loai->name}}</option>
             @endforeach 
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-success"><a style="text-decoration: none; color:white" href="{{route('route_khoa_hoc_index')}}">list</a></button>
</form> 
@endsection
@section('script')
  <script>
    $(function(){
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $(selector).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#cmt_truoc").change(function () { //#cmt_truoc  là id của input file
            readURL(this, '#mat_truoc_preview');//$mar_truoc_preview là id của ảnh để file 
        });

    });
</script>
@endsection