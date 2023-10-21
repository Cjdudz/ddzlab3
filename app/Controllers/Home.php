<?php

namespace App\Controllers;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use App\Models\UserModel;
class Home extends BaseController
{
    private $categories;
    private $products;
    private $user;
    public function __construct(){
        $this->categories = new CategoryModel();
        $this->products = new ProductModel();
        $this->user = new UserModel();
    }
    public function index()
    {
        $data['categories']= $this->categories->findAll();
        $data['products' ]= $this->products->findAll();
        return view('home', $data);
    }
    public function categories($category_id) {
        $categories = $this->categories->findAll();
        $products = $this->products->where('category_id', $category_id)->findAll();
            $data = [
            'categories' => $categories,
            'products' => $products,
        ];
        return view('include/collection', $data);
    }
    
    public function product($product_id){
        $product = $this->products->where('product_id', $product_id)->first();
        if (!$product) {
            return redirect()->to(base_url('/'));
        }
            $category_id = $product['category_id'];
            $category = $this->categories->find($category_id);
        if (!$category) {
            return redirect()->to(base_url('/'));
        }
            $categories = $this->categories->findAll();
        $data = [
            'product' => $product,
            'category' => $category,
            'categories' => $categories
        ];
        return view('include/collection', $data);
    }
    
    public function collection()
    {
        $data['products']=$this->products->findAll();
        $data['categories'] = $this->categories->findAll();
        return view('include/collection', $data);
    }
    public function special()
    {
        $data['products']=$this->products->findAll();
        $data['categories'] = $this->categories->findAll();
        return view('include/special', $data);
    }
    public function blog()
    {
        return view('include/blog');
    }
    public function about()
    {
        return view('include/about');
    }
    public function popular()
    {
        $data['products']=$this->products->findAll();
        $data['categories'] = $this->categories->findAll();
        return view('include/popular', $data);
    }
    public function admin()
{
    $data['category'] = $this->categories->findAll();
    $data['products'] = $this->products->findAll();
    return view('admin', $data);
}


    public function add() {
        $product_id = $this->request->getPost('product_id');
        $image = $this->request->getFile('image');
        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        $price = $this->request->getPost('price');
        $category = $this->request->getPost('category');
        $quantity = $this->request->getPost('quantity');
        $newName = '/' . $name . '.' . $image->getClientExtension();
        $image->move(ROOTPATH . 'public/', $newName);
        $data = [
            'image' => $newName,
            'name' => $name,
            'description' => $description,
            'price'  => $price,
            'category' => $category,
            'quantity' => $quantity
        ];
    
        if ($product_id) {
            $existing_product = $this->products->find($product_id);
    
            if ($existing_product) {
                $this->products->update($product_id, $data);
            } else {
                $this->products->insert($data);
            }
        } else {
            $this->products->insert($data);
        }
    
        return redirect()->to(base_url('/admin'));
    }
    public function delete($product_id)
    {
        $this->products->delete($product_id);
        return redirect()->to(base_url('/admin'));
    }
}