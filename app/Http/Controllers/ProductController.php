<?php

namespace App\Http\Controllers;

use App\Products;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // } 



    function listProduct()
    {
        return Products::all();
    }

    function viewAllProducts()
    {
        return view('admin.viewAll')->with('products',Products::all());
    }



    // S O A P S 
    function viewAllSoaps()
    {
        $soaps = Products::where('categoryID', '=', 1)->get();
        return view('user.soaps')->with('soaps', $soaps);
    }
    function findSoap($id)
    {
        $soap=Products::find($id);
        return view('user.viewSoap')->with('soap',$soap);
    }
    //Admin
    function viewProduct($id)
    {
        $product=Products::find($id);
        return view('admin.viewProduct')->with('product',$product);

    }

    // C A N D L E S

    function viewAllCandles()
    {
        $candles = Products::where('categoryID', '=', 2)->get();
        return view('user.candles')->with('candles', $candles);
    }

    function findCandle($id)
    {
        $candle=Products::find($id);
        return view('user.viewCandle')->with('candle',$candle);

    }


// Add
    function addProductView()
    {   
        $category=Category::all();
        return view('admin.addProduct')->with('category',$category);
    }

    function addProduct()
    {
        $data = request()->except(['submit']);
        
       
        $img_profile = $_FILES['pic']['name'];
        $tmp_dir = $_FILES['pic']['tmp_name'];
        $curr_date = date('dMy');
        $curr_time = date('hisa');
        $concat = $curr_date . $curr_time;
        $target = "./imgs/" . $concat . $img_profile;
        $data['pic'] = $target;
        (move_uploaded_file($tmp_dir, $target));
         $product=Products::create($data);
        return view('admin.dashboard');
    }
        /**************UPDATE**************/ 
    function updateProductView($id)
    {
        $product=Products::find($id);
        $category=Category::all();
        $curr=Category::findOrFail($product->categoryID);
        return view('admin.updateProduct')->with('product',$product)->with('category',$category)->with('curr',$curr);
    }
    

    function updateProduct($id)
    {   
    
        $data=request()->except(['submit']);
        $img_profile=$_FILES['pic']['name'];
        $tmp_dir=$_FILES['pic']['tmp_name'];
        $curr_date=date('dMy');
        $curr_time=date('hisa');
        $concat=$curr_date.$curr_time;
        $target = "./imgs/" . $concat . $img_profile;
        $data['pic']=$target;
        (move_uploaded_file($tmp_dir, $target));

        $product = Products::findOrFail($id);
       
          $product->update($data); 
          return response()->json($product,200);
      
    }

    //DELEETE  
    function deleteProduct($id)
    {
        $product=Products::find($id);
        $product->delete();
        return Redirect::back();
    }

    
    

    
    

    

}
