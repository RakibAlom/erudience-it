<!-- BEGIN: Side Menu -->
<nav class="side-nav">
    <a href="{{ route('admin.dashboard') }}" class="intro-x flex items-center pl-5 pt-4">
        <img alt="{{ $g_info->title }}" class="w-100 pr-5" src="{{ asset('storage/'. $g_info->logo) }}">
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="{{ route('admin.dashboard') }}" class="side-menu {{ request()->routeIs('admin.dashboard') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                <div class="side-menu__title">
                    Dashboard 
                </div>
            </a>
        </li>
        
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->segment(2) == 'blog') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="folder-open"></i> </div>
                <div class="side-menu__title">
                    Blog 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'blog') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.blog.create') }}" class="side-menu  {{ request()->routeIs('admin.blog.create') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="wrap-text"></i> </div>
                        <div class="side-menu__title"> New Blog </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blog') }}" class="side-menu  {{ (request()->segment(2) == 'blog') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Blogs </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blog.category') }}" class="side-menu  {{ (request()->segment(3) == 'blog-category') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Category </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu {{ (request()->segment(2) == 'portfolio') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="verified"></i> </div>
                <div class="side-menu__title">
                    Portfolio 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'portfolio') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.portfolio.create') }}" class="side-menu  {{ request()->routeIs('admin.portfolio.create') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="plus-square"></i> </div>
                        <div class="side-menu__title"> New portfolio </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.portfolio') }}" class="side-menu  {{ (request()->segment(2) == 'portfolio') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="layout-template"></i> </div>
                        <div class="side-menu__title"> Portfolios </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.portfolio.category') }}" class="side-menu  {{ (request()->segment(3) == 'portfolio-category') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Category </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu {{ (request()->segment(2) == 'course') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="graduation-cap"></i> </div>
                <div class="side-menu__title">
                    Course 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'course') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.course.create') }}" class="side-menu  {{ request()->routeIs('admin.course.create') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="plus-square"></i> </div>
                        <div class="side-menu__title"> New Course </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.course') }}" class="side-menu  {{ (request()->segment(2) == 'course') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Courses </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.course.category') }}" class="side-menu  {{ (request()->segment(3) == 'course-category') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Category </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="side-menu {{ (request()->segment(2) == 'hosting') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="server"></i> </div>
                <div class="side-menu__title">
                    Hosting 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'hosting') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.hosting.basic') }}" class="side-menu  {{ (request()->segment(3) == 'basic-shared') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="side-menu__title"> Basic Shared </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->segment(2) == 'about') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="folder-open"></i> </div>
                <div class="side-menu__title">
                    About 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'about') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.about.company-intro') }}" class="side-menu  {{ (request()->segment(3) == 'company-intro') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Company Intro </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about.our-service') }}" class="side-menu  {{ (request()->segment(3) == 'our-service') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Our Service </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about.our-story') }}" class="side-menu  {{ (request()->segment(3) == 'our-story') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Our Story </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about.our-timeline') }}" class="side-menu  {{ (request()->segment(3) == 'our-timeline') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Our Timeline </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about.our-skill') }}" class="side-menu  {{ (request()->segment(3) == 'our-skill') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Our Skill </div>
                    </a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="{{ route('admin.contact') }}" class="side-menu {{ (request()->segment(2) == 'contact') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="mail"></i> </div>
                <div class="side-menu__title">
                    Contact 
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.testimonial') }}" class="side-menu {{ (request()->segment(2) == 'testimonial') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="quote"></i> </div>
                <div class="side-menu__title">
                    Testimonial 
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->segment(2) == 'gallery') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="image"></i> </div>
                <div class="side-menu__title">
                    Gallery 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'gallery') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.gallery.client-brand') }}" class="side-menu  {{ (request()->segment(3) == 'client-brand') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="image-plus"></i> </div>
                        <div class="side-menu__title"> Client Brand </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.gallery.skill-brand') }}" class="side-menu  {{ (request()->segment(3) == 'skill-brand') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="image-plus"></i> </div>
                        <div class="side-menu__title"> Skill Brand </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.gallery.work-gallery') }}" class="side-menu  {{ (request()->segment(3) == 'work-gallery') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="image-plus"></i> </div>
                        <div class="side-menu__title"> Work Gallery </div>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->segment(2) == 'user') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                <div class="side-menu__title">
                    User 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'user') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.user') }}" class="side-menu {{ (request()->segment(2) == 'user') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                        <div class="side-menu__title"> General Users </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('admin.faq') }}" class="side-menu {{ (request()->segment(2) == 'faq') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="help-circle"></i> </div>
                <div class="side-menu__title">
                    Question (FAQ) 
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.quote') }}" class="side-menu {{ (request()->segment(2) == 'quote') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="podcast"></i> </div>
                <div class="side-menu__title">
                    Get Quote 
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.share') }}" class="side-menu {{ (request()->segment(2) == 'share') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="share-2"></i> </div>
                <div class="side-menu__title"> Share Coding </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu {{ (request()->segment(2) == 'settings') ? 'side-menu--active' : '' }}">
                <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                <div class="side-menu__title">
                    Settings 
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'settings') ? 'side-menu__sub-open' : '' }}">
                <li>
                    <a href="javascript:;" class="side-menu {{ (request()->segment(3) == 'homepage') ? 'side-menu--active side-menu--open' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder-open"></i> </div>
                        <div class="side-menu__title">
                            Homepage 
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="{{ (request()->segment(3) == 'homepage') ? 'side-menu__sub-open' : '' }}">
                        <li>
                            <a href="{{ route('admin.hero-slogan') }}" class="side-menu  {{ (request()->segment(4) == 'hero-slogan') ? 'side-menu--active' : '' }}">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Hero Slogan</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.background-media') }}" class="side-menu  {{ (request()->segment(4) == 'background-media') ? 'side-menu--active' : '' }}">
                                <div class="side-menu__icon"> <i data-lucide="palette"></i> </div>
                                <div class="side-menu__title">Background Media</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="folder-open"></i> </div>
                        <div class="side-menu__title">
                            Cache Option 
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="{{ route('admin.routeCache') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Route Cache</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.viewCache') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">View Cache</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.eventCache') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Event Cache</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.configCache') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Config Cache</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.clearCache') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Clear Cache</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.clearView') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Clear View</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.clearEvent') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Clear Event</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.clearRoute') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Clear Route</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.clearOptimize') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Clear Optimize</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.storageLink') }}" target="_blank" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Storage Link</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.setting.privacy') }}" class="side-menu {{ (request()->segment(3) == 'privacy-policy') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Privacy Policy </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.setting.terms') }}" class="side-menu {{ (request()->segment(3) == 'terms') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Terms & Conditon </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.setting.refund-policy') }}" class="side-menu {{ (request()->segment(3) == 'refund-policy') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Refund Policy </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.setting.licence-info') }}" class="side-menu {{ (request()->segment(3) == 'licence-info') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="side-menu__title"> Licence Info </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.information-setup') }}" class="side-menu {{ (request()->segment(3) == 'information-setup') ? 'side-menu--active' : '' }}">
                        <div class="side-menu__icon"> <i data-lucide="settings-2"></i> </div>
                        <div class="side-menu__title"> Information Setup </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- END: Side Menu -->