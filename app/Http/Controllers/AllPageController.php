<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class AllPageController extends Controller
{
    //SHOW ====================================================
    public function order()
    {
        return view('pages/order');
    }
    public function index()
    {
        return view('pages/index');
    }
    

    public function showgallery()
    {
        return view('pl/sql');
    }
    public function showartist()
    {
        return view('pages/artists');
    }
    public function showexhibition()
    {
        return view('pages/exhibitions');
    }
    public function showcreateac()
    {
        return view('pages/createac');
    }
    public function showhome()
    {
        return view('admin/index');
    }
    public function showinsert()
    {
        return view('admin/insert');
    }
    public function showupdate()
    {
        return view('admin/update');
    }
    public function showdelete()
    {
        return view('admin/delete');
    }
    public function showdb()
    {
        return view('admin/db');
    }

    public function buy(){
        if(isset($_POST['submit'])){
            $painting_id = $_POST['painting_id'];
            $price = $_POST['price'];
            $customer_id = $_POST['customer_id'];
        }
        DB :: table('buy')->insert([['painting_id'=>$painting_id,'price'=>$price,'customer_id'=>$customer_id]]);
        
        echo "Record inserted successfully.<br/>";
echo '<a href = "/admin/insert">Click Here</a> to go back.';
    }
    public function by()
      {
          return view('admin/buy');
      }
    public function hs()
      {
          return view('admin/has');
      }
    
//INSERT -------------------------------------------------
public function has(){
    if(isset($_POST['submit']))
        {
            $artist_id = $_POST['artist_id'];
            $gallery_id = $_POST['gallery_id'];
        }
    DB :: table('has')->insert([
        ['artist_id'=>$artist_id,'gallery_id'=>$gallery_id]]);
        echo "Record inserted successfully.<br/>";
echo '<a href = "/admin/insert">Click Here</a> to go back.';
}
public function insertg()
    {
        return view('admin/insertintogallery');
    }
    public function inserte()
    {
        return view('admin/insertintoexhibition');
    }
    public function inserta()
    {
        return view('admin/insertintoartist');
    }
    public function insertc()
    {
        return view('admin/insertintocustomer');
    }
    public function insertp()
    {
        return view('admin/insertintopainting');
    }
public function insertintopainting(){
    if(isset($_POST['submit']))
    {
    $painting_id = $_POST['painting_id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $artist_id = $_POST['artist_id'];
    $sold = $_POST['sold'];
    $img_dir = $_POST['img_dir'];
    }
    DB :: table('painting')->insert([
        ['painting_id'=>$painting_id,'title'=>$title,'price'=>$price,'artist_id'=>$artist_id,'sold'=>$sold,'img_dir'=>$img_dir
    ]]);
    
    echo "Record inserted successfully.<br/>";
    echo '<a href = "/admin/insertintogallery">Click Here</a> to go back.';
}

//FUNCTION
public function insertintogallery(Request $request){
        $gallery_id = $request->input('gallery_id');
        $gallery_name = $request->input('gallery_name');
        $gallery_location = $request->input('gallery_location');
         $xx=DB::select('select gallery_id from gallery where gallery_name=?',[$gallery_name]);
        if(isset($xx))
        {
            $hh=collect(DB::select(DB::raw('SELECT `gallery_function`() AS `gallery_function`;')))->first()->gallery_function;
            //$ld = $array($hh);
            print_r($hh);
            echo '<br><a href = "/admin/insertintogallery">Click Here</a> to go back.';
        }
        else{
            $data = array('gallery_id'=>$gallery_id,'gallery_name'=>$gallery_name,'gallery_location'=>$gallery_location);
        DB :: table ('gallery') -> insert($data);
        echo "Record inserted successfully.<br/>";
echo '<a href = "/admin/insertintogallery">Click Here</a> to go back.';
        }
      }
      public function insertintoexhibition(Request $request){
        $exhibition_id = $request->input('exhibition_id');
        $exhibition_name = $request->input('exhibition_name');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $exhibition_location = $request->input('exhibition_location');
        $artist_id = $request->input('artist_id');
        $data = array('exhibition_id'=>$exhibition_id,'exhibition_name'=>$exhibition_name,'start_date'=>$start_date,'end_date'=>$end_date,'exhibition_location'=>$exhibition_location,'artist_id'=>$artist_id);
        DB :: table ('exhibition') -> insert($data);
        echo "Record inserted successfully.<br/>";
echo '<a href = "/admin/insertintoexhibition">Click Here</a> to go back.';
      }
      public function insertintoartist(Request $request){
        $artist_id = $request->input('artist_id');
        $artist_name = $request->input('artist_name');
        $artist_address = $request->input('artist_address');
        $artist_phone = $request->input('artist_phone');
        $data = array('artist_id'=>$artist_id,'artist_name'=>$artist_name,'artist_address'=>$artist_address,'artist_phone' => $artist_phone);
        DB :: table ('artist') -> insert($data);
        echo "Record inserted successfully.<br/>";
echo '<a href = "/admin/insertintoartist">Click Here</a> to go back.';
      }
      public function insertintocustomer(Request $request){
        $customer_id = $request->input('customer_id');
        $customer_name = $request->input('customer_name');
        $customer_address = $request->input('customer_address');
        $customer_phone = $request->input('customer_phone');
        $data = array('customer_id'=>$customer_id,'customer_name'=>$customer_name,'customer_address'=>$customer_address,'customer_phone' => $customer_phone);
        DB :: table ('customer') -> insert($data);
        echo "Record inserted successfully.<br/>";
echo '<a href = "/admin/insertintocustomer">Click Here</a> to go back.';
      }

      //UPDATE============================================================

      public function updateg()
      {
          return view('admin/updategallery');
      }
     
      public function updatea()
      {
          return view('admin/updateartist');
      }
      public function updatec()
      {
          return view('admin/updatecustomer');
      }
      public function updatee()
{
    return view('admin/updatexhibition');
}
      
      public function editform(){
          return view('admin/edit');
      }

      public function edit(Request $request){
         $gallery_id = $request->input('gallery_id');
         $gallery_name = $request->input('gallery_name');
         $gallery_location = $request->input('gallery_location');
         DB :: update('update gallery set gallery_name = ?, gallery_location =? where gallery_id =?',[$gallery_name,$gallery_location,$gallery_id]);
         echo "Record updated successfully.<br/>";
     echo '<a href = "/admin/updategallery">Click Here</a> to go back.';
      }
      public function confirm(){
        if(isset($_POST['confirm']))
        {
        $id = $_POST['painting_id'];
        $price = $_POST['price'];
        $c_id = $_POST['cus_id'];
        }
        DB :: table('painting')
        ->where('painting_id',$id)
        ->update(['sold'=>0]);
        DB :: table('buy')->insert(['painting_id'=>$id,'price'=>$price,'customer_id'=>$c_id]);
        echo "Record Updated successfully.<br/>";
        echo '<a href = "/sql">Click Here</a> to go back.';
    }
    public function exhibitionupdateform(){
        return view('admin/exhibitionupdateform');
    }

    public function editex(Request $request){
        $exhibition_id = $request->input('exhibition_id');
        $exhibition_location = $request->input('exhibition_location');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        DB :: update('update gallery set exhibition_location = ?, start_date =?, end_date=? where exhibition_id =?',[$exhibition_location,$start_date,$end_date,$exhibition_id]);
        echo "Record updated successfully.<br/>";
    echo '<a href = "/admin/updategallery">Click Here</a> to go back.';
     }
// DELETE =====================================================

public function deleteg()
      {
          return view('admin/deletegallery');
      }

      public function gdelete()
      {
          if(isset($_POST['delete']))
          {
              $id = $_POST['exhibition_id'];
          }
       DB :: delete('delete from gallery where gallery_id =?',[$gallery_id]);
       echo "Record deleted successfully.<br/>";
   echo '<a href = "/admin/deletegallery">Click Here</a> to go back.';
    }

    public function deleteform(){
        return view('admin/deleteform');
    }
    public function deleteex()
      {
          return view('admin/deletexhibition');
      }

      public function exhibitiondeleteform(){
        return view('admin/exhibitiondeleteform');
    }

    public function exdelete()
    {
        if(isset($_POST['delete']))
        {
            $id = $_POST['exhibition_id'];
        }
        DB :: delete('delete from exhibition where exhibition_id =?',[$id]);
       echo "Record deleted successfully.<br/>";
   echo '<a href = "/admin/deletexhibition">Click Here</a> to go back.';
    }

   /* public function exdelete(Request $request){
       $exhibition_id = $request->input('exhibition_id');
       //dd( $exhibition_id);
       DB :: delete('delete from exhibition where exhibition_id =?',[$exhibition_id]);
       echo "Record deleted successfully.<br/>";
   echo '<a href = "/admin/deletexhibition">Click Here</a> to go back.';
    }*/

    //UNION ==============
public function union(){
    $x = DB :: select('select artist_id from exhibition union (select artist_id from painting ) order by artist_id');
    return view('admin/lojoindata',['x'=>$x]);
}

//LEFT OUTER JOIN----------------------------------

public function lojoin(){
$x = DB :: table('artist')
->Join('painting','artist.artist_id', '=','painting.artist_id')
->get();
return view('admin/lojoindata',['x' => $x]);
}

//AGGREGATE FUNCTION =====================================
public function agg(){
    $ab = DB :: table('painting')->max('price');
    return view('admin/agg',['ab'=>$ab]);
}




//login ============================================
public function logcheck(){
    $xp = $_GET["lg"];
if(isset($xp)){
   // echo "nipa";
    if($_GET['name']=='user' && $_GET['pass']=='user'){
        return view('pages.index');
   }
    else if($_GET['name']=='admin' && $_GET['pass']=='admin'){
        return view('admin.index');
    }
}
}
}
