<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;


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


  public function about()
    {
        //
       return view('employee.show');

      // return view('employee.view');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    
     */
    public function viewemployee()
    {
        //
        $users = user::all();
        return  view('admin.employee')->with('users',$users);
       
    }

    public function index()
    {
        
       return view('employee.home');
     // return "hii";

    }

    public function employeehome()
    {
        
        return view('employee.home');
    }


    public function show($id)
    {
       //$user =user::find($user->id);
       //return view ('employee.show')->with('user',$user);
     //  return "hi";
    }

    public function edit($id)
    {
       $user=user::find($id);
       return view('employee.edit')->with('user',$user);
    }

    public function update(Request $request, $id )
    {
        $user=user::find($id);

        $user->name=$request->name;
        $user->busnumber=$request->busnumber;
        $user->phonenumber=$request->phonenumber;
        $user->currentplace=$request->currentplace;
        $user->email=$request->email;
        $user->password=$request->password;
        $user['password'] = bcrypt($user['password']);

        $user->save();

    }

    public function destroy(user $user)
    {
        //
   
        if (user::destroy($user->id)) {
            # code.
            echo "recored deleted sucessfully";
        }
   // echo "ff";
    //$s->delete();
   // echo DB::delete("delete from users where user=$S");
  
   
    }

  /*  public function show($id)
    {
        //
        $user= user::find($id);
    }
*/

    
}
