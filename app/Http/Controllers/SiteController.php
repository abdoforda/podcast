<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;

class SiteController extends Controller
{
    // news
    public function news() {
        $cat = Category::find(4);
        // get posts and all translations
        $posts = $cat->posts()->with('translations')->paginate(1);
        $data = [
            'title' =>  __("Latest Market News"),
            'desc' => __("Stay Updated with the Latest Financial & Economic Developments Continuous coverage of major global news that may impact the trading environment and financial markets.")
        ];

        return view('pages.news', compact(['posts', 'cat', 'data']));
    }

    //news_show
    public function news_show($slug) {
        $post = Post::where('slug', $slug)->with('translations')->first();
        // add view count
        $post->views = $post->views + rand(1, 10);
        $post->save();

        return view('pages.news_show', compact('post'));
    }


    //articles
    public function articles() {

        $cat = Category::find(3);
        // get posts and all translations
        $posts = $cat->posts()->with('translations')->paginate(12);
        $data = [
            'title' =>  __("Forex Education Articles"),
            'desc' => __("Learn the Fundamentals & Master Trading Strategies Educational articles covering forex concepts, trading strategies, and risk management to help you enhance your skills and improve your market performance.")
        ];

        return view('pages.news', compact(['posts', 'cat', 'data']));
    }


    //recommendations
    public function recommendations() {
        return view('pages.recommendations');
    }

    //trading_courses
    public function trading_courses() {
        return view('pages.trading_courses');
    }

    //webinars
    public function webinars() {
        return view('pages.webinars');
    }

    //contact
    public function contact(Request $request) {

        // if method is post
        if ($request->isMethod('post')) {

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $data = $request->only(['name', 'email', 'message', 'subject', 'phone']);
            Mail::to('abdelrahmaan3@gmail.com')->send(new ContactMail($data));

            return "Done";

        }
        return view('pages.contact');
    }

    //privacy_policy
    public function privacy_policy() {
        $page = Page::find(2);
        return view('pages.page', compact('page'));
    }

    //terms_conditions
    public function terms_conditions() {
        $page = Page::find(3);
        return view('pages.page', compact('page'));
    }
    

    //blog_show
    public function blog_show($slug) {


        $post = Post::where('slug', $slug)->with('translations')->first();
        // add view count
        $post->views = $post->views + rand(1, 10);
        $post->save();

        return view('blog_show', compact('post'));
    }

}
