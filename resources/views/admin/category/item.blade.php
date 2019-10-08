


    <tbody>
    <tr>
        <td style="text-align: center">
            <a class="edite_user_items_"  href="{{route('admin.categories.edit',[$category,'category_id'])}}" title="edit User" uk-tooltip="edit User"> <i class="fas fa-user-edit"></i></a>
            <a class="delet_user_items_" href="{{route('admin.categories.remove',[$category,'category_id'])}}" title="Delete category" uk-tooltip="Delete category"><i class="far fa-trash-alt"></i></a>
        </td>
        <td>{{ $category->category_id }}</td>
        <td>{{ $category->category_name }}</td>
    </tr>

    </tbody>

