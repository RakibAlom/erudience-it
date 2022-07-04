@section('title', 'Information Setup - Erudience IT')

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
      Website Information
  </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
  <div class="intro-y col-span-12">
      <!-- BEGIN: Form Layout -->
    @if ($infosetup)

    <form action="{{ route('admin.update.information-setup') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="intro-y box p-5">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12">
            <label for="crud-form-1" class="form-label">Hero Title</label>
            <input id="crud-form-1" value="{{ $infosetup->hero_title }}" name="hero_title" type="text" class="form-control w-full" placeholder="application hero title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Title</label>
            <input id="crud-form-1" value="{{ $infosetup->title }}" name="title" type="text" class="form-control w-full" placeholder="application title">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Email</label>
            <input id="crud-form-1" value="{{ $infosetup->email }}" name="email" type="email" class="form-control w-full" placeholder="email address">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">1st Phone</label>
            <input id="crud-form-1" value="{{ $infosetup->phone_1 }}" type="text" class="form-control w-full" name="phone_1" placeholder="1st phone number">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">2nd Phone</label>
            <input id="crud-form-1" value="{{ $infosetup->phone_2 }}" name="phone_2" type="text" class="form-control w-full" placeholder="2nd phone number">
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Years Experience</label>
            <input id="crud-form-1" value="{{ $infosetup->year_experience }}" name="year_experience" type="text" class="form-control w-full" placeholder="10+">
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Unique Project</label>
            <input id="crud-form-1" value="{{ $infosetup->unique_project }}" name="unique_project" type="text" class="form-control w-full" placeholder="200+">
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Total Project</label>
            <input id="crud-form-1" value="{{ $infosetup->total_project }}" name="total_project" type="text" class="form-control w-full" placeholder="100+">
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Happy Clients</label>
            <input id="crud-form-1" value="{{ $infosetup->happy_clients }}" name="happy_clients" type="text" class="form-control w-full" placeholder="100+">
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Support Staff</label>
            <input id="crud-form-1" value="{{ $infosetup->supported_staff }}" name="supported_staff" type="text" class="form-control w-full" placeholder="5+">
          </div>
          
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Service Time</label>
            <input id="crud-form-1" value="{{ $infosetup->service_time }}" name="service_time" type="text" class="form-control w-full" placeholder="24/7">
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Certificate</label>
            <input id="crud-form-1" value="{{ $infosetup->certificate }}" name="certificate" type="text" class="form-control w-full" placeholder="100+">
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Daily Solution</label>
            <input id="crud-form-1" value="{{ $infosetup->daily_solution }}" name="daily_solution" type="text" class="form-control w-full" placeholder="80+">
          </div>
          
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Address</label>
            <input id="crud-form-1" value="{{ $infosetup->address }}" name="address" type="text" class="form-control w-full" placeholder="address...">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Facebook</label>
            <input id="crud-form-1" value="{{ $infosetup->fb_link }}" name="fb_link" type="text" class="form-control w-full" placeholder="facebook link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Twitter</label>
            <input id="crud-form-1" value="{{ $infosetup->twitter_link }}" name="twitter_link" type="text" class="form-control w-full" placeholder="twitter link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Quora</label>
            <input id="crud-form-1" value="{{ $infosetup->quora_link }}" name="quora_link" type="text" class="form-control w-full" placeholder="quora link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Linkedin</label>
            <input id="crud-form-1" value="{{ $infosetup->linkedin_link }}" name="linkedin_link" type="text" class="form-control w-full" placeholder="linkedin link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Instagram</label>
            <input id="crud-form-1" value="{{ $infosetup->instagram_link }}" name="instagram_link" type="text" class="form-control w-full" placeholder="instagram link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Youtube</label>
            <input id="crud-form-1" value="{{ $infosetup->youtube_link }}" name="youtube_link" type="text" class="form-control w-full" placeholder="youtube link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Github</label>
            <input id="crud-form-1" value="{{ $infosetup->github_link }}" name="github_link"  type="text" class="form-control w-full" placeholder="github link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Pinterest</label>
            <input id="crud-form-1" value="{{ $infosetup->pinterest_link }}" name="pinterest_link" type="text" class="form-control w-full" placeholder="pinterest link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Telegram</label>
            <input id="crud-form-1" value="{{ $infosetup->telegram_link }}" name="telegram_link" type="text" class="form-control w-full" placeholder="telegram link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Whatsapp</label>
            <input id="crud-form-1" value="{{ $infosetup->whatsapp_link }}" name="whatsapp_link" type="text" class="form-control w-full" placeholder="whatsapp link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Discord</label>
            <input id="crud-form-1" value="{{ $infosetup->discord_link }}" name="discord_link" type="text" class="form-control w-full" placeholder="discord link">
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Description</label>
            <textarea id="crud-form-1" rows="4" name="description" type="text" class="form-control w-full" placeholder="meta description...">{{ $infosetup->description }}</textarea>
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Keywords</label>
            <textarea id="crud-form-1" rows="4" value="" name="keywords" type="text" class="form-control w-full" placeholder="meta keywords...">{{ $infosetup->keywords }}</textarea>
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Short About</label>
            <textarea id="crud-form-1" rows="4" name="short_about" type="text" class="form-control w-full" placeholder="type about you...">{{ $infosetup->short_about }}</textarea>
          </div>
          <div class="col-span-6">
            <label for="crud-form-1" class="form-label">Copyright</label>
            <textarea id="crud-form-1" rows="4" name="copyright" type="text" class="form-control w-full" placeholder="2022 Copyright">{{ $infosetup->copyright }}</textarea>
          </div>

          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">FAVICON (max:50KB)</label>
            <input type="file" onchange="iconChange(this)" name="favicon" class="form-control w-full">
            @if($infosetup->favicon)
                <input type="hidden" name="old_favicon" value="{{ $infosetup->favicon }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$infosetup->favicon) }}" id="icon" style="height: 120px;">
            @else
                <img class="mt-4" src="" id="icon" style="height: 120px;">
            @endif
          </div>
          <div class="col-span-3">
              <label for="crud-form-1" class="form-label">LOGO (max:100KB)</label>
              <input type="file" onchange="logoChange(this)" name="logo" class="form-control w-full">
            @if($infosetup->logo)
                <input type="hidden" name="old_logo" value="{{ $infosetup->logo }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$infosetup->logo) }}" id="logo" style="height: 120px;">
            @else
                <img class="mt-4" src="" id="logo" style="height: 120px;">
            @endif
          </div>
          <div class="col-span-3">
            <label for="crud-form-1" class="form-label">Footer LOGO (max:100KB)</label>
            <input type="file" onchange="footerLogoChange(this)" name="footer_logo" class="form-control w-full">
          @if($infosetup->footer_logo)
              <input type="hidden" name="old_footer_logo" value="{{ $infosetup->footer_logo }}">
              <img class="img-thumbnail mt-4" src="{{ asset('storage/'.$infosetup->footer_logo) }}" id="footer_logo" style="height: 120px;">
          @else
              <img class="mt-4" src="" id="footer_logo" style="height: 120px;">
          @endif
        </div>
          <div class="col-span-3">
              <label for="crud-form-1" class="form-label">COVER IMAGE (max:200KB)</label>
              <input type="file" onchange="coverChange(this)" name="cover_image" class="form-control w-full">
            @if($infosetup->cover_image)
                <input type="hidden" name="old_cover" value="{{ $infosetup->cover_image }}">
                <img class="img-thumbnail mt-4" src="{{ asset('storage/'. $infosetup->cover_image) }}" id="cover" style="height: 120px;">
            @else
                <img class="mt-4" src="" id="cover" style="height: 120px;">
            @endif
          </div>

        </div>
        
        <div class="text-right mt-5">
            <button type="submit" class="btn btn-primary w-24">Save</button>
        </div>
      </div>
    </form>
      
    @else

      <form action="{{ route('admin.store.information-setup') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="intro-y box p-5">
          <div class="grid grid-cols-12 gap-6">
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Hero Title</label>
              <input id="crud-form-1" name="hero_title" type="text" class="form-control w-full" placeholder="application hero title">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Title</label>
              <input id="crud-form-1" name="title" type="text" class="form-control w-full" placeholder="application title">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Email</label>
              <input id="crud-form-1" name="email" type="email" class="form-control w-full" placeholder="email address">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">1st Phone</label>
              <input id="crud-form-1" type="text" class="form-control w-full" name="phone_1" placeholder="1st phone number">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">2nd Phone</label>
              <input id="crud-form-1" name="phone_2" type="text" class="form-control w-full" placeholder="2nd phone number">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Years Experience</label>
              <input id="crud-form-1" name="year_experience" type="text" class="form-control w-full" placeholder="10+">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Unique Project</label>
              <input id="crud-form-1" name="unique_project" type="text" class="form-control w-full" placeholder="200+">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Total Project</label>
              <input id="crud-form-1" name="total_project" type="text" class="form-control w-full" placeholder="100+">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Happy Clients</label>
              <input id="crud-form-1" name="happy_clients" type="text" class="form-control w-full" placeholder="100+">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Support Staff</label>
              <input id="crud-form-1" name="supported_staff" type="text" class="form-control w-full" placeholder="5+">
            </div>
            
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Service Time</label>
              <input id="crud-form-1" name="service_time" type="text" class="form-control w-full" placeholder="24/7">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Certificate</label>
              <input id="crud-form-1" name="certificate" type="text" class="form-control w-full" placeholder="100+">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">Daily Solution</label>
              <input id="crud-form-1" name="daily_solution" type="text" class="form-control w-full" placeholder="80+">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Address</label>
              <input id="crud-form-1" name="address" type="text" class="form-control w-full" placeholder="address...">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Facebook</label>
              <input id="crud-form-1" name="fb_link" type="text" class="form-control w-full" placeholder="facebook link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Twitter</label>
              <input id="crud-form-1" name="twitter_link" type="text" class="form-control w-full" placeholder="twitter link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Quora</label>
              <input id="crud-form-1" name="quora_link" type="text" class="form-control w-full" placeholder="quora link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Linkedin</label>
              <input id="crud-form-1" name="linkedin_link" type="text" class="form-control w-full" placeholder="linkedin link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Instagram</label>
              <input id="crud-form-1" name="instagram_link" type="text" class="form-control w-full" placeholder="instagram link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Youtube</label>
              <input id="crud-form-1" name="youtube_link" type="text" class="form-control w-full" placeholder="youtube link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Github</label>
              <input id="crud-form-1" name="github_link"  type="text" class="form-control w-full" placeholder="github link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Pinterest</label>
              <input id="crud-form-1" name="pinterest_link" type="text" class="form-control w-full" placeholder="pinterest link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Telegram</label>
              <input id="crud-form-1" name="telegram_link" type="text" class="form-control w-full" placeholder="telegram link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Whatsapp</label>
              <input id="crud-form-1" name="whatsapp_link" type="text" class="form-control w-full" placeholder="whatsapp link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Discord</label>
              <input id="crud-form-1" name="discord_link" type="text" class="form-control w-full" placeholder="discord link">
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Description</label>
              <textarea id="crud-form-1" rows="4" name="description" type="text" class="form-control w-full" placeholder="meta description..."></textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Keywords</label>
              <textarea id="crud-form-1" rows="4" name="keywords" type="text" class="form-control w-full" placeholder="meta keywords..."></textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Short About</label>
              <textarea id="crud-form-1" rows="4" name="short_about" type="text" class="form-control w-full" placeholder="type about you..."></textarea>
            </div>
            <div class="col-span-6">
              <label for="crud-form-1" class="form-label">Copyright</label>
              <textarea id="crud-form-1" rows="4" name="copyright" type="text" class="form-control w-full" placeholder="2022 Copyright"></textarea>
            </div>

            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">FAVICON (max:50KB)</label>
              <input type="file" onchange="iconChange(this)" name="favicon" class="form-control w-full">
              <img src="" id="icon" style="height: 120px">
            </div>
            <div class="col-span-3">
                <label for="crud-form-1" class="form-label">LOGO (max:100KB)</label>
                <input type="file" onchange="logoChange(this)" name="logo" class="form-control w-full">
                <img src="" id="logo" style="height: 120px">
            </div>
            <div class="col-span-3">
              <label for="crud-form-1" class="form-label">FOOTER LOGO (max:100KB)</label>
              <input type="file" onchange="footerLogoChange(this)" name="footer_logo" class="form-control w-full">
              <img src="" id="footer_logo" style="height: 120px">
          </div>
            <div class="col-span-3">
                <label for="crud-form-1" class="form-label">COVER IMAGE (max:200KB)</label>
                <input type="file" onchange="coverChange(this)" name="cover_image" class="form-control w-full">
                <img src="" id="cover" style="height: 120px">
            </div>

          </div>
          
          <div class="text-right mt-5">
              <button type="submit" class="btn btn-primary w-24">Save</button>
          </div>
        </div>
      </form>

    @endif
      <!-- END: Form Layout -->
  </div>
</div>

@endsection

@section('js')

<script>
	function iconChange(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#icon')
            .attr('src', e.target.result)
            .attr("class","img-thumbnail mt-4")
        };
        reader.readAsDataURL(input.files[0]);
     	}
    }
    function logoChange(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#logo')
              .attr('src', e.target.result)
              .attr("class","img-thumbnail mt-4")

          };
          reader.readAsDataURL(input.files[0]);
     	}
    }
    function footerLogoChange(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#footer_logo')
              .attr('src', e.target.result)
              .attr("class","img-thumbnail mt-4")

          };
          reader.readAsDataURL(input.files[0]);
     	}
    }
    function coverChange(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#cover')
            .attr('src', e.target.result)
            .attr("class","img-thumbnail mt-4")
        };
        reader.readAsDataURL(input.files[0]);
     	}
    }

</script>

@endsection
        
        
        