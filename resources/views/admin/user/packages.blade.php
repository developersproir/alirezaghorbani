@extends('layouts.admin')

@section('content')

        @if($user_packages && count($user_packages) > 0)
            <table class="uk-table uk-table-divider">
                <thead>
                <tr>
                    <th class="uk-width-small">Packages title</th>
                    <th class="uk-table-expand">Amount</th>
                    <th class="uk-width-small">Created At</th>
                </tr>
                </thead>
            @foreach($user_packages as $package)
                <tbody>
                <tr>
                <td>{{$package->package_title}}</td>
                <td>{{number_format($package->pivot->amount)}}</td>
                <td>{{$package->pivot->created_at}}</td>
                </tr>
                </tbody>
             @endforeach
                @else
            <div class="uk-alert-primary" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <p>You have not any packages .</p>
            </div>

        @endif
    </table>
@endsection