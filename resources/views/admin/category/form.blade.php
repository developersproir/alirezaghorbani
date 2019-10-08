
<div class="section_page_main">
    @include('admin.partials.error')
    <form  class="form_usser_create" action="" method="post">
        {{csrf_field()}}
        <div class="margin_page_input file_input">
            <div class="uk-inline file_size">
                <label for="category_name">Category Title : </label>
                <span class="uk-form-icon" uk-icon="icon: comment"></span>
                <input type="text" name="category_name" class="input_bir" id="category_name" value="{{old('category_name',isset($catItem) ? $catItem->category_name:'')}}">
            </div>
        </div>

        <div class="btn_send">
            <input type="submit" name="submit" value="Save information">
        </div>
    </form>
</div>
