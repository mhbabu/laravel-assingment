<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\SeoFeatureDataTable;
use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\SeoFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SeoFeatureController extends Controller
{
    public function index(SeoFeatureDataTable $dataTable){
        return $dataTable->render('backend.seo-feature.index');
    }

    public function create(){
        return view('backend.seo-feature.create');
    }

    public function store(Request $request){

        $request->validate([
            'title'                  => 'required',
            'page_name'              => 'required',
            'slug'                   => 'required',
            'seo_title'              => 'required',
            'og_title'               => 'required',
            'twitter_title'          => 'required',
            'og_type'                => 'required',
            'image_alt_text'         => 'required',
            'og_description'         => 'required',
            'meta_description'       => 'required',
            'twitter_description'    => 'required',
            'image'                  => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'og_image'               => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'twitter_image'          => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ],[],[
            'image'          => 'feature image',
            'image_alt_text' => 'feature image alt text'
        ]);


        try {
            $seoFeature                           = new SeoFeature();
            $seoFeature->title                    = $request->input('title');
            $seoFeature->page_name                = $request->input('page_name');
            $seoFeature->slug                     = $request->input('slug')? Str::slug($request->input('slug'), '-'): Str::slug($seoFeature->title);
            $seoFeature->seo_title                = $request->input('seo_title');
            $seoFeature->og_title                 = $request->input('og_title');
            $seoFeature->twitter_title            = $request->input('twitter_title');
            $seoFeature->og_type                  = $request->input('og_type');
            $seoFeature->keywords                 = $request->input('keywords');
    
            $seoFeature->image_alt_text           = $request->input('image_alt_text');
            $seoFeature->og_image_alt_text        = $request->input('og_image_alt_text');
            $seoFeature->twitter_image_alt_text   = $request->input('twitter_image_alt_text');
            $seoFeature->og_description           = $request->input('og_description');
            $seoFeature->meta_description         = $request->input('meta_description');
            $seoFeature->twitter_description      = $request->input('twitter_description');
            $seoFeature->canonical_url            = $request->input('canonical_url');
    
            $path = 'uploads/pages/';
            $prefix = date('Ymd_');
    
    
            if ($request->hasFile('og_image')) {
                $_ogImage = $request->file('og_image');
                
                if(!file_exists($path))
                    mkdir($path, 0777, true);
    
                $ogImage = trim(sprintf('%s', uniqid(ucfirst(Str::slug($seoFeature->og_title, '-')).'_'.$prefix, true))) . '.' . $_ogImage->getClientOriginalExtension();
                $_ogImage->move($path, $ogImage);
                $seoFeature->og_image = $ogImage;
                $seoFeature->og_image_path = url($path. $seoFeature->og_image);
            }else{
                
                $_defaultOgImg = $request->file('image');
    
                if(!file_exists($path))
                    mkdir($path, 0777, true);
                    
                $defaultOGImg = trim(sprintf('%s', uniqid('OGImage_'.$prefix, true))) . '.' . $_defaultOgImg->getClientOriginalExtension();
                Image::make($_defaultOgImg->getRealPath())->resize(1200, 630)->save( public_path($path . '/' . $defaultOGImg) );
    
                $seoFeature->og_image = $defaultOGImg;
                $seoFeature->og_image_path = url($path . $seoFeature->og_image);
                
            }
    
            if ($request->hasFile('twitter_image')) {
                $_twitterImage = $request->file('twitter_image'); 
                
                if(!file_exists($path))
                    mkdir($path, 0777, true);
    
                $twitterImage = trim(sprintf('%s', uniqid('TwitterImage_'.$prefix, true))) . '.' . $_twitterImage->getClientOriginalExtension();
                $_twitterImage->move($path, $twitterImage);
                $seoFeature->twitter_image = $twitterImage;
                $seoFeature->twitter_image_path = url($path . $seoFeature->twitter_image);
            }else{
               
                $_defaultTwitterImg = $request->file('image');
                
                if(!file_exists($path))
                    mkdir($path, 0777, true);
    
                $defaultTwitterImg = trim(sprintf('%s', uniqid('TwitterImg_'.$prefix, true))) . '.' . $_defaultTwitterImg->getClientOriginalExtension();
                Image::make($_defaultTwitterImg->getRealPath())->resize(920,460)->save($path . '/' . $defaultTwitterImg);
                $seoFeature->twitter_image = $defaultTwitterImg;
                $seoFeature->twitter_image_path = url($path . $seoFeature->twitter_image);
            }
    
            if ($request->hasFile('image')) {
                $_featureImg = $request->file('image');
    
                $prefix = date('Ymd_');
                
                if(!file_exists($path))
                    mkdir($path, 0777, true);
    
                $featureImg = trim(sprintf('%s', uniqid(ucfirst(Str::slug($seoFeature->title, '-')) . '_'. $prefix, true))) . '.' . $_featureImg->getClientOriginalExtension();
                $_featureImg->move($path, $featureImg);
                $seoFeature->image = $featureImg;
                $seoFeature->image_path = url($path .$seoFeature->image);
            }

            $seoFeature->save();
           
            return redirect(route('seo-features.index'))->with('message', "Seo Featured saved successfully.");
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Sorry, something went wrong.');
        }
    }


    public function edit(SeoFeature $seoFeature){
        $data['seoFeature'] = $seoFeature;
        return view('backend.seo-feature.edit', $data);
    }



    public function update(Request $request, SeoFeature $seoFeature){

        $request->validate([
            'title'                  => 'required',
            'page_name'              => 'required',
            'slug'                   => 'required',
            'seo_title'              => 'required',
            'og_title'               => 'required',
            'twitter_title'          => 'required',
            'og_type'                => 'required',
            'image_alt_text'         => 'required',
            'og_description'         => 'required',
            'meta_description'       => 'required',
            'twitter_description'    => 'required',
            'image'                  => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'og_image'               => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'twitter_image'          => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ],[],[
            'image'          => 'feature image',
            'image_alt_text' => 'feature image alt text'
        ]);

        try {
            $seoFeature                           = $seoFeature;
            $seoFeature->title                    = $request->input('title');
            $seoFeature->page_name                = $request->input('page_name');
            $seoFeature->slug                     = $request->input('slug')? Str::slug($request->input('slug'), '-'): Str::slug($seoFeature->title);
            $seoFeature->seo_title                = $request->input('seo_title');
            $seoFeature->og_title                 = $request->input('og_title');
            $seoFeature->twitter_title            = $request->input('twitter_title');
            $seoFeature->og_type                  = $request->input('og_type');
            $seoFeature->keywords                 = $request->input('keywords');
    
            $seoFeature->image_alt_text           = $request->input('image_alt_text');
            $seoFeature->og_image_alt_text        = $request->input('og_image_alt_text');
            $seoFeature->twitter_image_alt_text   = $request->input('twitter_image_alt_text');
            $seoFeature->og_description           = $request->input('og_description');
            $seoFeature->meta_description         = $request->input('meta_description');
            $seoFeature->twitter_description      = $request->input('twitter_description');
            $seoFeature->canonical_url            = $request->input('canonical_url');
    
            $path = 'uploads/pages/';
            $prefix = date('Ymd_');

            if ($request->hasFile('og_image')) {
                $_ogImage = $request->file('og_image');
                
                if(!file_exists($path))
                    mkdir($path, 0777, true);
    
                $ogImage = trim(sprintf('%s', uniqid(ucfirst(Str::slug($seoFeature->og_title, '-')).'_'.$prefix, true))) . '.' . $_ogImage->getClientOriginalExtension();
                $_ogImage->move($path, $ogImage);
                $seoFeature->og_image = $ogImage;
                $seoFeature->og_image_path = url($path. $seoFeature->og_image);
            }
            if ($request->hasFile('twitter_image')) {
                $_twitterImage = $request->file('twitter_image'); 
                
                if(!file_exists($path))
                    mkdir($path, 0777, true);
    
                $twitterImage = trim(sprintf('%s', uniqid('TwitterImage_'.$prefix, true))) . '.' . $_twitterImage->getClientOriginalExtension();
                $_twitterImage->move($path, $twitterImage);
                $seoFeature->twitter_image = $twitterImage;
                $seoFeature->twitter_image_path = url($path . $seoFeature->twitter_image);
            }
    
            if ($request->hasFile('image')) {
                $_featureImg = $request->file('image');
    
                $prefix = date('Ymd_');
                
                if(!file_exists($path))
                    mkdir($path, 0777, true);
    
                $featureImg = trim(sprintf('%s', uniqid(ucfirst(Str::slug($seoFeature->title, '-')) . '_'. $prefix, true))) . '.' . $_featureImg->getClientOriginalExtension();
                $_featureImg->move($path, $featureImg);
                $seoFeature->image = $featureImg;
                $seoFeature->image_path = url($path .$seoFeature->image);
            }

            $seoFeature->save();
           
            return redirect(route('seo-features.index'))->with('message', "Seo Featured updated successfully.");
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Sorry, something went wrong.');
        }
    }

    public function delete(SeoFeature $seoFeature)
    {
        $seoFeature->delete();
        return redirect(route('seo-features.index'))->with('message', 'Seo Feature deleted successfully.');
    }
}
