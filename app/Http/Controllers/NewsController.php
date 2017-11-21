<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\News;
use App\Attach;
use Auth;

class NewsController extends Controller
{
    public function __construct(News $news, Attach $attach)
    {
        $this->news = $news;
        $this->attach = $attach;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = $this->news->with('user')->paginate(10);
        return view('news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = $request->all();
        $news['user_id'] = Auth::user()->id;
        if ($request->hasFile('attach')) {
            if (Storage::disk('local')->put('attachs', $request->attach)) {
                $news['attach'] = $request->attach->hashName();
                $news['attach_name'] = $request->attach->getClientOriginalName();
            }
        }
        try {
            $this->news->create($news);
            $message = 'Tọa mới thành công';

        } catch (\Exception $e) {
            $message = 'Có lỗi xảy ra';
        }

        return redirect(route('news.index'))->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.detail')->with('news', $news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
