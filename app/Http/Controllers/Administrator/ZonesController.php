<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\RequestZones;
use Illuminate\Http\Request;
use App\Models\Zones;
class ZonesController extends Controller
{
    public  function getZones(){
        $date['listZones'] = Zones::paginate(8);
        return view('administrator.pages.zones.index',$date);
    }
    public function addZones(){
        return view('administrator.pages.zones.add');
    }
    public function saveZones(RequestZones $request){
        $zones = new Zones();
        $zones->name_zone =$request->zones_name;
        $zones->save();
        return redirect()->back()->with(['success'=>'Đã thêm khu vực thành công']);

    }
    public function getEditZones($id){
        $date['zones_name']= Zones::find($id);
        return view('administrator.pages.zones.edit',$date);
    }
    public function postEditZones(RequestZones $request ,$id){
        $zones_name = Zones::find($id);
        $zones_name->name_zone =$request->zones_name;
        $zones_name->save();
        return redirect()->route('zones-admin')->with(['success'=>'Sửa thành công']);

    }
    public function getDeleteZones($id){
        Zones::destroy($id);
        return redirect()->back()->with(['success'=>'Xoá thành công']);
    }
}
