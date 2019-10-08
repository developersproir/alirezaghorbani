
<div class="section_page_main">
    @include('admin.partials.error')
    <form  class="form_usser_create" action="" method="post">
        {{csrf_field()}}
        <div class="margin_page_input file_input">
            <div class="uk-inline file_size">
                <label for="bir_plan_title">File Title : </label>
                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                <input type="text" name="bir_plan_title" class="input_bir" id="bir_plan_title" value="{{old('bir_plan_title',isset($planItem) ? $planItem->bir_plan_title:'')}}">
            </div>
        </div>
        <div class="margin_page_input file_input">
            <div class="uk-inline file_size">
                <label for="bir_plan_download_limit">Download limit : </label>
                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                <input type="text" name="bir_plan_download_limit"  class="input_bir" id="bir_plan_download_limit" value="{{old('bir_plan_download_limit',isset($planItem) ? $planItem->bir_plan_download_limit:'')}}">
            </div>
        </div>
        <div class="margin_page_input file_input">
            <div class="uk-inline file_size">
                <label for="bir_plan_prce">Price : </label>
                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                <input type="number" name="bir_plan_prce" class="input_bir" id="bir_plan_prce" value="{{old('bir_plan_prce',isset($planItem) ? $planItem->bir_plan_prce:'')}}">
            </div>
        </div>
        <div class="margin_page_input file_input">
            <div class="uk-inline file_size">
                <label for="bir_plan_days_count">Number of days of credit : </label>
                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                <input type="text" name="bir_plan_days_count" class="input_bir" id="bir_plan_days_count" value="{{old('bir_plan_days_count',isset($planItem) ? $planItem->bir_plan_days_count:'')}}">
            </div>
        </div>

        <div class="btn_send">
            <input type="submit" name="submit" value="Save information">
        </div>
    </form>
</div>
