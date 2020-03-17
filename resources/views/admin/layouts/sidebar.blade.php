<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Posts </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('posts.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Danh sach </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Import Data </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('indexBrand.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Brand(hang xe) </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexBrandCate.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Brand Cate </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexPermission.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Permission </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexFinance.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Finance </span></a></li>
                        <li class="sidebar-item"><a href="{{route('excel.company')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Company Table </span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
