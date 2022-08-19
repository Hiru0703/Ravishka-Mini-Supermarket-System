<?php
namespace Illuminate\Foundation\Auth;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update()
    {
        return view('update');
    }

    public function updateUser(Request $request)
    {
        //  return $request;
        $user =  User::find($request->id);
        $user->name = $request->uname;
        $user->address = $request->add;
        $user->email = $request->email;
        $user->cnumber = $request->cnumber;
        $user->age = $request->age;
        $user->jobrole = $request->jobrole;
        

        $user->save();
        return redirect('/profile');
    }
    public function deleteUser(Request $request)
    {
        // return $request;
        $user = User::find($request->id);     

        $user->delete();

        return redirect('/login');
    }

    
}
