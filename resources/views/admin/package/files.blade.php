@extends('layouts.admin')
@section('content')
 @include('admin.user.notifcations')

    @if($files && count($files) > 0)

        <form class="form-switch" action="" method="post">
            {{csrf_field()}}
            <ul class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s uk-text-center" uk-sortable="handle: .uk-card" uk-grid>

        @foreach($files as $file)

            <li>
                <div class="uk-card uk-card-default uk-card-body">
                    <div class="position_mainPpackage" uk-grid>
                        <div>
                            <img src="{{asset('')}}/public/file/{{($file->bir_file_name)}}" width="50" height="50">
                            <span class="uk-text-top">{{$file->bir_file_title}}</span>
                        </div>
                    </div>
                <label class="position_package_label">
                    <input type="checkbox" name="files[]" value="{{$file->id}}" {{isset($package_files) && in_array($file->id,$package_files) ? 'checked'  : '' }}>
                    <i></i>
                </label>


                </div>
            </li>

            @endforeach
    </ul>
        <div class="btn_package_form">
           <button name="submit_package_files" value="Save">Save Information</button>
        </div>
        </form>
    @endif

@endsection