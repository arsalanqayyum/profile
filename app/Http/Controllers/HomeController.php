<?php

namespace App\Http\Controllers;

use App\clients;
use App\Http\Requests;
use App\posts;
use App\role;
use App\slider;
use App\User;
use App\widgets;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Mockery\Exception;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getLogout(){
        Auth::logout();
        Session::flush();
        return Redirect::to('/lvl-admin');
    }


    public function viewslider(){
        $allslides = slider::all();
        return view('admin.sliders',compact('allslides'));
    }

    public function addslides(){
        $post = new slider;
        $post->head = Input::get('head');
        $post->content = Input::get('content');
        $post->save();
        return redirect()->back();
    }

    public function updateslider($id){
        $post = slider::query()->findOrFail($id);
        $post->head = Input::get('head');
        $post->content = Input::get('content');
        $post->save();
        return redirect()->back();
    }

    public function deleteslides($id){
        slider::query()->findOrFail($id)->delete();
        return redirect()->back();
    }

    public function posts(){
        $posts = DB::table('posts')->where('id','>=',7)->get();
        return view('admin.posts',compact('posts'));
    }

    public function addpost(Request $request){
        $post = new posts;
        $post->title = Input::get('title');
        $post->content = Input::get('content');
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        storage::put('images'.$filename,file_get_contents($request->file('image')->getRealPath()));
        $post->image = $filename;
        $post->save();
        return redirect()->back();
    }

    public function updatepost(Request $request , $id){
        $post = posts::query()->findOrFail($id);
        $post->title = Input::get('title');
        $post->content = Input::get('content');
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        storage::put('images'.$filename,file_get_contents($request->file('image')->getRealPath()));
        $post->image = $filename;
        $post->save();
        return redirect()->back();
    }

    public function deletepost($id){
        DB::table('posts')->delete($id);
        return redirect()->back();
    }

    public function team(){
        $team = DB::table('posts')->whereIn('id',[3,4,5])->get();
        return view('admin.team',compact('team'));
    }

    public function updateteam($id,Request $request){
        $post = posts::query()->findOrFail($id);
        $post->title = Input::get('name');
        $post->content = Input::get('designation');
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        storage::put('images'.$filename,file_get_contents($request->file('image')->getRealPath()));
        $post->image = $filename;
        $post->save();
        return redirect()->back();
    }

    public function client(){
        $client = clients::all();
        if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2){
            return view('admin.clients',compact('client'));
        }else
            return redirect()->back()->with('message','your are not allowed');

    }

    public function addclient(Request $request){
        $post = new clients;
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        storage::put('images'.$filename,file_get_contents($request->file('image')->getRealPath()));
        $post->image = $filename;
        $post->save();
        return redirect()->back();
    }

    public function updateclient(Request $request,$id){
        $post = clients::query()->findOrFail($id);
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        storage::put('images'.$filename,file_get_contents($request->file('image')->getRealPath()));
        $post->image = $filename;
        $post->save();
        return redirect()->back();
    }

    public function deleteclient($id){
        DB::table('clients')->delete($id);
        return redirect()->back();
    }

    public function widget(){
        $widget = widgets::all();
        return view('admin.widget',compact('widget'));
    }

    public function updatewidget(){
         widgets::query()->where('id','=',2)->update([

            'head'  => Input::get('head2'),
             'content'  => Input::get('content2')
        ]);
        widgets::query()->where('id','=',3)->update([

            'head'  => Input::get('head3'),
            'content' => Input::get('content3')
        ]);
        widgets::query()->where('id','=',4)->update([

            'head'  => Input::get('head4'),
            'content' => Input::get('content4')
        ]);
        widgets::query()->where('id','=',5)->update([

            'head'  => Input::get('head5'),
            'content' => Input::get('content5')
        ]);
        widgets::query()->where('id','=',6)->update([

            'head'  => Input::get('head6'),
            'content' => Input::get('content6')
        ]);
        widgets::query()->where('id','=',7)->update([

            'head'  => Input::get('head7'),
            'content' => Input::get('content7')
        ]);
        return redirect()->back();
    }

    public function updatewidget2(){
        widgets::query()->where('id','=',1)->update([
           'head' => Input::get('head1'),
           'content' => Input::get('content1')
        ]);
        return redirect()->back();
    }

    public function updatewidget3(){
        widgets::query()->where('id','=',8)->update([
            'content' => Input::get('content8')
        ]);
        widgets::query()->where('id','=',9)->update([
            'content' => Input::get('content9')
        ]);
        widgets::query()->where('id','=',10)->update([
            'content' => Input::get('content10')
        ]);
        return redirect()->back();
    }

    public function user(){
        $user = DB::table('users')->join('roles','users.role_id','=','roles.id')->select('users.id','name','email','password','users.created_at','users.updated_at','roles.role')->get();
        $role = role::all();
        if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        return view('admin.user',compact('user','role'));
        else
            return redirect()->back()->with('message','you are not allowed');
    }

    public function adduser(){
        $credentials = Input::only('name','email','password','role_id');
        $credentials['password'] = Hash::make($credentials['password']);
        try{
            $user = User::create($credentials);
        }catch (Exception $e){
            return Response::json(['error' => 'User already exists.'], Illuminate\Http\Response::HTTP_CONFLICT);
        }
        $token = Auth::User($user);

/*        return Response::json(compact('token'));*/
        return redirect()->back();
    }

    public function updateuser($id)
    {
        $user = User::query()->findOrFail($id);
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->role_id = Input::get('role_id');
        $user->save();
        return redirect()->back();
    }

    public function resetpassword($id){
        $user = User::query()->findOrFail($id);
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        return redirect()->back();
    }

    public function dashboard(){
        $user = DB::table('users')->join('roles', 'users.role_id', '=', 'roles.id')->select('roles.role')->first();
        $slide_count = DB::table('sliders')->count();
        $post_count = DB::table('posts')->count();
        $team_count = DB::table('posts')->select(DB::raw('count(*) as count,title'))->where('id','>=',2)->get();
        return view('admin.home',compact('user','slide_count','post_count','team_count'));
    }
}
