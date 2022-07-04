@section('title', 'Edit Hosting Plan')

@extends('admin.layouts.layout')

@section('content')

@include('admin.layouts.alert')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="intro-y flex items-center mt-8">
  <h2 class="text-lg font-medium mr-auto">
    Edit Hosting Plan
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->

      <form action="{{ route('admin.hosting.basic.update', $hosting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Plan Name</label>
              <input id="crud-form-1" name="plan_name" type="text" class="form-control w-full" value="{{ $hosting->plan_name }}" required placeholder="Plan Name...">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Duration</label>
              <input id="crud-form-1" name="plan_duration" type="text" class="form-control w-full" value="{{ $hosting->plan_duration }}" required placeholder="ex: Yearly">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Plan Cost</label>
              <input id="crud-form-1" name="plan_cost" type="text" class="form-control w-full" value="{{ $hosting->plan_cost }}" required placeholder="ex: $100">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Bonus Plus</label>
              <input id="crud-form-1" name="plan_bonus" type="text" class="form-control w-full" value="{{ $hosting->plan_bonus }}" placeholder="ex: lifetiem domain free">
            </div>
            
            <div class="col-span-12">
              <table class="table" id="table">
                  <tr>
                      <th>Feature List <span class="text-green">*</span></th>
                      <th>Special Mark</th>
                      <th><span class="btn btn-primary" onclick="CreateFunction()">+</span></th>
                  </tr>
                @foreach($hosting->list as $item)
                  <tr>
                      <td>
                          <input type="text" class="form-control @error('list[]') is-invalid @enderror" name="list[]" id="list[]" placeholder="ex: feature list..." id="list[]" value="{{ $item->list }}" required>
                      </td>
                      <td>
                        <select class="form-control w-full" name="sp_status[]">
                          <option value="0" @if($item->sp_status == '0') selected @endif>Default</option>
                          <option value="1" @if($item->sp_status == '1') selected @endif>Special</option>
                        </select>
                      </td>
                      <td>

                      </td>
                  </tr>
                @endforeach
              </table>
          </div>
            
          </div>
          
          <div class="text-right mt-5">
              <button type="submit" class="btn btn-primary w-24">Save</button>
          </div>
        </div>
      </form>
      <!-- END: Form Layout -->
  </div>
</div>

@endsection

@section('js')
<script>
  function CreateFunction() {
      var table = document.getElementById("table");
      var row = table.insertRow();
      var cell1 = row.insertCell(0);
      var cell2 = row.insertCell(0);
      var cell3 = row.insertCell(0);
      var random = Math.floor(Math.random() * 100);
      cell1.innerHTML = '<span class="btn btn-danger" onclick="DeleteFunction(this)">-</span>'; 
      cell2.innerHTML = '<select class="form-control w-full" name="sp_status[]" id=""><option value="0">Default</option><option value="1">Special</option></select>';
      cell3.innerHTML = '<input type="text" placeholder="ex: feature text..." class="form-control amount" name="list[]">';
  }

  function DeleteFunction(row) {
      var i = row.parentNode.parentNode.rowIndex;
      document.getElementById("table").deleteRow(i);
  }
</script>
@endsection
        
        
        