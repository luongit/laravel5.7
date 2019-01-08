@extends('layout.blank')
@section('title','Quản lý file')
@section('content')
<div class="row">
    <ul id="context" class="dropdown-menu" role="menu" >
        <li><a  href="#" class="empty_folder"><i class="fa fa-folder-open-o" ></i> Làm rỗng</a></li>
        <li><a  href="#" class="del_folder"><i class="fa fa-trash" ></i> Xóa thư mục</a></li>
        <li><a  href="#" class="create_folder"><i class="fa fa-folder-open" ></i> Tạo thư mục</a></li>
    </ul>
    <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h3 class="panel-title">Thư mục
                    <div class="pull-right">
                        <a href="" title="Tạo mới thư mục" class="show_new_input_folder btn btn-xs btn-default"><i class="fa fa-folder"></i></a>
                    </div>
                </h3>
            </div>
            <ul class="file-tree">
                <li class="folder-root new-folder"  id="new-root" style="display: none">
                    <input style="height: 20px; width: 100px" id="input_root_folder" placeholder="Thư mục mới..."> 
                    <a href="" data-url="{{base_path('uploads/')}}" title="Lưu lại" class="make_root_folder">
                        <i class="fa fa-check-circle"></i>
                    </a>
                </li>
            @foreach($dirs as $dir)

                <li class="folder-root" id="root-{{$dir['name']}}"><a href="#" class="tree-item" data-url="{{base_path('uploads/'.$dir['name'])}}/" data-name="{{$dir['name']}}">{{$dir['name']}}</a>
                  <ul>
                    <li class="folder-root new-folder" style="display: none" id="new-{{$dir['name']}}">
                        <input style="height: 20px;width: 100px" placeholder="Thư mục mới..." id="{{$dir['name']}}"> <a href="" data-url="{{base_path('uploads/'.$dir['name'])}}" title="Lưu lại" class="make_folder">
                        <i class="fa fa-check-circle" ></i>
                    </a></li>
                    @foreach($dir['items'] as $sdir)
                    <li class="folder-root"><a href="#" class="tree-item" data-url="{{base_path('uploads/'.$dir['name'].'/'.$sdir['name'])}}/">{{$sdir['name']}}</a> 
                    </li>
                    @endforeach
                    
                  </ul>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-7">
        <div class="row">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Thư mục <b><% currenr_Folder %></b>
                    <div class="pull-right">
                        <a href="" title="Trình tải file" class="btn btn-xs btn-default show_upload"><i class="fa fa-upload"></i></a>
                    <a href="" title="Làm mới" ng-click="refresh_file()" class="btn btn-xs btn-default"><i class="fa fa-refresh"></i></a>
                        <input placeholder="Tìm kiếm tên file" ng-model="file_name" style="padding:2px 5px">
                    </div>
                </h3>
            </div>
            <div class="panel-body">
               <!--  <form   method="POST" action="{{route('admin.upload')}}"  enctype="multipart/form-data">
                     <input type="file" name="file">
                     <input type="submit" name="">
                      @csrf
                    </form> -->
                <div id="dropzone" class="upload-entry" style="display: none">
                    <form class="dropzone" method="POST" action="{{route('admin.upload')}}" id="media-upload">
                      <div class="dz-message">    
                        <p>Click chọn hoặc kéo thả file ảnh vào đây.</p>
                        <span class="note">(Có thể upploads <b>{{$max_file}} file</b>, kích thước file tối đa <b>{{$max_size}}/ file</b>)</span>
                      </div>
                      @csrf
                    </form>
                  </div>
       
                <div class="grid" id="list-files">
                    <div class="col-sm-6 col-md-3 grid-item thumbnail" ng-repeat="f in files | filter:file_name">
                        <a href="" ng-click="show_file_info(f)" class="file-item">
                            <img ng-src="<% f.full_link %>" alt="">
                        </a>
                        <div class="tool-acction text-center">
                            <a href="" ng-click="del_file(f.id)" title="Xóa file" class="btn btn-xs btn-default">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                            <a  ng-href="<% f.full_link %>" title="Xem file <% f.full_name %>" class="btn btn-xs btn-default"  data-lightbox="files">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
       </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Thông tin file</h3>
            </div>
            <div class="panel-body" ng-show="file">
                <form action="" method="POST" role="form">                        
                     <div class="form-group">
                        <img ng-src="<%file.full_link%>" alt="" class="img-responsive">
                    </div>
                    <div class="form-group">
                        <label for="">Alt ( Nội dung mô tả )</label>
                        <input type="text" ng-model="file.alt" class="form-control" >
                        <button type="button" class="btn btn-link" ng-click="update_alt(file.d)">Cập nhật alt</button>
                    </div>
                    <div class="info_file_info">
                        <p><b>Tên file:</b> <%file.full_name%></p>
                        <p><b>Kích thước:</b> <%file.size%></p>
                        <p><b>Link cơ bản:</b> <%file.base_link%></p>
                        <p><b>Link full:</b> <%file.full_link%></p>
                        <p><b>Thư mục upload:</b> <%file.upload_dir%></p>
                        <p><b>Ngày upload:</b> <%file.created_at.date%></p>
                    </div>
                    <button type="button" data-href="<% file.full_link %>" class="btn btn-primary select-file-item">Chọn ảnh</button>
                    <button type="button" class="btn btn-danger" ng-click="del_file(file.id)">Xóa file</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@stop()