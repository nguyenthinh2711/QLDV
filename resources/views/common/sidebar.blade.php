<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Quản lý dịch vụ</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản lý dịch vụ
    </div>

    <!-- Nav Item - Món ăn -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-concierge-bell"></i>
            <span>Món ăn</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.listmonan') }}">Danh sách món ăn</a>
                <a class="collapse-item" href="{{ route('admin.createmonan') }}">Thêm món ăn</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Thực đơn -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
            aria-expanded="true" aria-controls="collapse3">
            <i class="fas fa-clipboard-list"></i>
            <span>Thực đơn</span>
        </a>
        <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.listThucdon') }}">Danh sách thực đơn</a>
                <a class="collapse-item" href="{{ route('admin.createTD') }}">Thêm thực đơn</a>
            </div>
        </div>
    </li>

     <!-- Nav Item - dịch vụ  -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4"
            aria-expanded="true" aria-controls="collapse4">
            <i class="fas fa-bed"></i>
            <span>Dịch vụ</span>
        </a>
        <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.listDvPhong') }}">Dịch vụ phòng</a>
                <a class="collapse-item" href="{{ route('admin.listDvSK') }}">Dịch vụ sức khỏe</a>
                <a class="collapse-item" href="{{ route('admin.listDvAU') }}">Dịch vụ ăn uống</a>
                <a class="collapse-item" href="{{ route('admin.createDV') }}">Thêm dịch vụ</a>
            </div>
        </div>
    </li>

    <div class="sidebar-heading">
        Nhân viên dịch vụ
    </div>

    <!-- Nav Item - nhan vien -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7"
            aria-expanded="true" aria-controls="collapse7">
            <i class="fas fa-users"></i>
            <span>Nhân viên DV</span>
        </a>
        <div id="collapse7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.listNVDichvu') }}">Danh sách nhân viên</a>
            </div>
        </div>
    </li>
    
    {{-- <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>