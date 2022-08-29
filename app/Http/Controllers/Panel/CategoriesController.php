<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    public function index()
    {
        $title = 'Kategoriler';
        $counter = 1;
        $categories = Category::with('top_category')->orderBy('id','ASC')->paginate(10);
        return view('panel/categories/categories', ['title' => $title, 'counter' => $counter, 'categories' => $categories]);
    }

    public function create_get()
    {
        $title = 'Kategoriler';
        $categories = Category::with('top_category')->orderByDesc('id')->get();
        return view('panel/categories/categoriesManage',['title' => $title, 'categories' => $categories]);
    }

    public function create_post(Request $request)
    {
        $redirect = redirect()->route('panel.categories.categories');
        $data = $request->except('_token');

        try {
            $category = new Category();
            $category->top_id = $data['top_id'];
            $category->name = $data['name'];
            $category->slug = Str::slug(request('name'));
            request()->merge(['slug'=>$data['slug']]);
            $category->save();
            $redirect->with('success', __('messages.message_create_success'));

        } catch (Exception $e) {
            $redirect->with('error', $e->getMessage());
        }

        return $redirect;
    }

    public function update_get($id)
    {
        $title = 'Kategoriler';
        $categories = Category::with('top_category')->orderByDesc('id')->get();
        //Listing to update role information
        try {
            $category = Category::find($id);
            if ($category) {
                return view('panel/categories/categoriesManage', ['category' => $category, 'title' => $title, 'categories' => $categories]);
            } else {
                return redirect()->route('panel.categories.categories')->with('error', __('messages.not_found_resource'));
            }
        } catch (Exception $e) {
            return redirect()->route('panel.categories.categories')->with('error', $e->getMessage());
        }
    }

    public function update_post(Request $request, $id)
    {
        $redirect = redirect()->route('panel.categories.categories');
        $request->except('_token');
        try {
        $data = request()->only('name','slug','top_id');
            if(request()->filled('slug')) {
                $data['slug'] = Str::slug(request('name'));
                request()->merge(['slug'=>$data['slug']]);
            }
            $this->validate(request(),[
                'name'=>'required',
                'slug'=>(request('original_slug')!=request('slug') ? 'unique:categories,slug' : '')//kategori tablosundaki slug değerini kontrol eder
            ]);

            $categories=Category::where('id',$id)->firstOrFail();
            $categories->update($data);

            $redirect->with('success', __('messages.message_create_success'));

        } catch (Exception $e) {
            $redirect->with('error', $e->getMessage());
        }

        return $redirect;
    }

    public function delete($id) {
        try {
            return Category::destroy($id);
        } catch (Exception $e) {
            return response(['message' => $e->getMessage()], 404);
        }
    }
}
