<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
use DB;
use PDF;



class IteminsertController extends Controller
{
    public function insertitem(Request $request){
         //validation rule
         $request->validate([
          'itemcode'=>'required',
          'itemname'=>'required',
          'manufacturedate'=>'required',
          'expiredate'=>'required',
          'discription'=>'required',
          'quantity'=>'required',
          'priceperunit'=>'required',
   ]);

       //dd($request->all());
       $Item=new item;

       //$this->Validate($request,[
          //     'itemcode'=>'<required|max:100|min:5',
       //]);

       $Item->itemcode=$request->itemcode;
      
       $Item->itemname=$request->itemname;
     
       $Item->manufacturedate=$request->manufacturedate;
     
       $Item->expiredate=$request->expiredate;
    
       $Item->discription=$request->discription;
   
       $Item->quantity=$request->quantity;
  
       $Item->priceperunit=$request->priceperunit;

       $Item->save();
       $data=item::all();
         //dd($data);

    return redirect('/Mainhome')->with('message','Success!...');
    return view('Itemview')->with('Itemview',$data);
    return view('Itemview',compact('data'));
   // $pdf=PDF::loadView('Itemview',$data);
    //return $pdf->download('Stock.pdf');
    return view('Itemviewpdf')->with('Itemviewpdf',$data);

    }
    public function createPDF()
    {
      $stock=item::all();
      view()->share('data',$stock);
      $pdf=PDF::loadView('Itemview',$stock);
      return $pdf->download('pdf_file.pdf');
    }

    public function searchgrocery(Request $request){
      $Item_Name  = $request->get('itemname') ;
     // $Item_code = $request->get('itemcode') ;
      $Item= item::where('itemname',$Item_Name)->get();
      // return $Item;
      return view('Searchgrocery')->with('Item',$Item);
    
  }
  public function remove($itemcode){
    $buyers=item::where('itemcode',$itemcode);

    $buyers->delete();
    
    return redirect('/searchgrocery')->with('messages','Delete Success...!');
      
  }
  public function gfupdatedetailview($itemcode){
    //$product=Product::find($itemcodevf);
    $gfproduct=item::where('itemcode',$itemcode)->first();

    return view('gfupdatedetail')->with('gfproduct',$gfproduct);
  }
  public function gfupdatedetail(Request $request,$itemcode){
     //update validation
     $request->validate([
          'itemcode'=>'required',
          'itemname'=>'required',
          'manufacturedate'=>'required',
          'expiredate'=>'required',
          'discription'=>'required',
          'quantity'=>'required',
          'priceperunit'=>'required',
        ]);
   // $product=Product::find($itemcodevf);
   $product=item::where('itemcode',$itemcode)->first();
      $product->itemcode=$request->itemcode;
      $product->itemname=$request->itemname;
      $product->manufacturedate=$request->manufacturedate;
      $product->expiredate=$request->expiredate;
      $product->discription=$request->discription;
      $product->quantity=$request->quantity;
      $product->priceperunit=$request->priceperunit;

   

      $product->save();

     return redirect("/searchgrocery")->with('msg','Update Success...!');
      // dd($request);
}
/*function index()
{
    $Itemview=$this->get_stock_details();
    return view('Itemview')->with('Itemview',$Itemview);
}
function get_stock_details()
{
    $Itemview=DB::table('items')
       ->limit(10)
       ->get();
     return $Itemview;  
}*/
/*function pdf()
{
  $pdf= \App::make('dompdf.wrapper');
  $pdf->loadHTML($this->convert_Itemview_to_html());
  $pdf->stream();
}
function convert_Itemview_to_html()
{
  $Itemview=get_stock_details();
  $output= '
  <table class="table table-dark">
  <th>Item Code</th>
  <th>Item Name</th>
  <th>Manufacture Date</th>
  <th>Expire Date</th>  
  <th>Description</th>
  <th>Quantity</th>
  <th>Price per unit</th> 
  <th>Total Amount</th> 
   
  ';

foreach($Itemview as $Item)
{
  $output .='
  <tr>
  <td>'.$Item->itemcode.'</td>
  <td>'.$Item->itemname.'</td>
  <td>'.$Item->manufacturedate.'</td>
  <td>'.$Item->expiredate.'</td>
  <td>'.$Item->discription.'</td>
  <td>'.$Item->quantity.'</td>
  <td>'.$Item->priceperunit.'</td>
  <td>'.$Item->quantity .' * '.$Item->priceperunit.'</td>
  
</tr>
  ';
}
$output .= '</table>';
return $output;

}*/
}
