<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('admin/darkpan')}}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    
                        
                        <a href="{{route('desh.create')}}" class="nav-item nav-link {{request()->is('desh/create')  ? 'active' : ''}} "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{'desh/show'== request()->path()  ? 'active' : ''}}" data-bs-toggle="dropdown" ><i class="fa fa-laptop me-2"></i>Product</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('desh.create')}}" class="dropdown-item {{'desh/create'== request()->path()  ? 'active' : ''}}">Add Product</a>
                            <a href="{{route('desh.show')}}" class="dropdown-item {{'desh/show'== request()->path()  ? 'active' : ''}}" >Show Product</a>
                            <a href="element.html" class="dropdown-item {{request()->is('contact')  ? 'active' : ''}}">Other Elements</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{'desh/showservice'== request()->path()  ? 'active' : ''}}" data-bs-toggle="dropdown" ><i class="fa fa-th me-2"></i>Services</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('desh.createservice')}}" class="dropdown-item {{'desh/create'== request()->path()  ? 'active' : ''}}">Add Service</a>
                            <a href="{{route('desh.showservice')}}" class="dropdown-item {{'desh/show'== request()->path()  ? 'active' : ''}}" >Show Services</a>
                            
                        </div>
                    </div>
                    
                    <a href="" class="nav-item nav-link {{request()->is('contact')  ? 'active' : ''}}"><i class="fa fa-keyboard me-2"></i>Food</a>
                    <a href="table.html" class="nav-item nav-link{{request()->is('contact')  ? 'active' : ''}}"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>