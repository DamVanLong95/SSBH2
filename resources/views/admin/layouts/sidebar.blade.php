<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('posts.index')}}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Posts</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('excel.company')}}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Doanh nghiệp</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Trang xe </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('indexBrand.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Brand(hang xe) </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexBrandCate.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Brand Cate </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexPermission.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Permission </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexFinance.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Finance </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexPunishment.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Pubnishment </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexLocation.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Location </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexActivity.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Activity </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexDetail.import')}}" class="sidebar-link"><i class="mdi mdi-emoticon-cool"></i><span class="hide-menu">Detail </span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Trang nhân thọ </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('indexScope.import')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Scope(BH)</span></a></li>
                        <li class="sidebar-item"><a href="{{route('product_longevity.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Sản phẩm(BH)</span></a></li>
                        <li class="sidebar-item"><a href="{{route('sick_longevity.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Danh sách bệnh (import data)</span></a></li>
                        <li class="sidebar-item"><a href="{{route('benifit_longevity.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Sản phẩm bổ trợ</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Trang sức khỏe </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{route('product.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Sản phẩm lọc dưới banner</span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexHealth.import')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Dữ liệu hiển thị </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexProgram.import')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Chương trình theo sức khỏe</span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexHospital.import')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Bệnh viện liên kết</span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexDistrict.import')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Quận </span></a></li>
                        <li class="sidebar-item"><a href="{{route('indexExclusion.import')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Điều khoản loại trừ</span></a></li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('treatment.index')}}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Ưu đãi</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('advisor.index')}}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Trang tư vấn viên</span></a></li>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
