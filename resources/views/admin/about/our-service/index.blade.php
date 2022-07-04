@extends('admin.layouts.layout')

@section('title', 'Our Services')

@section('css')
<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
<style>
  .dataTable-selector{
    width: 60px !important;
  }
</style>
@endsection


@section('content')

@include('admin.layouts.alert')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
  <h2 class="text-lg font-medium mr-auto">
      Our Services
  </h2>
  <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
      <a href="{{ route('admin.about.our-service.create') }}"><button class="btn btn-primary shadow-md mr-2">New Service</button></a>
  </div>
</div>

<!-- BEGIN: HTML Table Data -->
<div class="intro-y box p-5 mt-5">
  <div class="overflow-x-auto scrollbar-hidden">
    <table id="dataTable" class="display table">
        <thead>
            <tr>
                <th>SL</th>
                <th>TITLE</th>
                <th>VIEWS</th>
                <th>IMAGE</th>
                <th>STATUS</th>
                <th>EDIT</th>
                <th>A/D</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $item)
            <tr>
              <td>{{ $count++ }}</td>
              <td>
                <a href="{{ route('admin.about.our-service.show',$item->slug) }}">{{ $item->title }}</a><br>
                <small>({{ $item->slug }})</small>
              </td>
                <td>{{ $item->views }}</td>
                <td>
                @if($item->image)
                    <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" style="height: 30px;">
                @endif
                </td>
              <td>
                @if($item->status == 0)
                  <i style="color: rgb(75, 75, 75)" data-lucide="x-circle"></i>
                @else
                  <i style="color: rgb(31, 163, 60)" data-lucide="check-circle"></i>
                @endif
              </td>
              <td>
                <a style="color: rgb(35, 167, 255)" href="{{ route('admin.about.our-service.edit', $item->id) }}"><i data-lucide="edit"></i></a>
              </td>
              <td>
                @if($item->status == 1)
                  <a style="color: rgb(75, 75, 75)"  href="{{ route('admin.about.our-service.deactive', $item->id) }}"><i data-lucide="thumbs-down"></i></a>
                @else
                  <a style="color: rgb(31, 163, 60)" href="{{ route('admin.about.our-service.active', $item->id) }}"><i data-lucide="thumbs-up"></i></a>
                @endif
              </td>
              <td>
                  <a class="confirm_delete" style="color: rgb(252, 11, 11)" href="{{ route('admin.about.our-service.permanent-delete', $item->id) }}"><i data-lucide="trash-2"></i></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
</div>
<!-- END: HTML Table Data -->
@endsection

@section('js')
    <script>
    var dataTable = new DataTable("#dataTable");
    </script>

    @include('admin.layouts.sweetalerts')

@endsection