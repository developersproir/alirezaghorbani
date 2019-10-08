@extends('layouts.frontend')

@section('content')
    <ul>
        <li>Title : {{$file_item->bir_file_title}}</li>
        <li>description : {!!html_entity_decode($file_item->bir_file_description)!!}</li>
    </ul>

    @if(App\Utility\User::is_user_subscribed($current_user))
        <a class="uk-button uk-button-primary" href="{{ route('frontend.files.download',[$file_item->id])  }}">دانلود فایل </a>
        <a data-fid="{{$file_item->id}}" class="uk-button uk-button-danger btn_report_file" href="">گزارش خطا</a>
    @else
        <a href="{{  route('frontend.plans.index') }}" class="uk-button uk-button-secondary uk-width-1-1"> خرید این فایل</a>
    @endif
@endsection
<script>
    jQuery(document).ready(function ($) {
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '.btn_report_file', function (event) {

            event.preventDefault();
            var $this = $(this);
            var file_id = $this.data('fid');
            $.ajax({
                url: '/file/report',
                type: 'post',
                dataType: 'json',
                data: {
                    file_id: file_id
                },
                success: function (response) {
                    if(response.success)
                    {
                        swal({
                            text:response.message,
                            title:'',
                            icon:'success'
                        });
                    }else{
                        swal({
                            text:response.message,
                            title:'',
                            icon:'error'
                        });
                    }
                },
                erorr: function () {

                }
            });

        });
    });

</script>

