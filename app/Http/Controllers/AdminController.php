<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAdmin;

class AdminController extends Controller
{
    public function index()
    {
        return view('administrator.admin');
    }
    public function loadProducts()
    {
        $products = Products::paginate(4);
        return view('administrator.products.products', compact('products')); 
    }
    public function loadArticles()
    {
        $articles = Articles::paginate(4);
        return view('administrator.articles.articles', compact('articles')); 
    }
    public function destroyproduct($id)
    {
        $product = Products::findOrFail($id); 
        $product->delete();

        return redirect()->back()->with('success', 'Sản phẩm đã được xóa thành công!');
    }
    public function destroyarticle($id)
    {
        $article = Articles::findOrFail($id);
        $article->delete();

        return redirect()->back()->with('success', 'Bài viết đã được xóa thành công!');
    }
    public function createproduct()
    {
        return view('administrator.products.addProducts');
    }
    public function storeproduct(Request $request)
    {
     $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'purchase_price' => 'required|numeric',
        'sale_price' => 'required|numeric',
        'quantity' => 'required|numeric',
        'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048', 
    ]);
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension(); 
        $request->image->move(public_path('images/product'), $imageName);  
    } else {
        $imageName = null; 
    }
    Products::create([
        'name' => $validatedData['name'],
        'purchase_price' => $validatedData['purchase_price'],
        'sale_price' => $validatedData['sale_price'],
        'quantity' => $validatedData['quantity'],
        'image' => $imageName, 
    ]);
    return redirect()->back()->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    public function editproduct($id){
        $product = Products::findOrFail($id);
        return view('administrator.products.editProducts', compact('product'));

    }
    public function updateproduct(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'purchase_price' => 'required',
            'sale_price' => 'required',
            'quantity' => 'required',
            'image' => 'nullable|image',
        ]);
    
        $product = Products::findOrFail($id);
        $product->name = $request->name;
        $product->purchase_price = $request->purchase_price;
        $product->sale_price = $request->sale_price;
        $product->quantity = $request->quantity;
    
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images/product'), $imageName);
            $product->image = $imageName;
        }
    
        $product->save();
        
        return redirect()->back()->with('success', 'Sản phẩm đã được cập nhật!');
    }

    public function createarticle()
    {
        return view('administrator.articles.addArticles');
    }
    public function storearticle(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|numeric',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048', 
        ]);
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension(); 
            $request->image->move(public_path('images/articles'), $imageName);  
        } else {
            $imageName = null; 
        }
        Articles::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'image' => $imageName, 
        ]);
        return redirect()->back()->with('success', 'Bài viết đã được thêm thành công!');

    }
    public function editarticle($id){
        $article = Articles::findOrFail($id);
        return view('administrator.articles.editArticles', compact('article'));

    }
    public function updatearticle(Request $request, $id)
{
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'nullable|image',
    ]);

    $article = Articles::findOrFail($id);
    $article->update($request->only(['title', 'content'])); // Cập nhật tiêu đề và nội dung

    // Kiểm tra nếu có ảnh mới
    if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images/articles'), $imageName);
        $article->image = $imageName; // Gán tên ảnh vào trường image của bài viết
    }

    $article->save(); // Lưu lại các thay đổi (bao gồm trường image nếu có)

    return redirect()->back()->with('success', 'Bài viết đã được cập nhật!');
}

    
}
