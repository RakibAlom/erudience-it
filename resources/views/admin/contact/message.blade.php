@extends('admin.layouts.layout')

@section('title', 'Contact us - Erudience IT')

@section('css')

@endsection


@section('content')

@include('admin.layouts.alert')

<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
  <h2 class="text-lg font-medium mr-auto">
      Contact Messages
  </h2>
</div>

<div class="intro-y box p-5 mt-5">
  <div class="overflow-x-auto scrollbar-hidden">
    <table class="table table-bordered">
      <caption>(Date: {{ $contact->created_at->format('d F Y - h:i A') }})</caption>
      <tr>
        <td colspan="4" class="text-center"><b>Subject: </b>{!! $contact->subject !!}</td>
      </tr>
      <tr>
        <th>Name</th>
        <td>{{ $contact->name }}</td>
        <th>Mail</th>
        <td>{{ $contact->email }}</td>
      </tr>
      <tr>
        <th>Department</th>
        <td>{{ $contact->department }}</td>
        <th>Phone</th>
        <td>{{ $contact->phone }}</td>
      </tr>
      <tr>
        <td colspan="4">{!! $contact->message !!}</td>
      </tr>
    </table>
  </div>
</div>
<!-- END: HTML Table Data -->
@endsection

@section('js')

@endsection