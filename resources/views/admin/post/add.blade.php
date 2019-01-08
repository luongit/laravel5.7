@extends('layout.admin')
@section('title','Bài viết')
@section('content')
<form action="" method="POST" >
<div class="row">
  <div class="col-8">
    <div class="card">
      
            <div class="card-body">                
                	<div class="form-group">
                		<label for="">Tiêu đề bài viết</label>
                		<input class="form-control" name="name" placeholder="Tiêu đề " id="name">
                     @if($errors->has('name'))
                      <div class="help-block">
                        {{$errors->first('name')}}
                      </div>
                    @endif
                	</div>
                	<div class="form-group">
                    <label for="">Đường đãn tĩnh</label>
                    <input class="form-control" name="slug" placeholder="Đường đãn tĩnh " id="slug">
                     @if($errors->has('name'))
                      <div class="help-block">
                        {{$errors->first('name')}}
                      </div>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="">Nội dung mô tả</label>
                    <textarea name="content" id="content" class="form-control" rows="3" placeholder="Nội dung mô tả chi tiết của bài viết..."></textarea>
                    
                     @if($errors->has('content'))
                      <div class="help-block">
                        {{$errors->first('content')}}
                      </div>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-primary">Thêm mới</button>
            </div>
        </div>
         
    </div>
    <div class="col-4">
    <div class="card">
        <div class="card-body">                
              <div class="form-group">
                <label for="">Danh mục</label>
                {{radioCategory($cats)}}
                 @if($errors->has('name'))
                  <div class="help-block">
                    {{$errors->first('name')}}
                  </div>
                @endif
              </div>
              
              <div class="form-group">
                <div class="row">
                  <div class="col-4">
                    <label for="">Trạng thái</label>
                      <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="status-1" name="status" value="1" checked>
                            <label class="custom-control-label" for="status-1">Hiển thị</label>
                      </div>
                      <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="status-0" name="status" value="0">
                            <label class="custom-control-label" for="status-0">Ẩn</label>
                      </div>
                  </div>
                  <div class="col-4">
                    <label for="">Nổi bật</label>
                      <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="is_host-1" name="is_host" value="1" >
                            <label class="custom-control-label" for="is_host-1">Có</label>
                      </div>
                      <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="is_host-0" name="is_host" value="0" checked>
                            <label class="custom-control-label" for="is_host-0">Không</label>
                      </div>
                  </div>
                  <div class="col-4">
                    <label for="">Trang chủ</label>
                      <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="is_home-1" name="is_home" value="1" checked>
                            <label class="custom-control-label" for="is_home-1">Có</label>
                      </div>
                      <div class="custom-control custom-radio">
                          <input type="radio" class="custom-control-input" id="is_home-0" name="is_home" value="0">
                            <label class="custom-control-label" for="is_home-0">Không</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Ảnh đại diện</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image_field" name="f">
                    <label class="custom-file-label" for="image_field">Chọn file...</label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
        </div>
    </div>
  @csrf
</div>
</form>

@stop()