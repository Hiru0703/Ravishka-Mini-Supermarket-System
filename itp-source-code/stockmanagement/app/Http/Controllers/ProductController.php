<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller{
    public function insertitemvf(Request $request){
      //validation rule
      $request->validate([
             'itemcodevf'=>'required',
             'itemnamevf'=>'required',
             'dateoftakenvf'=>'required',
             'quantityvf'=>'required',
             'priceperunitvf'=>'required',
      ]);

        //dd($request->all());
        $product=new Product;
 
        //$this->Validate($request,[
           //     'itemcode'=>'<required|max:100|min:5',
        //]);
 
        $product->itemcodevf=$request->itemcodevf;
       
        $product->itemnamevf=$request->itemnamevf;
      
        $product->dateoftakenvf=$request->dateoftakenvf;
      
    
        $product->quantityvf=$request->quantityvf;
   
        $product->priceperunitvf=$request->priceperunitvf;


        $product->save();
        $data=Product::all();
          //dd($data);
        return redirect('/Mainhome')->with('message','Success!');
        return view('productview')->with('productview',$data);
    }
     public function searchvegetablesfruits(Request $request){
        $Item_Name  = $request->get('itemnamevf') ;
        //$Item_code = $request->get('itemcodevf') ;
        $product= Product::where('itemnamevf',$Item_Name)->get();
        // return $Item;
        return view('searchvegetablesfruits')->with('product',$product);
      
    }
    public function removevf($itemcodevf){
      $buyers=Product::where('itemcodevf',$itemcodevf);
  
      $buyers->delete();
  
      return redirect('/searchvegetablesfruits')->with('messages','Delete Success...!');
        

}
    public function updatedetailview($itemcodevf){
      //$product=Product::find($itemcodevf);
      $vfproduct=Product::where('itemcodevf',$itemcodevf)->first();

      return view('updatedetail')->with('vfproduct',$vfproduct);
    }
    public function updatedetail(Request $request,$itemcodevf){
      //update validation
      $request->validate([
        'itemcodevf'=>'required',
        'itemnamevf'=>'required',
        'dateoftakenvf'=>'required',
        'quantityvf'=>'required',
        'priceperunitvf'=>'required',
 ]);
     // $product=Product::find($itemcodevf);
     $product=Product::where('itemcodevf',$itemcodevf)->first();
        $product->itemcodevf=$request->itemcodevf;
        $product->itemnamevf=$request->itemnamevf;
        $product->dateoftakenvf=$request->dateoftakenvf;
        $product->quantityvf=$request->quantityvf;
        $product->priceperunitvf=$request->priceperunitvf;

     

        $product->save();

       return redirect("/searchvegetablesfruits")->with('msg','Update Success...!');
        // dd($request);
    }
}
