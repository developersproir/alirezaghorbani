


    <tbody>
    <tr>
        <td style="text-align: center">
            <a class="edite_user_items_"  href="{{route('admin.plans.edit',[$plan,'plan_id'])}}" title="edit User" uk-tooltip="edit User"> <i class="fas fa-user-edit"></i></a>
            <a class="delet_user_items_" href="{{route('admin.plans.remove',[$plan,'plan_id'])}}" title="Delete plan" uk-tooltip="Delete plan"><i class="far fa-trash-alt"></i></a>
        </td>
        <td>{{ $plan->bir_plan_title }}</td>
        <td>{{ $plan->bir_plan_download_limit }}</td>
        <td>{{ number_format($plan->bir_plan_prce) }}</td>
        <td>{{ $plan->bir_plan_days_count }}</td>
    </tr>

    </tbody>

