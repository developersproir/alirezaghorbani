@if($errors->any())

    @foreach($errors->all() as $error)

        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>
                {{  $error }}
            </p>
        </div>

    @endforeach

    @endif