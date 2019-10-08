<a class="delet_user_items_" href="{{route('admin.user.delete',$user->id)}}" title="Delete User" uk-tooltip="Delete User"><i class="far fa-trash-alt"></i></a>
<a class="edite_user_items_" href="{{route('admin.user.edit',$user->id)}}" title="Edit User" uk-tooltip="Edit User"><i class="fas fa-user-edit"></i></a>
<a class="syncfile_user_items_" href="{{route('admin.users.packages',[$user->id])}}" title="Packages " uk-tooltip="Packages "><i class="fas fa-folder-open"></i></a>
