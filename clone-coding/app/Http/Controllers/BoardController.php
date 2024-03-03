<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BoardController extends Controller
{
    public function boardmain(){

        $post = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category','bd.created_at','cg.code','cg.name')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();
        
        foreach ($post as $item) {
            $created_at = $item->created_at;
        }

        $date = Carbon::parse($created_at)->format('Y/m/d');

        $category = DB::table('category')
                    ->select('name')
                    ->get();
        // dd($category);

        return view('board.main')->with('post',$post)->with('date',$date)->with('category',$category);
    }

    public function search(){

        return view('board.search');
    }

    //게시글 작성화면
    public function postGet() {
        return view('board.create');
    }


    //게시글 생성
    public function postCreate(Request $request) {

        $create = $request->only('title','img','content','category','likes');

        $fileName = time().$request->file('img')->getClientOriginalName();
        $path = $request->file('img')->storeAs('images', $fileName, 'public');

        $create['img'] = '/storage/'.$path;

        $post = Board::create($create);

        return redirect()->route('main',['id',$post->id]);
    }

    //게시글
    public function postDetail($id) {

        $post_id = DB::table('boards as bd')
                    ->join('category as cg','cg.id','bd.id')
                    ->select('bd.id','bd.title','bd.content','bd.img','bd.category','bd.likes','bd.created_at','cg.code','cg.name')
                    ->where('bd.id',$id)
                    ->get();

        $created_at = $post_id[0]->created_at;
        $date = Carbon::parse($created_at)->format('Y/m/d');

        return view('board.post')->with('post',$post_id)->with('date',$date);
    }

    public function tag($category) {

        $police = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at') ,'cg.code','cg.name')
                    ->where('bd.category','0')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();

        $money = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at'),'cg.code','cg.name')
                    ->where('bd.category','1')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();
        
        $world = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at'),'cg.code','cg.name')
                    ->where('bd.category','2')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();

        $tech = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at'),'cg.code','cg.name')
                    ->where('bd.category','3')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();

        $work = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at'),'cg.code','cg.name')
                    ->where('bd.category','4')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();

        $eco = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at'),'cg.code','cg.name')
                    ->where('bd.category','5')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();

        $people = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at'),'cg.code','cg.name')
                    ->where('bd.category','6')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();

        $together = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at'),'cg.code','cg.name')
                    ->where('bd.category','7')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();

        $film = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at'),'cg.code','cg.name')
                    ->where('bd.category','8')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();

        $yoga = DB::table('boards as bd')
                    ->join('category as cg', 'cg.id', 'bd.id')
                    ->select('bd.id','bd.title','bd.img','bd.category',DB::raw('DATE_FORMAT("bd.created_at", "Y/m/d") as created_at'),'cg.code','cg.name')
                    ->where('bd.category','9')
                    ->orderby('bd.created_at','desc')
                    ->limit(12)
                    ->get();

        return view('board.tabMenu')
            ->with('police',$police)
            ->with('money',$money)
            ->with('world',$world)
            ->with('tech',$tech)
            ->with('work',$work)
            ->with('eco',$eco)
            ->with('people',$people)
            ->with('together',$together)
            ->with('film',$film)
            ->with('yoga',$yoga);
    }
}
