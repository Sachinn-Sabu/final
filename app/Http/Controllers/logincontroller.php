<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newlogin;
use DB;
use Illuminate\Support\Facades\Session;
class logincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $n=request('uname');
        $p=request('upass');
        $res=\DB::select('select * from newlogins where username=? and password=?',[$n,$p]);
        //$res=newlogin::where('username',$n)->where('password',$p)->first();
        if(isset($res)&&$res!=null)
        {
            Session::put('user',$n);
            return redirect('/');
        }
        else
        {
            return view('/login',['er'=>'INVALID DETAILS']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=request('rname');
        $password=request('rpass');
        $reg=new newlogin();
        $reg->username=$name;
        $reg->password=$password;
        $reg->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=DB::table('newlogins')->get();
        return view('display',['user'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=newlogin::where('id',$id)->first();
        return view('edit',["d"=>$data]);
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
        $name=request('uname');
        $password=request('upass');  
        newlogin::where('id',$id)->update(['username'=>$name,'password'=>$password]);

        $data=DB::table('newlogins')->get();
        return view('display',['user'=>$data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $u=newlogin::where('id',$id)->first();
        $u->delete();
        $data=DB::table('newlogins')->get();
        //$data=newlogin::get();
        return view('display',['user'=>$data]);

    }
}
