<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Prouduct;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        if (isset($request->keySearch)) {
            $listProductDB = DB::table('products')->where('name', 'like', '%' . $request->keySearch . '%')->paginate(5);
        } else {
            $listProductDB = DB::table('products')->paginate(5);
        }

        return view('productList', ['productListView' => $listProductDB]);
    }
    public function add()
    {
        return view('addProduct');
    }

    public function show($id)
    {
        $productDB = DB::table('products')->where('id', '=', $id)->first();
        return view('viewProduct', ['product' => $productDB]);
    }

    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|max:5',
            'price' => 'required',
        ]);

        // $validated = $request->validated();

        //lay ra ten file anh
        $tenanh = $request->imgProduct->getClientOriginalName();
        //upload anh len thu muc imgs trong public/imgs
        $request->imgProduct->move(public_path('imgs'), $tenanh);
     
        $resultDB = DB::table('products')->insert(
            [
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'description' => $request->description,
                'expired' => $request->expired,
                'img' => $tenanh
            ]
        );
        if ($resultDB) {
            return redirect('product');
        } else {
            return 'Save ERROR please contact admin';
        }
    }

    public function edit($id)
    {
        $product = DB::table('products')->find($id);
        return view('editProduct', ['product' => $product]);
    }

    public function update(Request $request)
    {
        $resultDB = DB::table('products')
            ->where('id', $request->idx)
            ->update(
                [
                    'name' => $request->name,
                    'price' => $request->price,
                    'quantity' => $request->quantity,
                    'description' => $request->description,
                    'expired' => $request->expired,
                ]
            );
        if ($resultDB) {
            return redirect('product');
        } else {
            return 'Save ERROR please contact admin';
        }
    }

    public function delete(Request $req)
    {
        $reusltDB = DB::table('products')->where('id', '=', $req->id)->delete();
        if($reusltDB){
            echo 'OK';
        }else{
            echo 'FAIL';
        }
    }

    public function search(Request $req)
    {
        $resultDB = DB::table('products')->where('name','like','%'.$req->keySearch.'%')->paginate(5);
        return view('searchProduct1',['resultDBView' => $resultDB]);
    }
}
