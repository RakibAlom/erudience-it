@extends('admin.layouts.layout')

@section('title', 'Contact us - Erudience IT')

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
      Contact Messages
  </h2>
</div>

<!-- BEGIN: HTML Table Data -->
<div class="intro-y box p-5 mt-5">
  <div class="overflow-x-auto scrollbar-hidden">
    <table id="dataTable" class="display table">
        <thead>
            <tr>
                <th>SL</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>SUBJECT</th>
                <th>DEP.</th>
                <th>VIEW</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $item)
            <tr>
              <td>{{ $count++ }}</td>
              <td>
                <a href="{{ route('admin.contact.show',$item->id) }}">{{ $item->name }}</a><br>
              </td>
              <td>{{ $item->email }}</td>
              <td>{{ $item->subject }}</td>
              <td>{{ $item->department }}</td>
              <td>
                <a style="color: rgb(35, 167, 255)" href="{{ route('admin.contact.show',$item->id) }}"><i data-lucide="eye"></i></a>
              </td>
              <td>
                  <a class="confirm_delete" style="color: rgb(252, 11, 11)" href="{{ route('admin.contact.delete', $item->id) }}"><i data-lucide="trash-2"></i></a>
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