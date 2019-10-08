<tbody>
<tr>
    <td style="text-align: center">@include('admin.user.operations',$user)</td>
    <td>{{$user->id}}</td>
    <td class="uk-table-link">
        {{$user->bir_full_name}}
    </td>
    <td class="uk-text-truncate">
        {{$user->bir_email}}
    </td>
    <td class="uk-text-nowrap">
        {{number_format($user->bir_walet)}} $
    </td>
    <td class="uk-text-nowrap">
        {{$user->packages()->count()}}
    </td>
    <td class="uk-text-nowrap">
        {{$user->bir_role}}
    </td>
</tr>
</tbody>