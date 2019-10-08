<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{

    public function index()
    {
        $users=User::all();
        return view('admin.user.index',compact('users'))->with(['user_activity'=>'uk-open','title_page'=>'All User']);
   }

    public function create()
    {
        return view('admin.user.create')->with(['user_activity'=>'uk-open','title_page'=>'Add new User',
        'detils_admin'=>'Create a new user and add to this site.']);
   }

    public function store(UserRequest $userRequest)
    {
        $user_data = [
            'bir_full_name' => request()->input('bir_full_name'),
            'bir_email' => request()->input('bir_email'),
            'password' => request()->input('password'),
            'bir_role' => request()->input('bir_role'),
            'bir_walet' => request()->input('bir_walet'),
        ];
        $new_user_object = User::create($user_data);
        if ($new_user_object instanceof User){
            return redirect()->route('admin.user.list')->with('success',true);
        }
   }

    public function delete($user_id)
    {
        if ($user_id && ctype_digit($user_id)){
            $userItem=User::find($user_id);
            if ($userItem && $userItem  instanceof User){
                $userItem->delete();
                return redirect()->route('admin.user.list')->with('user_deleted',true);
            }
        }
    }

    public function edit($user_id)
    {
        if ($user_id && ctype_digit($user_id)){
            $userItem=User::find($user_id);
            if ($userItem && $userItem  instanceof User){
                return view('admin.user.edit',compact('userItem'))->with(['user_activity'=>'uk-open','title_page'=>'Edit User',
                    'detils_admin'=>'Edit user and add to this site.']);
            }
        }
    }

    public function update(UserRequest $userRequest,$user_id)
    {
        $input=[
            'bir_full_name' => request()->input('bir_full_name'),
            'bir_email' => request()->input('bir_email'),
            'password' => request()->input('password'),
            'bir_role' => request()->input('bir_role'),
            'bir_walet' => request()->input('bir_walet'),
        ];
        if (empty(request()->input('password'))){
            unset($input['password']);
        }
        $input['password']= bcrypt($input['password']);
        $userItem=User::find($user_id);
        $userItem->update($input);
        return redirect()->route('admin.user.list')->with('update',true);
    }

    public function packages(Request $request,$user_id)
    {
        $user = User::find($user_id);
        $user_packages = $user->packages()->get();
        return view('admin.user.packages',compact('user_packages'))->with(['user_activity'=>'uk-open','title_page'=>'Display user Packages',
            'detils_admin'=>'Display user Packages this site.']);
    }
}
