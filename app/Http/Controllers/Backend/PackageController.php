<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Package;

class PackageController extends Controller
{
  public function __construct()
  {
    // $this->middleware('auth:admin');
  }

  public function index()
  {
    $packages = Package::orderBy('id', 'desc')->get();
    return view('backend.pages.packages.index')->with('packages', $packages);
  }

  public function packageList_foreign()
  {
    $packages = Package::orderBy('id', 'desc')-> paginate(5);
    return view('packages.packageList_foreign')->with('packages', $packages);
  }


  public function create()
  {
    return view('packages.create');
  }

  public function arrivePackage()
  {
    return view('packages.arrivePackage');
  }



  public function edit($id)
  {
    $package = Package::find($id);
    return view('packages.edit')->with('package', $package);
  }


  public function store(Request $request)
  {

    $request->validate([

      'received_at_mailbox_date'=> 'required|date',
      'ship_date'     => 'nullable|date',
      'arrival_date'     => 'nullable|date',
      'collect_date'     => 'nullable|date',
      'discount_price'     => 'nullable|max:4',
      'description'     => 'required|max:200',
      'remarks'     => 'max:500',
      'track_value'        => 'nullable|numeric',
      'weight'             => 'required|numeric',
      'category_id'             => 'required|numeric',
      'status'             => 'nullable|numeric',
      'user_id'             => 'nullable|numeric'
    ]);



    $package = new Package;
    $package->weight = $request->input('weight');
    $package->description = $request->input('description');
    $package->price = $package->price_cal($package->discount_price);
    $package->received_at_mailbox_date = $request->input('received_at_mailbox_date');
    $package->category_id = $request->input('category_id');
    $package->ship_date ='2020-02-12';// $request->input('ship_date');
    $package->arrival_date = $request->input('arrival_date');
    $package->collect_date = $request->input('collect_date');
    $package->status = 1;//$request->input('status');
    $package->track_value =25;// $request->input('track_value');
    $package->discount_price = $request->input('discount_price');
    $package->remarks = $request->input('remarks');
    $package->user_id =1;//  $request->input('user_id');
    $package->save();

    return redirect()->route('packages.packageList_foreign');
  }
















  public function update(Request $request, $id)
  {

   $request->validate([
        'received_at_mailbox_date'=> 'required|date',
        'ship_date'     => 'nullable|date',
        'arrival_date'     => 'nullable|date',
        'collect_date'     => 'nullable|date',
        'discount_price'     => 'nullable|max:4',
        'description'     => 'required|max:200',
        'remarks'     => 'max:500',
        'weight'             => 'required|numeric',
        'category_id'             => 'required|numeric',
        // 'status'             => 'required|numeric',
        // 'user_id'             => 'required|numeric',
      ]);

      $package = Package::findorFail($id);

      $package->weight = $request->input('weight');
      $package->description = $request->input('description');
      $package->price = $package->price_cal($package->discount_price);
      $package->received_at_mailbox_date = $request->input('received_at_mailbox_date');
      $package->category_id = $request->input('category_id');
      $package->ship_date = $request->input('ship_date');
      $package->arrival_date = $request->input('arrival_date');
      $package->collect_date = $request->input('collect_date');
      $package->status = 1;//$request->input('status');
      $package->track_value = 1;//$request->input('track_value');
      $package->discount_price = $request->input('discount_price');
      $package->remarks = $request->input('remarks');
      $package->user_id = 1;// $request->input('user_id');
    //  dd( $request->description);
      $package->update();








    return redirect()->route('packages.packageList_foreign');
  }

  public function delete($id)
  {
    $package = Package::find($id);
    if (!is_null($package)) {
      $package->delete();
    }
    // Delete all images
    foreach ($package->images as $img) {
      // Delete from path
      $file_name = $img->image;
      if (file_exists("images/packages/".$file_name)) {
        unlink("images/packages/".$file_name);
      }

      $img->delete();
    }
    session()->flash('success', 'Package has deleted successfully !!');
    return back();

  }
}
