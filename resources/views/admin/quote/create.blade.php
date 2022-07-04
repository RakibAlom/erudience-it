@section('title', 'Create Quote List')

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
    Create Quote List
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->

      <form action="{{ route('admin.quote.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Title</label>
              <input id="crud-form-1" name="title" type="text" class="form-control w-full" required placeholder="quote title...">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Image</label>
              <input type="file" required name="image" class="form-control w-full">
            </div>
            <div class="col-span-12">
              <label for="crud-form-1" class="form-label">Slogan</label>
              <input name="slogan" type="text" class="form-control w-full" placeholder="quote slogan...">
            </div>
            
            <div class="col-span-12">
              <table class="table" id="table">
                  <tr>
                      <th>Feature List <span class="text-green">*</span></th>
                      <th><span class="btn btn-primary" onclick="CreateFunction()">+</span></th>
                  </tr>
                  <tr>
                      <td>
                          <input type="text" class="form-control @error('list[]') is-invalid @enderror" name="list[]" id="list[]" placeholder="ex: feature list..." id="list[]" value="{{ old('list[]') }}" required>
                          @error('list[]')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </td>
                      <td>

                      </td>
                  </tr>
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
      var random = Math.floor(Math.random() * 100);
      cell1.innerHTML = '<span class="btn btn-danger" onclick="DeleteFunction(this)">-</span>';
      cell2.innerHTML = '<input type="text" placeholder="ex: feature text..." class="form-control amount" name="list[]">';
  }

  function DeleteFunction(row) {
      var i = row.parentNode.parentNode.rowIndex;
      document.getElementById("table").deleteRow(i);
  }
</script>
@endsection
        
        
        