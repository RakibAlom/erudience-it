@section('title', 'Add Class')

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
    Add Class ({{ $course->title }})
  </h2>
</div>

<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      
    <!-- BEGIN: Form Layout -->
      <form action="{{ route('admin.course.store-class', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
              <table class="table" id="table">
                  <tr>
                      <th>Class Title</th>
                      <th>Video Link</th>
                      <th>Duration</th>
                      <th>Date</th>
                      <th><span class="btn btn-primary" onclick="CreateFunction()">+</span></th>
                  </tr>
                @if($course->courseclass)
                @foreach ($course->courseclass as $item)
                <tr>
                  <td>
                      <input type="text" class="form-control" name="title[]" id="title[]" placeholder="ex: class title..." id="title[]" value="{{ $item->title }}" required>
                  </td>
                  <td>
                    <input type="text" class="form-control" name="video_link[]" id="video_link[]" placeholder="ex: yt embed video link" id="video_link[]" value="{{ $item->video_link }}" required>
                  </td>
                  <td>
                    <input type="text" class="form-control" name="duration[]" id="duration[]" placeholder="ex: 1 hour 05 minutes" id="duration[]" value="{{ $item->duration }}">
                  </td>
                  <td>
                    <input type="date" class="form-control" name="date[]" id="date[]" id="date[]" value="{{ $item->date }}">
                  </td>
                  <td>
                    <span class="btn btn-danger" onclick="DeleteFunction(this)">-</span>
                  </td>
                </tr>
                @endforeach
                @endif
              </table>
            </div>
          </div>
          <div class="text-right mt-5">
              <button type="submit" class="btn btn-primary w-24">Add Class</button>
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
      var cell4 = row.insertCell(0);
      var cell5 = row.insertCell(0);
      var random = Math.floor(Math.random() * 100);
      cell1.innerHTML = '<span class="btn btn-danger" onclick="DeleteFunction(this)">-</span>'; 
      cell2.innerHTML = '<input type="date" class="form-control" name="date[]" id="date[]" id="date[]">';
      cell3.innerHTML = '<input type="text" class="form-control" name="duration[]" id="duration[]" placeholder="ex: 1 hour 05 minutes" id="duration[]">';
      cell4.innerHTML = '<input type="text" class="form-control" name="video_link[]" id="video_link[]" placeholder="ex: yt embed video link" id="video_link[]" required>';
      cell5.innerHTML = '<input type="text" class="form-control" name="title[]" id="title[]" placeholder="ex: class title..." id="title[]" required>';
  }

  function DeleteFunction(row) {
      var i = row.parentNode.parentNode.rowIndex;
      document.getElementById("table").deleteRow(i);
  }
</script>
@endsection
        
        
        