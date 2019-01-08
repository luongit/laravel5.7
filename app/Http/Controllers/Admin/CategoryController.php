<?php 
namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Cache;
class CategoryController extends \App\Http\Controllers\Controller
{
    public function all(){
    	$cats = Category::s()->paginate(15);
        return view('admin.category.all',compact('cats'));
    }

    public function add(){
        return view('admin.category.add');
    }

    public function post_add (Request $request){
       $this->validate($request,[
          'name' => 'required|unique:category,name',
          'slug' => 'required|unique:category,slug'
       ]);  

       if (Category::create($request->all())) {
        return redirect()->back()->with('ok','Thêm mới danh mục thành công');
       }

        return redirect()->back()->with('err','Thêm mới danh mục không thành công');
    }

    public function delete($id){

       if (Category::destroy([$id])) {
        Cache::flush();
       	return redirect()->back()->with('ok','Xóa danh mục thành công');
       }

       	return redirect()->back()->with('err','Xóa danh mục không thành công');
    }

    
}