<?php 
namespace App\Http\Controllers\Admin;
use App\Models\Post;
use App\Models\Category;
use Cache;
use QueryCache;

class PostController extends \App\Http\Controllers\Controller
{
    public function all(){
  
    	$posts = Post::paginate(15);
    	
        return view('admin.post.all',compact('posts'));
    } 

    public function add(){
  
    	$cats = Category::orderBy('name')->get();
    	
        return view('admin.post.add',compact('cats'));
    }

    public function delete($id){

       if (Post::destroy([$id])) {
        Cache::flush();
       	return redirect()->back()->with('ok','Xóa bài viết thành công');
       }
       	return redirect()->back()->with('err','Xóa bài viết không thành công');
    }
}