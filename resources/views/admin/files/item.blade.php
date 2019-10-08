    <li>
        <section id="post_product_items__" class="hvr-bob">
        <div class="images_product_admin_panel">
            <img src="{{asset('')}}/public/file/{{($files->bir_file_name)}}" alt="">
        </div>
        <div class="content__product_admin_panel">
            <h1>
                {{$files->bir_file_title}}
            </h1>
            <p>
                {!!html_entity_decode($files->bir_file_description)!!}
            </p>
        </div>
        <div class="desc_content__product_admin_panel">
            <span><i class="fas fa-tasks"></i> {{$files->bir_file_type}}</span>
            <span><i class="fab fa-mixcloud"></i> {{$files->bir_file_size}}KB</span>
            <span><a href="{{$files->bir_file_name}}">
                    <i class="fas fa-cloud-download-alt"></i>
                </a></span>
        </div>
        <div class="btn_content__product_admin_panel">

            <a class="hvr-radial-out" href="{{route('admin.files.edit',[$files,'file_id'])}}">Edit </a>
            <a class="hvr-radial-out" href="{{route('admin.files.remove',[$files,'file_id'])}}">Trash </a>

        </div>
        </section>
        </li>

