<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest\RequestLanguage;
use Illuminate\Http\Request;
use App\Models\Language;
class LanguageController extends Controller
{
    public function getLanguage(){
        $date['listLanguage'] = Language::all();
        return view('administrator.pages.language-admin.show',$date);
    }
    public function addLanguage(){
        return view('administrator.pages.language-admin.add');
    }
    public function saveLanguage(RequestLanguage  $request){
        $language = new Language;
        $language->name_language =$request->language;
        $language->save();
        return redirect()->back()->with(['success'=>'Đã thêm ngôn ngữ thành công']);

    }
    public function getEditLanguage($id){
        $date['lag']= Language::find($id);
        return view('administrator.pages.language-admin.edit',$date);
    }
    public function postEditLanguage(RequestLanguage $request ,$id){
        $language = Language::find($id);
        $language->name_language =$request->language;
        $language->save();
        return redirect()->route('language-admin')->with(['success'=>'Sửa thành công']);

    }
    public function getDeleteLanguage($id){
        Language::destroy($id);
        return redirect()->back()->with(['success'=>'Xoá thành công']);
    }
}
