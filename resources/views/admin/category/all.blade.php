@extends('layout.admin')
@section('title','Danh mục bài viết')
@section('content')
<div class="row">
  <div class="col-4">
        <div class="card">
            <div class="card-body">
                <form method="POST" class="form" action="{{route('admin.category_add')}}">
                
                  <div class="form-group @if($errors->has('name')) has-error @endif">
                    <label for="">Tên danh mục</label>
                    <input class="form-control" name="name" placeholder="Tiêu đề ">
                    @if($errors->has('name'))
                      <div class="help-block">
                        {{$errors->first('name')}}
                      </div>
                    @endif
                  </div>
                  <div class="form-group @if($errors->has('slug')) has-error @endif">
                    <label for="">Đường dẫn tĩnh</label>
                    <input class="form-control" name="slug" placeholder="Đường dẫn tĩnh ">
                    @if($errors->has('slug'))
                      <div class="help-block">
                        {{$errors->first('slug')}}
                      </div>
                    @endif
                  </div>
                  <div class="form-group @if($errors->has('parent')) has-error @endif">
                    <label for="">Danh mục cha</label>
                    <input class="form-control" name="parent" placeholder="Danh mục cha ">
                    @if($errors->has('parent'))
                      <div class="help-block">
                        {{$errors->first('parent')}}
                      </div>
                    @endif
                  </div>
                  <div class="form-group @if($errors->has('ordering')) has-error @endif">
                    <label for="">Sắp xếp</label>
                    <input class="form-control" name="ordering" placeholder="Sắp xếp ">
                    @if($errors->has('ordering'))
                      <div class="help-block">
                        {{$errors->first('ordering')}}
                      </div>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-success">Thêm mới</button>
                  @csrf
                </form>
            </div>
        </div>
    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form action="" method="GET" class="form-inline" role="form">
                
                	<div class="form-group">
                		<input class="form-control" name="name" placeholder="Tiêu đề ">
                	</div>
                
                  <button type="submit" class="btn btn-primary">Tìm kiếm</button> 
                  <a href="{{route('admin.category_all')}}" style="margin-left: 15px" class="btn btn-danger">Làm mới</a>
                </form>
            </div>
            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Tiêu đề</th>
                      <th scope="col">Ngày tạo</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($cats as $model)
                    <tr>
                      <th scope="row">{{$model->id}}</th>
                      <td>{{$model->name}}</td>
                      <td>{{$model->created_at}}</td>
                      <td>
                        <a href="{{route('admin.category_edit',['id'=>$model->id])}}" class="label label-success">Sửa</a>
                      	<a href="{{route('admin.category_delete',['id'=>$model->id])}}" class="label label-danger" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
            </table>
            <div class="card-body">
                {{$cats->appends(request()->only('name'))->links()}}
            </div>
        </div>
    </div>
</div>

@stop()