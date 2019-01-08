<?php 
namespace App\Http\Controllers\Admin;
use App\Models\Media;
class ApiController extends \App\Http\Controllers\Controller
{

    public function mediaFile(){
    	$results = [];

        $files = Media::orderBy('base_name')->get();
		if (request()->folder) {
			$dir = request()->folder;
			session(['upload_dir'=> $dir]);
			$files = Media::orderBy('base_name')->where('upload_dir',$dir)->get();
		}
	
		foreach ($files as $m) {
			// dd($m);
			$results[] = [
				'id' => $m->id,
				'full_name' => $m->full_name,
				'base_name' => $m->base_name,
				'full_link' => $m->full_link,
				'base_link' => $m->base_link,
				'base_link' => $m->base_link,
				'upload_dir' => $m->upload_dir,
				'path' => $m->upload_dir.$m->full_name,
				'alt' => $m->alt,
				'ext' => $m->ext,
				'created_at' => $m->created_at,
				'size' => formatSizeUnits($m->file_size)
			];
		}
		
		// removeFileNotExists($files);
		// dd($results);
		return $results;
    }

    public function clear_path(){
    	session(['upload_dir'=> '']);
    }
    public function mediaFolder(){
        $dir = config('upload.path');
		$_dirs = scan_dir_array(dir);
		return $_dirs;
    }
    public function makeFolder(){
    	$path = request()->path;
        if (file_exists($path)) return ['exists'];
        if(mkdir($path)) 
        	session(['upload_dir'=> '']);
        	return ['ok'];
        return 'er';
		
    }
    public function emptyFolder(){
    	$path = request()->path;
        $files = glob($path.'/{,.}*', GLOB_BRACE);
		foreach($files as $file){ // iterate files
		  if(is_file($file))
		    unlink($file); // delete file
		}
		
    }

    public function delFolder(){
    	$dir = request()->path;
        
		$it = new \RecursiveDirectoryIterator($dir, \RecursiveDirectoryIterator::SKIP_DOTS);
		$files = new \RecursiveIteratorIterator($it,
		             \RecursiveIteratorIterator::CHILD_FIRST);
		foreach($files as $file) {
		    if ($file->isDir()){
		        rmdir($file->getRealPath());
		    } else {
		        unlink($file->getRealPath());
		    }
		}
		session(['upload_dir'=> '']);
		rmdir($dir);
		
    }

    public function delFIle($id){
    	$m = Media::find($id);
    	if ($m && Media::destroy([$id])) {
    		removeFile($m->upload_dir.$m->full_name);
    		\Cache::flush();
    	}
    }
}
?>