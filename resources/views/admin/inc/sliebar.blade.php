<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link" href="pages/widgets/widgets.html">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Widgets</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-compass menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/accordions.html">Accordions</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/badges.html">Badges</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/modals.html">Modals</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/progress.html">Progress bar</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/pagination.html">Pagination</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/tabs.html">Tabs</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/typography.html">Typography</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="pages/ui-features/tooltips.html">Tooltips</a></li>
                </ul>
            </div>
        </li> --}}
        
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Quản lý danh mục</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.category.index')}}">Danh mục</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{route('admin.category.add')}}">Thêm danh mục</a></li>
                    {{-- <li class="nav-item"><a class="nav-link"
                            href="pages/forms/validation.html">Validation</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/forms/wizard.html">Wizard</a></li> --}}
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false"
                aria-controls="editors">
                <i class="mdi mdi-layers menu-icon"></i>
                <span class="menu-title">Quản lý sản phẩm</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.product.index')}}">Sản phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.nha.dat.index')}}">Nhà đất</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
                aria-controls="ui-advanced">
                <i class="mdi mdi-pencil-box-outline menu-icon"></i>
                <span class="menu-title">Quản lý bài viết</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link"
                            href="{{route('admin.news.index')}}">Tin tức</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{route('admin.video.index')}}">Video</a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{route('admin.standard.index')}}">Tiêu chí</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="mdi mdi-bell menu-icon"></i>
                <span class="menu-title">Quản lý đơn hàng</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false"
                aria-controls="charts">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Quản lý trang tĩnh</span>
                <i class="menu-arrow"></i>
            </a>
            @php
                $page = DB::table('pages')->orderBy('id','DESC')->get();
            @endphp
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    @foreach ($page as $item)
                    <li class="nav-item"> <a class="nav-link" href="/admin/page/{{$item->slug}}">{{$item->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false"
                aria-controls="tables">
                <i class="mdi mdi-image menu-icon"></i>
                <span class="menu-title">Quản lý hình ảnh</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.photo.logo')}}">Logo</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.photo.favicon')}}">Favicon</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/photo/slide">Slideshow</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/photo/partner">Đối tác</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/photo/social-top">Mạng xã hội top</a></li>
                    <li class="nav-item"> <a class="nav-link" href="/admin/photo/social-footer">Mạng xã hội footer</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="mdi mdi-checkbox-blank-circle menu-icon"></i>
                <span class="menu-title">Quản lý trang SEO</span>
                <i class="menu-arrow"></i>
            </a>
            @php
                $seo_page = DB::table('seo_pages')->orderBy('id','DESC')->get();
            @endphp
            <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                    @foreach ($seo_page as $item)
                    <li class="nav-item"> <a class="nav-link" href="/admin/seo-page/{{$item->type}}">{{$item->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.config.index')}}">
                <i class="fa fa-gears menu-icon"></i>
                <span class="menu-title">Thiết lập thông tin</span>
            </a>
        </li>
        
        
        {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                <i class="mdi mdi-map menu-icon"></i>
                <span class="menu-title">Maps</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/mapael.html">Mapael</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/vector-map.html">Vector
                            Map</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/maps/google-maps.html">Google
                            Map</a></li>
                </ul>
            </div>
        </li> --}}
        {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html">
                            Register 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html">
                            Lockscreen </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
                <i class="mdi mdi-alert-circle menu-icon"></i>
                <span class="menu-title">Error pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false"
                aria-controls="general-pages">
                <i class="mdi mdi-file menu-icon"></i>
                <span class="menu-title">General Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank
                            Page </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News
                            grid </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html">
                            Search Results </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html">
                            Portfolio </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false"
                aria-controls="e-commerce">
                <i class="mdi mdi-basket menu-icon"></i>
                <span class="menu-title">E-commerce</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice
                        </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html">
                            Pricing Table </a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders
                        </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/apps/email.html">
                <i class="mdi mdi-email menu-icon"></i>
                <span class="menu-title">E-mail</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/apps/calendar.html">
                <i class="mdi mdi-calendar-range menu-icon"></i>
                <span class="menu-title">Calendar</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/apps/todo.html">
                <i class="mdi mdi-playlist-check menu-icon"></i>
                <span class="menu-title">Todo List</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/apps/gallery.html">
                <i class="mdi mdi-image menu-icon"></i>
                <span class="menu-title">Gallery</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li> --}}
    </ul>
</nav>
