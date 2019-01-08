var angularapp = angular.module('app', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

angularapp.controller('AppController',function($scope,$http){

	fd = sessionStorage.getItem('fd');
	function get_medis(folder=''){
		if (folder) {
			_file_url = app._admin_url + 'media-file?folder='+folder
		}else{
			_file_url = app._admin_url + 'media-file';
		}

		$http.get(_file_url).then(function(res){
			$scope.files = res.data;
		});
	}

	
	if (fd) {
		get_medis(fd);
		var folder = fd.substring(fd.lastIndexOf('uploads')-1);
		$scope.currenr_Folder = folder.replace('\\uploads/','');
	}else{
		get_medis();
		$scope.currenr_Folder = 'root';
	}
	$(document).on('click','a.tree-item',function(e){
		e.preventDefault();
		var fd = $(this).data('url');
		// $('li.folder-root').removeClass('open').addClass('closed');
		// $(this).parent().toggleClass('closed').toggleClass('open');
		if (fd) {
			sessionStorage.setItem('fd',fd);
			get_medis(fd);
			var folder = fd.substring(fd.lastIndexOf('uploads')-1);
			$scope.currenr_Folder = folder.replace('\\uploads/','');
		}else{
			get_medis();
			$scope.currenr_Folder = 'root';
		}


	});

	$(document).on('click','a.empty_folder',function(e){
		e.preventDefault();
		var fd = $(this).data('url');
		_empty_url = app._admin_url + 'empty-folder?path='+fd;
		if (confirm('bạn có chắc muốn làm rỗng thư mục')) {
			$http.get(_empty_url).then(function(res){
				location.reload();
			});
		}
	});
	$(document).on('click','a.del_folder',function(e){
		e.preventDefault();
		var fd = $(this).data('url');
		// alert(fd);
		_del_url = app._admin_url + 'del-folder?path='+fd;
		if (confirm('bạn có chắc muốn xóa')) {
			$http.get(_del_url).then(function(res){
				location.reload();
			});
		}
		
	});
	$(document).on('click','a.create_folder',function(e){
		e.preventDefault();
		var name = $(this).data('name');
		$('li.folder-root').removeClass('open').addClass('closed');
		$('#root-'+name).addClass('open');
		$('li.new-folder').hide();
		$('#new-'+name).show();
	});

	$(document).on('click','a.show_new_input_folder',function(e){
		e.preventDefault();
		$('li.folder-root').removeClass('open').addClass('closed');
		$('li.new-folder').hide();
		$('#new-root').show();
	});
	$(document).on('click','a.show_upload',function(e){
		e.preventDefault();
		$('.upload-entry').slideToggle();
	});

	$(document).on('click','a.make_folder',function(e){
		e.preventDefault();
		var fd = $(this).data('url');
		var id = fd.substring(fd.lastIndexOf("/")+1); 
		var val = $('#'+id).val();
		_make_url = app._admin_url + 'make-folder?path='+fd+'/'+val;

		$http.get(_make_url).then(function(res){
			if (res.data == 'ok') {
				$('#'+id).val('');
				location.reload();
			}else if(res.data == 'exists'){
				alert('Thư mục đã tồn tại');
			}else{
				alert('Có lỗi');
			}
		});
		
	});
	$(document).on('click','a.make_root_folder',function(e){
		e.preventDefault();
		var url = $(this).data('url');
		var val = $('#input_root_folder').val();
		_make_url = app._admin_url + 'make-folder?path='+url+'/'+val;
		$http.get(_make_url).then(function(res){
			
			if (res.data == 'ok') {
				$('#input_root_folder').val('');
				location.reload();
			}else if(res.data == 'exists'){
				alert('Thư mục đã tồn tại');
			}else{
				alert('Có lỗi');
			}
		});
		
	});

	$scope.refresh_file = function(){
		get_medis();
		sessionStorage.clear();
		$scope.currenr_Folder = 'root';
		_clear_url = app._admin_url + 'clear-path';
		// alert(_clear_url);
		$http.get(_clear_url).then(function(res){});
		$('li.folder-root').removeClass('open').addClass('closed');
	}

	var md = new Dropzone(".dropzone", {
	    // maxFilesize: "5", 
	    // addRemoveLinks: true 
	});
	md.on("complete", function (file) {
	    if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
	    	if (fd) {
	    		get_medis(fd);
	    	}else{
		       get_medis();
	    	}
	    }

	    md.removeFile(file); 
	});

	$scope.show_file_info = function(f){
		$scope.file = f;
	}	

	$scope.del_file = function(id){
		_del_url = app._admin_url + 'del-file/'+id;
		if(confirm("Bạn có chác achans muốn xóa file này?")){
			$http.get(_del_url).then(function(res){
				$scope.file = false;
				get_medis();
			})
		}
	}
});

