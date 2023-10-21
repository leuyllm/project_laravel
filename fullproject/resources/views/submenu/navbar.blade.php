<div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{route('front.home')}}" class="nav-item nav-link {{ (request()->is('/')) ? 'active' : ''}}">Home</a>
                        <a href="{{route('front.about')}}" class="nav-item nav-link {{ (request()->is('about')) ? 'active' : ''}}">About</a>
                        <a href="{{route('front.service')}}" class="nav-item nav-link {{ (request()->is('service')) ? 'active' : ''}}">Service</a>
                        <a href="{{route('front.menu')}}" class="nav-item nav-link {{ (request()->is('menu')) ? 'active' : ''}}">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{request()->is('pages')  ? 'active' : ''}}" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{route('front.booking')}}" class="dropdown-item {{request()->is('booking')  ? 'active' : ''}}">Booking</a>
                                <a href="{{route('front.team')}}" class="dropdown-item {{request()->is('team')  ? 'active' : ''}}">Our Team</a>
                                <a href="{{route('front.testimonial')}}" class="dropdown-item {{request()->is('testimonial')  ? 'active' : ''}}">Testimonial</a>
                            </div>
                        </div>
                        <a href="{{route('front.contact')}}" class="nav-item nav-link {{request()->is('contact')  ? 'active' : ''}}">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary py-2 px-4 ">Book A Table</a>
</div>