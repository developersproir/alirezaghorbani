
<div class="section_page_main">
    @include('admin.partials.error')
    <form  class="form_usser_create" action="" method="post">
        {{csrf_field()}}
        <div class="margin_page_input">
            <div class="uk-inline">
                <label for="bir_full_name">User Full Name : </label>
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input type="text" name="bir_full_name" class="input_bir" id="bir_full_name" value="{{old('bir_full_name',isset($userItem) ? $userItem->bir_full_name:'')}}">
            </div>
        </div>
        <div class="margin_page_input">
            <div class="uk-inline">
                <label for="bir_email">Email : </label>
                <span class="uk-form-icon" uk-icon="icon: mail"></span>
                <input onfocus="javascript: this.removeAttribute('readonly')" placeholder="yourname@yourdomain.com"  type="email" name="bir_email" class="input_bir" id="bir_email" value="{{old('bir_email',isset($userItem) ? $userItem->bir_email:'')}}">
            </div>
        </div>
        <div class="margin_page_input">
            <div class="uk-inline">
                <label for="password">Password : </label>
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input type="password" name="password" class="input_bir" id="password" value="{{isset($userItem) ? $userItem->bir_email:''}}">
            </div>
        </div>

        <div class="margin_page_input">
            <label for="bir_role">Role : </label>
                <div uk-form-custom="target: > * > span:first-child">
                    <select name="bir_role" id="bir_role">
                        <option  for="bir_role" value="1" {{isset($userItem) && $userItem->bir_role == 1 ? 'selected' : ''}}>User</option>
                        <option for="bir_role" value="2" {{isset($userItem) && $userItem->bir_role == 2 ? 'selected' : ''}}>Operator</option>
                        <option  for="bir_role" value="3" {{isset($userItem) && $userItem->bir_role == 3 ? 'selected' : ''}}>Admin</option>
                    </select>
                    <button class="uk-button uk-button-default" type="button" tabindex="-1">
                        <span></span>
                        <span uk-icon="icon: chevron-down"></span>
                    </button>
                </div>
            </div>

        <div class="margin_page_input">
            <div class="uk-inline">
                <label for="bir_walet">Wallet : </label>
                <span class="uk-form-icon" uk-icon="icon:  credit-card"></span>
                <input type="text" name="bir_walet" placeholder="0" class="input_bir" id="bir_walet" value="{{old('bir_walet',isset($userItem) ? $userItem->bir_walet:'')}}">
            </div>
        </div>
        <div class="btn_send">
            <input type="submit" name="submit" value="Save information">
        </div>

    </form>
</div>
