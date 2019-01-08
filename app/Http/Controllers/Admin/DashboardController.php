<?php 
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Media;
use Cache;
class DashboardController extends \App\Http\Controllers\Controller
{
    public function index(){
        return view('admin.index');
    }

    public function media(){
    	$media = Media::all();
    	// dd($media);
    	removeFileNotExists($media,new Media);

    	$max_file = ini_get('max_file_uploads');
    	$max_size = ini_get('upload_max_filesize');
    	$dirs = scan_dir_array(base_path('uploads'));
    	return view('admin.media',compact('max_file','max_size','dirs'));
    }

    public function media_pload(Request $request){
    	$_sub_fd = '';
        $_path =  config('upload.path');
        if (session('upload_dir')) {
        	$_path = session('upload_dir');
        	if (config('upload.path') != $_path) {
        		$_path .='/';
        		$_sub_fd = str_replace(base_path(), '', $_path);
	        	$_sub_fd = str_replace('\uploads/', '', $_sub_fd);
	        	$_sub_fd =  str_replace('//', '/', $_sub_fd);
        	}
        	
        }
        if ($request->hasFile('file')) {
        	$FileName = $request->file->getClientOriginalName();
        	$_size = $request->file->getSize();
	        $info = pathinfo($_path.$FileName);
	        $_name = set_file_name($info['filename']);
	        $_ext = strtolower($info['extension']);
	        // echo $_path;die;
	        $file_name = $_name.'.'.$_ext;
	        
	       
	        if (file_exists($_path.$file_name))
			{
				$i = 1;
				while(file_exists($_path.$_name."-".$i.".".$_ext)) {
					$i++;
				}

				$file_name = $_name."-".$i.".".$_ext;
			}

	        if($request->file->move($_path, $file_name)){
	        	$full_link =  url('/').'/uploads/'.$file_name;
        		if ($_sub_fd) {
		        	$full_link =  url('/').'/uploads/'.$_sub_fd.$file_name;
		        	$base_link =  '/uploads/'.$_sub_fd.$file_name;
		        	$base_link =  str_replace('//', '/', $base_link);
		        	$_path =  str_replace('//', '/', $_path);
		        }

	        	$mdd = Media::create([
					'full_name' => $file_name,
					'base_name' => $_name,
					'alt' => $file_name,
					'base_link' => $base_link,
					'full_link' => $full_link,
					'upload_dir' => $_path,
					'ext' => $_ext,
					'file_size' => $_size
	        	]);
	        	 Cache::flush();
	        }

	       

        }        
    }

}