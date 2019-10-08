
<div class="section_page_main">
    @include('admin.partials.error')
    <form  class="form_usser_create" action="" method="post">
        {{csrf_field()}}
        <div class="margin_page_input file_input">
            <div class="uk-inline file_size">
                <label for="package_title">File Package : </label>
                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                <input type="text" name="package_title" class="input_bir" id="package_title" value="{{old('package_title',isset($packageItem) ? $packageItem->package_title:'')}}">
            </div>
        </div>
        <div class="margin_page_input file_input">
            <div class="uk-inline file_size">
                <label for="package_price">Price Package : </label>
                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                <input type="text" name="package_price" class="input_bir" id="package_price" value="{{old('package_price',isset($packageItem) ? $packageItem->package_price:'')}}">
            </div>
        </div>
        <div class="margin_page_input file_input">
            <div class="uk-inline file_size">
                <label for="package_price">Category : </label>
                <select name="categorize[]" class="select2" id="categorize" multiple>

                    @foreach($categories as $cat)
                        <option value="{{ $cat->category_id  }}" {{ isset($package_category)  && in_array($cat->category_id,$package_category) ? 'selected' : '' }}>{{$cat->category_name}}</option>
                        @endforeach

                </select>

            </div>
        </div>

        <div class="btn_send">
            <input type="submit" name="submit" value="Save information">
        </div>
    </form>
</div>
<script>
    jQuery(document).ready(function ($) {
        $('select.select2').select2();
    })
</script>