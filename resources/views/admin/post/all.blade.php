@extends('layout.admin')
@section('title','Bài viết')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST" class="form-inline" role="form">
                
                	<div class="form-group">
                		<label class="sr-only" for="">label</label>
                		<input type="email" class="form-control" name="name" placeholder="Tiêu đề ">
                	</div>
                	<div class="form-group">
                		<label class="sr-only" for="">label</label>
                		<select name="category_id" id="inputCategory_id" class="form-control" required="required">
                			<option value="">1</option>
                			<option value="">1</option>
                			<option value="">1</option>
                			<option value="">1</option>
                		</select>
                	</div>
                
                	<button type="submit" class="btn btn-primary">Tìm kiếm</button>
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
                  @foreach($posts as $model)
                    <tr>
                      <th scope="row">{{$model->id}}</th>
                      <td>{{$model->name}}</td>
                      <td>{{$model->created_at}}</td>
                      <td>
                      	<a href="{{route('admin.post_edit',['id'=>$model->id])}}" class="label label-success">Sửa</a>
                        <a href="{{route('admin.post_delete',['id'=>$model->id])}}" class="label label-danger" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
            </table>
            <div class="card-body">
                {{$posts->appends(request()->only('name','category_id'))->links()}}
            </div>
        </div>
    </div>
</div>

@stop()