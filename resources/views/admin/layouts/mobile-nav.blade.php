<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="{{ route('admin.dashboard') }}" class="flex mr-auto">
            <img alt="{{ $g_info->title }}" class="w-6" src="{{ asset('storage/'. $g_info->logo) }}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    {{-- <ul class="border-t border-white/[0.08] py-5 hidden">
        <li>
            <a href="javascript:;.html" class="menu menu--active">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
            </a>
            <ul class="menu__sub-open">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="box"></i> </div>
                <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Side Menu </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Simple Menu </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-light-dashboard-overview-1.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Top Menu </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="side-menu-light-inbox.html" class="menu">
                <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                <div class="menu__title"> Inbox </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-file-manager.html" class="menu">
                <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                <div class="menu__title"> File Manager </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-point-of-sale.html" class="menu">
                <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                <div class="menu__title"> Point of Sale </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-chat.html" class="menu">
                <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                <div class="menu__title"> Chat </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-post.html" class="menu">
                <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="menu__title"> Post </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-calendar.html" class="menu">
                <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                <div class="menu__title"> Calendar </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="edit"></i> </div>
                <div class="menu__title"> Crud <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-crud-data-list.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Data List </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-crud-form.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Form </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="users"></i> </div>
                <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-users-layout-1.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Layout 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-2.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Layout 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-3.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Layout 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-profile-overview-1.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-2.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-3.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                <div class="menu__title"> Pages <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Wizards <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Blog <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-blog-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Pricing <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Invoice <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> FAQ <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-faq-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login-light-login.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Login </div>
                    </a>
                </li>
                <li>
                    <a href="login-light-register.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Register </div>
                    </a>
                </li>
                <li>
                    <a href="main-light-error-page.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Error Page </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-update-profile.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Update profile </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-change-password.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Change Password </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                <div class="menu__title"> Components <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Table <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-table.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Regular Table</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tabulator.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Tabulator</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overlay <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-modal.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Modal</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slide-over.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Slide Over</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-notification.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Notification</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-tab.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Tab </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-accordion.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Accordion </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-button.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Button </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-alert.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Alert </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-progress-bar.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Progress Bar </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tooltip.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Tooltip </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dropdown.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Dropdown </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-typography.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Typography </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-icon.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Icon </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-loading-icon.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Loading Icon </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="sidebar"></i> </div>
                <div class="menu__title"> Forms <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-regular-form.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Regular Form </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-datepicker.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Datepicker </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tom-select.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Tom Select </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-upload.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> File Upload </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Classic</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Inline</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Balloon</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Balloon Block</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Document</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-validation.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Validation </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                <div class="menu__title"> Widgets <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-chart.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Chart </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-slider.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Slider </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-image-zoom.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Image Zoom </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul> --}}
    <ul class="border-t border-white/[0.08] py-5 hidden">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="menu {{ request()->routeIs('admin.dashboard') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title">
                    Dashboard 
                </div>
            </a>
        </li>
        
        <li>
            <a href="javascript:;" class="menu {{ (request()->segment(2) == 'blog') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="folder-open"></i> </div>
                <div class="menu__title">
                    Blog 
                    <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'blog') ? 'menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.blog.create') }}" class="menu  {{ request()->routeIs('admin.blog.create') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="wrap-text"></i> </div>
                        <div class="menu__title"> New Blog </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blog') }}" class="menu  {{ (request()->segment(2) == 'blog') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Blogs </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blog.category') }}" class="menu  {{ (request()->segment(3) == 'blog-category') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Category </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="menu {{ (request()->segment(2) == 'portfolio') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="verified"></i> </div>
                <div class="menu__title">
                    Portfolio 
                    <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'portfolio') ? 'menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.portfolio.create') }}" class="menu  {{ request()->routeIs('admin.portfolio.create') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="plus-square"></i> </div>
                        <div class="menu__title"> New portfolio </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.portfolio') }}" class="menu  {{ (request()->segment(2) == 'portfolio') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="layout-template"></i> </div>
                        <div class="menu__title"> Portfolios </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.portfolio.category') }}" class="menu  {{ (request()->segment(3) == 'portfolio-category') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Category </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="menu {{ (request()->segment(2) == 'course') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="graduation-cap"></i> </div>
                <div class="menu__title">
                    Course 
                    <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'course') ? 'menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.course.create') }}" class="menu  {{ request()->routeIs('admin.course.create') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="plus-square"></i> </div>
                        <div class="menu__title"> New Course </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.course') }}" class="menu  {{ (request()->segment(2) == 'course') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Courses </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.course.category') }}" class="menu  {{ (request()->segment(3) == 'course-category') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Category </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="menu {{ (request()->segment(2) == 'hosting') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="server"></i> </div>
                <div class="menu__title">
                    Hosting 
                    <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'hosting') ? 'menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.hosting.basic') }}" class="menu  {{ (request()->segment(3) == 'basic-shared') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                        <div class="menu__title"> Basic Shared </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu {{ (request()->segment(2) == 'about') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="folder-open"></i> </div>
                <div class="menu__title">
                    About 
                    <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'about') ? 'menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.about.company-intro') }}" class="menu  {{ (request()->segment(3) == 'company-intro') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Company Intro </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about.our-service') }}" class="menu  {{ (request()->segment(3) == 'our-service') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Our Service </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about.our-story') }}" class="menu  {{ (request()->segment(3) == 'our-story') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Our Story </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about.our-timeline') }}" class="menu  {{ (request()->segment(3) == 'our-timeline') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Our Timeline </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.about.our-skill') }}" class="menu  {{ (request()->segment(3) == 'our-skill') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Our Skill </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.testimonial') }}" class="menu {{ (request()->segment(2) == 'testimonial') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="quote"></i> </div>
                <div class="menu__title">
                    Testimonial 
                </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu {{ (request()->segment(2) == 'gallery') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="image"></i> </div>
                <div class="menu__title">
                    Gallery 
                    <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'gallery') ? 'menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.gallery.client-brand') }}" class="menu  {{ (request()->segment(3) == 'client-brand') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="image-plus"></i> </div>
                        <div class="menu__title"> Client Brand </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.gallery.skill-brand') }}" class="menu  {{ (request()->segment(3) == 'skill-brand') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="image-plus"></i> </div>
                        <div class="menu__title"> Skill Brand </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.gallery.work-gallery') }}" class="menu  {{ (request()->segment(3) == 'work-gallery') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="image-plus"></i> </div>
                        <div class="menu__title"> Work Gallery </div>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu {{ (request()->segment(2) == 'user') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="users"></i> </div>
                <div class="menu__title">
                    User 
                    <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'user') ? 'menu__sub-open' : '' }}">
                <li>
                    <a href="{{ route('admin.user') }}" class="menu {{ (request()->segment(2) == 'user') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="user"></i> </div>
                        <div class="menu__title"> General Users </div>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('admin.faq') }}" class="menu {{ (request()->segment(2) == 'faq') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="help-circle"></i> </div>
                <div class="menu__title">
                    Question (FAQ) 
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.quote') }}" class="menu {{ (request()->segment(2) == 'quote') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="podcast"></i> </div>
                <div class="menu__title">
                    Get Quote 
                </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.share') }}" class="menu {{ (request()->segment(2) == 'share') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="share-2"></i> </div>
                <div class="menu__title"> Share Coding </div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="menu {{ (request()->segment(2) == 'settings') ? 'menu--active' : '' }}">
                <div class="menu__icon"> <i data-lucide="settings"></i> </div>
                <div class="menu__title">
                    Settings 
                    <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{ (request()->segment(2) == 'settings') ? 'menu__sub-open' : '' }}">
                <li>
                    <a href="javascript:;" class="menu {{ (request()->segment(3) == 'homepage') ? 'menu--active menu--open' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder-open"></i> </div>
                        <div class="menu__title">
                            Homepage 
                            <div class="menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="{{ (request()->segment(3) == 'homepage') ? 'menu__sub-open' : '' }}">
                        <li>
                            <a href="{{ route('admin.hero-slogan') }}" class="menu  {{ (request()->segment(4) == 'hero-slogan') ? 'menu--active' : '' }}">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Hero Slogan</div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.background-media') }}" class="menu  {{ (request()->segment(4) == 'background-media') ? 'menu--active' : '' }}">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Background Media</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('admin.setting.privacy') }}" class="menu {{ (request()->segment(3) == 'privacy-policy') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Privacy Policy </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.setting.terms') }}" class="menu {{ (request()->segment(3) == 'terms') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Terms & Conditon </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.setting.refund-policy') }}" class="menu {{ (request()->segment(3) == 'refund-policy') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Refund Policy </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.setting.licence-info') }}" class="menu {{ (request()->segment(3) == 'licence-info') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="folder"></i> </div>
                        <div class="menu__title"> Licence Info </div>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.information-setup') }}" class="menu {{ (request()->segment(3) == 'information-setup') ? 'menu--active' : '' }}">
                        <div class="menu__icon"> <i data-lucide="settings-2"></i> </div>
                        <div class="menu__title"> Information Setup </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<!-- END: Mobile Menu -->