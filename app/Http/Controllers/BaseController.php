<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Metatags;
use App\Models\Banners;
use Illuminate\Support\Facades\View;
class BaseController extends Controller
{
protected $metaData = [];
public function __construct(Request $request)
{
$this->setMetadata($request);
}
private function setMetadata(Request $request)
{
$route = $request->route();
if (!$route) return;
$routeName = $route->getName();
$metadata = Metatags::where('route_name', $routeName)->first();
$this->metaData = [
'meta_title' => $metadata->meta_title ?? 'Default Title',
'meta_description' => $metadata->meta_description ?? 'Default Description',
'meta_keywords' => $metadata->meta_keywords ?? 'default, keywords'
];
// Share Meta Tags with all Views
View::share('metaData', $this->metaData);
}

protected function getBanners($routeName)
{
    return Banners::where('route_name', $routeName)
                  ->orderBy('order_by_count') 
                  ->get();
                  foreach ($banners as $banner) {
                    if (empty($banner->mobile_image)) {
                        $banner->mobile_image = $banner->desktop_image;
                    }
                }
            
                return $banners;
}
protected function loadViewWithBanners($routeName, $viewName)
{
    $banners = $this->getBanners($routeName);
    return view($viewName, compact('banners'));
}
}