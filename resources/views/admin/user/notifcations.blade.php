
@if(session('success'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Sign up successfully </p>
    </div>
@endif
@if(session('success_product'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Product Created successfully </p>
    </div>
@endif
@if(session('success_plan'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Plan Created successfully </p>
    </div>
@endif
@if(session('success_plan_update'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Plan Update successfully </p>
    </div>
@endif
@if(session('update'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Update User is successfully </p>
    </div>
@endif
@if(session('package'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>package is successfully </p>
    </div>
@endif
@if(session('package_edit'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Package edit is successfully </p>
    </div>
@endif
@if(session('success_category'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Category is successfully </p>
    </div>
@endif
@if(session('update_category'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Category update is successfully </p>
    </div>
@endif
@if(session('user_deleted'))
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>User Deleted.</p>
    </div>
@endif
@if(session('plan_deleted'))
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Plan Deleted.</p>
    </div>
@endif
@if(session('package_deleted'))
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Package Deleted.</p>
    </div>
@endif
@if(session('remove_category'))
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>Category Delete is successfully.</p>
    </div>
@endif