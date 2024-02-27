<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Contracts\Auth\StatefulGuard;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\LogoutResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
     /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
       
    }

    public function userProfile(){
        $data = User::latest()->where('user_role', 'normal_user')->get();
       // dd($data);
        return view('profile.user_profile',compact('data'));
    }
    public function addUser(){
        return view('profile.add_user');
    }


    public function saveUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required'
        ]);
        $saveUser=new User();
        $saveUser->name=$request->name;
        $saveUser->email=$request->email;
        $saveUser->phone=$request->phone;
        $saveUser->user_role='normal_user';
        $saveUser->password='$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $saveUser->save();
        return redirect()->route('admin.profile');

    }
    public function editUser($id){
        $editUser=User::find($id);
        return view('profile.edit_user',compact('editUser'));

    }
    public function updateUser(Request $request, $id){
        $updateUser=User::find($id);
        $updateUser->name=$request->name;
        $updateUser->email=$request->email;
        $updateUser->phone=$request->phone;
        $updateUser->save();
        return redirect()->route('admin.profile');

    }
    public function destroyUser($id){
        $destroyUser=User::find($id);
        $destroyUser->delete();
        return redirect()->route('admin.profile');
    }

    public function userlogout(Request $request){
        $this->guard->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return app(LogoutResponse::class);
    }
}
