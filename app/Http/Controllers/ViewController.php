<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Team;
use App\Service;
use App\Blog;
use App\Message;

class ViewController extends Controller
{
    //

    public function getIndex()
    {
        $c = Client::all();
        return view('index', ["clients" => $c]);
    }

    public function getAbout()
    {
        $teams = Team::all();
        return view("about", ["teams" => $teams]);
    }

    public function getServices()
    {
        $services = Service::all();
        return view("services", ["services" => $services]);
    }

    public function getNews()
    {
        $blogs = Blog::all();
        return view("news", ["blogs" => $blogs]);
    }

    public function getContact()
    {
        return view("contact");
    }

    public function getNewsDetail($id)
    {
        $blogDetail = Blog::find($id);

        $recent = Blog::orderBy('created_at')->take(3)->get();
        return view("newsDetail", ["blog" => $blogDetail, "recent" => $recent]);
    }

    public function newsDetail($id)
    {
        $blogDetail = Blog::find($id);

        $recent = Blog::orderBy('created_at')->take(3)->get();
        return view("newsDetail", ["blog" => $blogDetail, "recent" => $recent]);
    }

    public function createContact()
    {
        $name = \request("name");
        $email = \request("email");
        $subject = \request("subject");
        $message = \request("message");
        Message::create([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ]);
        return redirect()->back();
    }
}
