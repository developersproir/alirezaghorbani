


    <tbody>
    <tr>
        <td style="text-align: center">
            <a class="edite_user_items_"  href="{{route('admin.packages.edit',[$package,'package_id'])}}" title="edit User" uk-tooltip="edit User"> <i class="fas fa-user-edit"></i></a>
            <a class="delet_user_items_" href="{{route('admin.packages.remove',[$package,'package_id'])}}" title="Delete plan" uk-tooltip="Delete plan"><i class="far fa-trash-alt"></i></a>
            <a class="syncfile_user_items_" href="{{route('admin.packages.sync_files',[$package,'package_id'])}}" title="syncFiles " uk-tooltip="syncFiles "><i class="fas fa-folder-open"></i></a>
        </td>
        <td>{{  $package->package_title  }}</td>
        <td>{{  number_format($package->package_price)  }}</td>
        <td>{{  $package->categories()->get()->count()  }}</td>
        <td>{{  $package->files()->get()->count()  }}</td>

    </tbody>

