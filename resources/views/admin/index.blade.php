@php
    $blogs = App\Models\Blog\Blog::where('status', 1)->get();
    $portfolios = App\Models\Portfolio\Portfolio::where('status', 1)->get();
    $courses = App\Models\Course\Course::where('status', 1)->get();
    $users = App\Models\User::where('utype', 1)->get();
@endphp

@section('title', 'Dashboard - ' . $g_info->title)

@extends('admin.layouts.layout')

@section('content')

<div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
        <div class="grid grid-cols-12 gap-6">
            <!-- BEGIN: General Report -->
            <div class="col-span-12 mt-8">
                <div class="intro-y flex items-center h-10">
                    <h2 class="text-lg font-medium truncate mr-5">
                        General Report
                    </h2>
                    <a href="" class="ml-auto flex items-center text-primary"> <i data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                </div>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="file-text" class="report-box__icon text-primary"></i> 
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $blogs->count() }}</div>
                                <div class="text-base text-slate-500 mt-1">Total Blog</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="layout-template" class="report-box__icon text-pending"></i> 
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $portfolios->count() }}</div>
                                <div class="text-base text-slate-500 mt-1">Total Portfolio</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="graduation-cap" class="report-box__icon text-success"></i> 
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $courses->count() }}</div>
                                <div class="text-base text-slate-500 mt-1">Total Course</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-lucide="users" class="report-box__icon text-warning"></i> 
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $users->count() }}</div>
                                <div class="text-base text-slate-500 mt-1">Total Users</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: General Report -->
        </div>
    </div>
    <div class="col-span-12 2xl:col-span-3">
        <div class="2xl:border-l -mb-10 pb-10">
            <div class="2xl:pl-6 grid grid-cols-12 gap-6">
                <!-- BEGIN: Transactions -->
                <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Transactions
                        </h2>
                    </div>
                    <div class="mt-5">
                        <div class="intro-x">
                            <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                    <img alt="{{ $g_info->title }}" src="{{ asset('storage/' . $g_info->logo) }}">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium">Brad Pitt</div>
                                    <div class="text-slate-500 text-xs mt-0.5">30 March 2022</div>
                                </div>
                                <div class="text-danger">-$45</div>
                            </div>
                        </div>
                        <a href="#0" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a> 
                    </div>
                </div>
                <!-- END: Transactions -->
            </div>
        </div>
    </div>
</div>

@endsection
        
        
        