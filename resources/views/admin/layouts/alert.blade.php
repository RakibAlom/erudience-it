@if(session('success'))                   
  <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert"> 
    <i data-lucide="check-circle" class="w-6 h-6 mr-2"></i> 
    {{ session('success') }} 
    <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> 
      <i data-lucide="x" class="w-4 h-4"></i> 
    </button> 
  </div>
@endif

@if(session('info'))                   
  <div class="alert alert-dark alert-dismissible show flex items-center mb-2" role="alert"> 
    <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i> 
    {{ session('info') }} 
    <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> 
      <i data-lucide="x" class="w-4 h-4"></i> 
    </button> 
  </div>
@endif

@if(session('delete'))                   
  <div class="alert alert-danger alert-dismissible show flex items-center mb-2" role="alert"> 
    <i data-lucide="trash-2" class="w-6 h-6 mr-2"></i> 
    {{ session('delete') }} 
    <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> 
      <i data-lucide="x" class="w-4 h-4"></i> 
    </button> 
  </div>
@endif
