<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        @if(Auth::check())
        <div class="user-profile">
            <div class="user-pro-body">
                <div><img src="{{asset('assets/backend/images/users/2.jpg')}}" alt="user-img" class="img-circle"></div>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                       data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}<span class="caret"></span></a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="{{ route('backend.profile') }}" class="dropdown-item"><i class="ti-user"></i> My
                            Profile</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My
                            Balance</a>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account
                            Setting</a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="javascript:0" class="dropdown-item logout-btn"><i class="fas fa-power-off"></i>
                            Logout</a>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('backend.dashboard') }}">
                        <i class="ti-files"></i><span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Setting</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)" class="has-arrow">Application</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('application.seoStaticOptionForm') }}">Seo </a></li>
                                <li><a href="{{ route('application.logoAndImageStaticOptionForm') }}">Logo and images </a></li>
                                <li><a href="{{ route('application.socialStaticOptionForm') }}">Social</a></li>
                                <li><a href="{{ route('application.appStaticForm') }}">App</a></li>
                                <li><a href="{{ route('application.companyDetailStaticOptionForm') }}">Company Details</a></li>
                                <li><a href="{{ route('application.customScriptStaticOptionForm') }}">Custom script</a></li>
                                <li><a href="{{ route('application.fbPageStaticOptionForm') }}">Facebook page</a></li>
                                <li><a href="{{ route('application.mapLinkStaticOptionForm') }}">Map link</a></li>
                                <li><a href="{{ route('application.footerCreditStaticOptionForm') }}">Footer Credit</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Website</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)" class="has-arrow">Faq</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('backend.faq.index') }}">Faq list </a></li>
                                <li><a href="{{ route('backend.faq.create') }}">Faq create </a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="has-arrow">Blog</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('backend.blog.index') }}">Blog list </a></li>
                                <li><a href="{{ route('backend.blog.create') }}">Blog create </a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="has-arrow">Testimonial</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('backend.testimonial.index') }}">Testimonial list </a></li>
                                <li><a href="{{ route('backend.testimonial.create') }}">Testimonial create </a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="has-arrow">Gallery</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('backend.gallery.index') }}">Gallery list </a></li>
                                <li><a href="{{ route('backend.gallery.create') }}">Gallery create </a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="has-arrow">Partner</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('backend.partner.index') }}">Partner list </a></li>
                                <li><a href="{{ route('backend.partner.create') }}">Partner create </a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)" class="has-arrow">Custom page</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('backend.customPage.create') }}">Custom page create </a></li>
                                @foreach(custom_pages() as $page)
                                <li><a href="{{ route('backend.customPage.edit', $page) }}">{{ $page->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <li> <a target="_blank" href="http://html.jhumu.me/admin-html/colors/" >Template</a>

                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
