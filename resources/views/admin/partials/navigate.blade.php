<aside id="asidebar_admin_panel">

    <section class="admin_asiderbar">

        <div class="website_name_">
            <img src="{{asset('/public/images/profile_man.svg')}}" alt="">
            <h1>
                BirCompany
            </h1>

        </div>

        <ul class="list_url_panel " uk-accordion>
            <li  class="{{isset($dashboard_activity) ? $dashboard_activity : ''}}">
                <a class="uk-accordion-title" href="#"><i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <div class="uk-accordion-content content_accordion_panel_admin">
                    <ul>
                        <li>
                            <a  href="{{route('admin.dashboard.home')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Update
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{isset($files_activity) ? $files_activity : ''}}">
                <a class="uk-accordion-title" href="#"><i class="fas fa-shopping-bag"></i>
                    Product
                </a>
                <div class="uk-accordion-content content_accordion_panel_admin">
                    <ul>
                        <li>
                            <a  href="{{route('admin.files.list')}}">
                                All Product
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.files.create')}}">
                                Add new
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{isset($category_activity) ? $category_activity : ''}}">
                <a class="uk-accordion-title" href="#"><i class="fas fa-clipboard-list"></i>
                    categories
                </a>
                <div class="uk-accordion-content content_accordion_panel_admin">
                    <ul>
                        <li>
                            <a  href="{{route('admin.categories.list')}}">
                                All categories
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.categories.create')}}">
                                Add new
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{isset($plan_activity) ? $plan_activity : ''}}">
                <a class="uk-accordion-title" href="#"><i class="fas fa-th-large"></i>
                    Plan
                </a>
                <div class="uk-accordion-content content_accordion_panel_admin">
                    <ul>
                        <li>
                            <a  href="{{route('admin.plans.list')}}">
                                All plan
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.plans.create')}}">
                                Add new
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{isset($package_activity) ? $package_activity : ''}}">
                <a class="uk-accordion-title" href="#"><i class="fas fa-box-open"></i>
                    Package
                </a>
                <div class="uk-accordion-content content_accordion_panel_admin">
                    <ul>
                        <li>
                            <a  href="{{route('admin.packages.list')}}">
                                All Package
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.packages.create')}}">
                                Add new
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{isset($user_activity) ? $user_activity : ''}}">
                <a class="uk-accordion-title" href="#"><i class="fas fa-users"></i>
                    Users
                </a>
                <div class="uk-accordion-content content_accordion_panel_admin">
                    <ul>
                        <li>
                            <a  href="{{ route('admin.user.list') }}">
                                All User
                            </a>
                        </li>
                        <li>
                            <a href="{{route('admin.user.create')}}">
                                Add new User
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{isset($payment_activity) ? $payment_activity : ''}}">
                <a class="uk-accordion-title" href="#"><i class="far fa-money-bill-alt"></i>
                    Payment
                </a>
                <div class="uk-accordion-content content_accordion_panel_admin">
                    <ul>
                        <li>
                            <a  href="{{ route('admin.payments.list') }}">
                                List Payment
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#"><i class="fas fa-toolbox"></i>
                    Option
                </a>
                <div class="uk-accordion-content content_accordion_panel_admin">
                    <ul>
                        <li>
                            <a  href="#">
                                Theme
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                widgets
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Menu
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Editor
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a class="uk-accordion-title" href="#"><i class="fas fa-cog"></i>
                    Setting
                </a>
                <div class="uk-accordion-content content_accordion_panel_admin">
                    <ul>
                        <li>
                            <a  href="#">
                                General Setting
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Permalink
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Read
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                post Setting
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                product Setting
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <script>

            $(function() {
                var pgurl = window.location.href.substr(window.location.href
                    .lastIndexOf("/") + 1);
                $(".list_url_panel li a").each(function() {
                    if ($(this).attr("href") == pgurl || $(this).attr("href") == '')
                        $(this).addClass("active");
                })
            });


        </script>

    </section>

</aside>
