<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin_template/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin_template/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
               
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="fas fa-hand-holding-heart text-danger"></i>
                        <p>
                            Donor
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('donors.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Donor view</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('active_donors.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Donor</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="fas fa-tint text-danger"></i>
                        
                        <p>
                            Blood Request
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('blood_requests.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blood Request View</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-plus text-danger"></i>
                        <p>
                            Volunteer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('volunteers.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Volunteer Add</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('volunteers.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Volunteer view</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="fas fa-donate text-danger"></i>
                        <p>
                            Donation Campaign
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('donation_campaigns.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Donation Campaign Add</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('donation_campaigns.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Donation Campaign view</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="fas fa-image text-danger"></i>
                        <p>
                            Photo
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('photos.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Photo Add</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('photos.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Photo view</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope text-danger"></i>

                        <p>
                            Message
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('contact.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Message View</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>