<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metatags;
use App\Models\Banners;


class WebsiteController extends BaseController // Extend BaseController
{
    public function index()
{
    return $this->loadViewWithBanners('home', 'website.index');
}

public function about()
{
    return $this->loadViewWithBanners('about', 'website.about-us');
}

public function project()
{
    return $this->loadViewWithBanners('project', 'website.project');
}
    public function product()
    { 
        return $this->loadViewWithBanners('product', 'website.product');

    }

    public function product_detail()
    { 
        return $this->loadViewWithBanners('product_detail', 'website.product_detail');

    }

    public function project_information()
    {
        return $this->loadViewWithBanners('project_information', 'website.project_information');

    }

    public function ourvision()
    { 
        return $this->loadViewWithBanners('ourvision', 'website.our-vision');

    }

    public function career()
    {  
        return $this->loadViewWithBanners('careers', 'website.careers');

    }

    public function career_details()
    { 
        return $this->loadViewWithBanners('career_details', 'website.career_details');

    }

    public function contact() 
    {   
        return $this->loadViewWithBanners('contact', 'website.contact');

    }

    public function query()
    {
        return $this->loadViewWithBanners('query', 'website.query');

    }
}
