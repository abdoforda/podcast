<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminTowController extends Controller
{


    // أجعل الكلاس لليوزر فقط
    public function __construct()
    {
        $this->middleware('auth');
    }

    //registers
    public function registers()
    {
        // check auth
        if(!auth()->check()) {
            $url_redirect = '/admin/login';
            return redirect($url_redirect);
        }

        return view('admin.pages.registers');
    }

    

    public function getBladeFiles()
    {
        // Get all files in the 'resources/views' directory recursively
        $files = File::allFiles(resource_path('views'));

        // حذف الملفات إذا المسار يحتوي علي vendor او admin
        $files = array_filter($files, function ($file) {
            return !str_contains($file->getPathname(), 'vendor') && !str_contains($file->getPathname(), 'admin');
        });

        // Filter files with .blade.php extension
        $bladeFiles = [];
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && str_contains($file->getFilename(), '.blade')) {
                $bladeFiles[] = [
                    'name' => $file->getFilename(),
                    'path' => $file->getPathname(),
                ];
            }
        }

        return $bladeFiles;
    }

    public function contentPages()
    {

        $bladeFiles = $this->getBladeFiles();
        return view('admin.pages.list_pages', compact('bladeFiles'));
    }

    public function contentPagesShow($id)
{
    $bladeFiles = $this->getBladeFiles();
    $path = '';
    foreach ($bladeFiles as $index => $item) {
        if ($index == $id) {
            $path = "../resources" . explode("resources", $item['path'])[1];
            $path = str_replace('\\', '/', $path);
        }
    }

    if (!file_exists($path)) {
        abort(404, "File not found.");
    }

    $p = explode('/', $path);
    $name_file = ucfirst(str_replace('.blade.php', '', end($p)));

    $content = file_get_contents($path);

    preg_match_all("/__\(\s*['\"](.*?)['\"],\s*\[(.*?)\]\s*\)/", $content, $dynamicMatches);
    preg_match_all("/@lang\(\s*['\"](.*?)['\"],\s*\[(.*?)\]\s*\)/", $content, $dynamicMatchesLang);

    // النصوص الديناميكية
    $dynamicKeys = array_merge($dynamicMatches[1], $dynamicMatchesLang[1]);


    // استخراج النصوص من دوال الترجمة
    preg_match_all('/@lang\(\'(.*?)\'\)/', $content, $matches);
    preg_match_all("/@lang\(\"(.*?)\"\)/", $content, $matches2);
    preg_match_all("/__\(\"(.*?)\"\)/", $content, $matches3);
    preg_match_all('/__\(\'(.*?)\'\)/', $content, $matches4);

    // دمج جميع النصوص
    $keys = array_merge($matches[1], $matches2[1], $matches3[1], $matches4[1], $dynamicKeys);

    // تحميل ملفات الترجمة
    $en = json_decode(file_get_contents(base_path('/lang/en.json')), true);
    $ar = json_decode(file_get_contents(base_path('/lang/ar.json')), true);
    $ku = json_decode(file_get_contents(base_path('/lang/ku.json')), true);

    return view('admin.pages.page', compact('en', 'ar',  'ku', 'keys', 'path', 'name_file'));
}

    public function translateUpdate(Request $request)
    {

        $en = json_decode(file_get_contents(base_path('/lang/en.json')), true);
        $ar = json_decode(file_get_contents(base_path('/lang/ar.json')), true);
        $ku = json_decode(file_get_contents(base_path('/lang/ku.json')), true);

        foreach ($request->en as $key => $value) {
            $en[$key] = $request->en[$key];
            $ar[$key] = $request->ar[$key];
            $ku[$key] = $request->ku[$key];
        }

        file_put_contents(base_path('/lang/en.json'), json_encode($en, JSON_PRETTY_PRINT));
        file_put_contents(base_path('/lang/ar.json'), json_encode($ar, JSON_PRETTY_PRINT));
        file_put_contents(base_path('/lang/ku.json'), json_encode($ku, JSON_PRETTY_PRINT));

        return "Done";
    }

    // update one key value
    public function translateUpdateOne(Request $request)
    {

        // تحديث القيم بناءً على الحقل المرسل
    $ff = null;
    $value = null;
    foreach ($request->except('_token') as $fieldName => $fieldValue) {
        $ff = $fieldName;
        $value = $fieldValue;
    }



    $lang = json_decode(file_get_contents(base_path('/lang/'.$ff.'.json')), true);

    foreach ($request->except('_token') as $fieldName => $fieldValue) {

        foreach($fieldValue as $key => $value){

        }
        $lang[$key] = $value;
    }

    file_put_contents(base_path('/lang/'.$ff.'.json'), json_encode($lang, JSON_PRETTY_PRINT));



    return response()->json(['success' => true, 'message' => 'تم تحديث القيم بنجاح']);


    }

}
