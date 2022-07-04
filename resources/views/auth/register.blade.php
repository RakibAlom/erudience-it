<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('storage/' . $g_info->favicon) }}" type="image/png">

  <title>Register - Erudienct IT</title>
  <meta name="title" Content="Login - Erudienct IT">
  <meta name="description" content="">
  <meta name="keywords" content="Login - Erudienct IT">
  <meta name="author" content="{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}" />
  <meta property="image" content="{{ asset('storage/' . $g_info->cover_image) }}">

  <meta property="og:title" content="Login - Erudienct IT" />
  <meta property="og:site_name" content="{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="{{ asset('storage/' . $g_info->cover_image) }}" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="1180" />
  <meta property="og:image:height" content="600" />

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}">
  <meta name="twitter:title" content="Login - Erudienct IT">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="{{ asset('storage/' . $g_info->cover_image) }}">
  <meta name="twitter:creator" content="{{ strtoupper(str_replace(array('www.','http://','https://','.com'), '', route('home'))) }}">

  <link rel="canonical" href="{{ URL::current() }}" />

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "{{ $g_info->title }}",
      "url": "{{ strtoupper(str_replace(array('www.','http://','https://'), '', route('home'))) }}"
    }
  </script>

  <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png" type="image/png') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/line-awesome/css/line-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightcase.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
</head>

<body>
  <div class="preloader">
    <div class="preloader__content">
      <h3 class="preloader__text">TSK</h3>
      <div class="preloader__circle">
      </div>
    </div>
  </div>
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="las la-arrow-up"></i>
    </span>
  </div>
  <section class="account-section style--two">
    <div class="left bg_img" style="background-image: url('{{ asset('storage/' . $g_bgmedia->default_bg) }}">
      <div class="left-inner text-center">
        <h6 class="text--base">Welcome</h6>
        <h2 class="title text-white">Create an Account</h2>
        <p class="mt-3">Already have an account with us? Then just login with your existing username and password and get access to all of our premium features.
          <br>
          <a href="{{ route('login') }}" class="text--base">Login Now!</a>
        </p>
        <h4 class="text-white mt-5 mb-3">We are involved with</h4>

        @php
          $brands = App\Models\Gallery\SkillBrand::where('status', 1)->get();
        @endphp

        <div class="involde-logo-slider">
          @foreach ($brands as $item)
            <div class="single-slide">
              <div class="involde-logo">
                <img src="{{ asset('storage/' . $item->logo) }}" alt="{{ $item->name }}">
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="right">
      <div class="el">
        {{-- <img src="" alt="image"> --}}
      </div>
      <div class="top w-100 text-center">
        <a href="{{ url('/') }}">
          <img src="{{ asset('storage/' . $g_info->logo) }}" alt="logo">
        </a>
      </div>

      <div class="middle w-100">
        <form class="account-form" method="POST" action="{{ route('register') }}">
        @csrf
          <div class="row">
            <div class="form-group col-sm-6">
                <label>Username</label>
                <input type="text" name="username" value="{{ old('username') }}" autocomplete="off" class="form--control @error('username') is-invalid @enderror" placeholder="Username..." required minlength="6">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group col-sm-6">
              <label>Full Name</label>
              <input type="text" name="name" value="{{ old('name') }}" autocomplete="off" class="form--control @error('name') is-invalid @enderror" placeholder="Enter Name..." required>
              @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            
            <div class="form-group col-sm-6">
              <label>Email</label>
              <input type="email" name="email" value="{{ old('email') }}" autocomplete="off" class="form--control @error('email') is-invalid @enderror" placeholder="Email Address..." required>
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>   
            <div class="form-group col-sm-6">
              <label>Date of Birth (Optional)</label>
              <input type="date" name="birthdate" value="{{ old('birthdate') }}" autocomplete="off" class="form--control @error('birthdate') is-invalid @enderror">
              @error('birthdate')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-sm-6">
              <label>Mobile Number</label>
              <div class="input-group">
                <span class="input-group-text p-0 border-0">
                  <select name="dial_code" class="select bg--base text-white">
                    <option value="93" data-country="Afghanistan" data-code="AF">AF (+93)</option>
                    <option value="358" data-country="Åland Islands" data-code="AX">AX (+358)</option>
                    <option value="355" data-country="Albania" data-code="AL">AL (+355)</option>
                    <option value="213" data-country="Algeria" data-code="DZ">DZ (+213)</option>
                    <option value="1684" data-country="American Samoa" data-code="AS">AS (+1684)</option>
                    <option value="376" data-country="Andorra" data-code="AD">AD (+376)</option>
                    <option value="244" data-country="Angola" data-code="AO">AO (+244)</option>
                    <option value="1264" data-country="Anguilla" data-code="AI">AI (+1264)</option>
                    <option value="672" data-country="Antarctica" data-code="AQ">AQ (+672)</option>
                    <option value="1268" data-country="Antigua and Barbuda" data-code="AG">AG (+1268)</option>
                    <option value="54" data-country="Argentina" data-code="AR">AR (+54)</option>
                    <option value="374" data-country="Armenia" data-code="AM">AM (+374)</option>
                    <option value="297" data-country="Aruba" data-code="AW">AW (+297)</option>
                    <option value="61" data-country="Australia" data-code="AU">AU (+61)</option>
                    <option value="43" data-country="Austria" data-code="AT">AT (+43)</option>
                    <option value="994" data-country="Azerbaijan" data-code="AZ">AZ (+994)</option>
                    <option value="1242" data-country="Bahamas" data-code="BS">BS (+1242)</option>
                    <option value="973" data-country="Bahrain" data-code="BH">BH (+973)</option>
                    <option value="880" data-country="Bangladesh" data-code="BD">BD (+880)</option>
                    <option value="1246" data-country="Barbados" data-code="BB">BB (+1246)</option>
                    <option value="375" data-country="Belarus" data-code="BY">BY (+375)</option>
                    <option value="32" data-country="Belgium" data-code="BE">BE (+32)</option>
                    <option value="501" data-country="Belize" data-code="BZ">BZ (+501)</option>
                    <option value="229" data-country="Benin" data-code="BJ">BJ (+229)</option>
                    <option value="1441" data-country="Bermuda" data-code="BM">BM (+1441)</option>
                    <option value="975" data-country="Bhutan" data-code="BT">BT (+975)</option>
                    <option value="591" data-country="Bolivia - Plurinational State of bolivia" data-code="BO">BO (+591)</option>
                    <option value="387" data-country="Bosnia and Herzegovina" data-code="BA">BA (+387)</option>
                    <option value="267" data-country="Botswana" data-code="BW">BW (+267)</option>
                    <option value="47" data-country="Bouvet Island" data-code="BV">BV (+47)</option>
                    <option value="55" data-country="Brazil" data-code="BR">BR (+55)</option>
                    <option value="246" data-country="British Indian Ocean Territory" data-code="IO">IO (+246)</option>
                    <option value="673" data-country="Brunei Darussalam" data-code="BN">BN (+673)</option>
                    <option value="359" data-country="Bulgaria" data-code="BG">BG (+359)</option>
                    <option value="226" data-country="Burkina Faso" data-code="BF">BF (+226)</option>
                    <option value="257" data-country="Burundi" data-code="BI">BI (+257)</option>
                    <option value="855" data-country="Cambodia" data-code="KH">KH (+855)</option>
                    <option value="237" data-country="Cameroon" data-code="CM">CM (+237)</option>
                    <option value="1" data-country="Canada" data-code="CA">CA (+1)</option>
                    <option value="238" data-country="Cape Verde" data-code="CV">CV (+238)</option>
                    <option value=" 345" data-country="Cayman Islands" data-code="KY">KY (+ 345)</option>
                    <option value="236" data-country="Central African Republic" data-code="CF">CF (+236)</option>
                    <option value="235" data-country="Chad" data-code="TD">TD (+235)</option>
                    <option value="56" data-country="Chile" data-code="CL">CL (+56)</option>
                    <option value="86" data-country="China" data-code="CN">CN (+86)</option>
                    <option value="61" data-country="Christmas Island" data-code="CX">CX (+61)</option>
                    <option value="61" data-country="Cocos (Keeling) Islands" data-code="CC">CC (+61)</option>
                    <option value="57" data-country="Colombia" data-code="CO">CO (+57)</option>
                    <option value="269" data-country="Comoros" data-code="KM">KM (+269)</option>
                    <option value="242" data-country="Congo" data-code="CG">CG (+242)</option>
                    <option value="243" data-country="The Democratic Republic of the Congo" data-code="CD">CD (+243)</option>
                    <option value="682" data-country="Cook Islands" data-code="CK">CK (+682)</option>
                    <option value="506" data-country="Costa Rica" data-code="CR">CR (+506)</option>
                    <option value="225" data-country="Cote d'Ivoire" data-code="CI">CI (+225)</option>
                    <option value="385" data-country="Croatia" data-code="HR">HR (+385)</option>
                    <option value="53" data-country="Cuba" data-code="CU">CU (+53)</option>
                    <option value="357" data-country="Cyprus" data-code="CY">CY (+357)</option>
                    <option value="420" data-country="Czech Republic" data-code="CZ">CZ (+420)</option>
                    <option value="45" data-country="Denmark" data-code="DK">DK (+45)</option>
                    <option value="253" data-country="Djibouti" data-code="DJ">DJ (+253)</option>
                    <option value="1767" data-country="Dominica" data-code="DM">DM (+1767)</option>
                    <option value="1849" data-country="Dominican Republic" data-code="DO">DO (+1849)</option>
                    <option value="593" data-country="Ecuador" data-code="EC">EC (+593)</option>
                    <option value="20" data-country="Egypt" data-code="EG">EG (+20)</option>
                    <option value="503" data-country="El Salvador" data-code="SV">SV (+503)</option>
                    <option value="240" data-country="Equatorial Guinea" data-code="GQ">GQ (+240)</option>
                    <option value="291" data-country="Eritrea" data-code="ER">ER (+291)</option>
                    <option value="372" data-country="Estonia" data-code="EE">EE (+372)</option>
                    <option value="251" data-country="Ethiopia" data-code="ET">ET (+251)</option>
                    <option value="500" data-country="Falkland Islands (Malvinas)" data-code="FK">FK (+500)</option>
                    <option value="298" data-country="Faroe Islands" data-code="FO">FO (+298)</option>
                    <option value="679" data-country="Fiji" data-code="FJ">FJ (+679)</option>
                    <option value="358" data-country="Finland" data-code="FI">FI (+358)</option>
                    <option value="33" data-country="France" data-code="FR">FR (+33)</option>
                    <option value="594" data-country="French Guiana" data-code="GF">GF (+594)</option>
                    <option value="689" data-country="French Polynesia" data-code="PF">PF (+689)</option>
                    <option value="262" data-country="French Southern Territories" data-code="TF">TF (+262)</option>
                    <option value="241" data-country="Gabon" data-code="GA">GA (+241)</option>
                    <option value="220" data-country="Gambia" data-code="GM">GM (+220)</option>
                    <option value="995" data-country="Georgia" data-code="GE">GE (+995)</option>
                    <option value="49" data-country="Germany" data-code="DE">DE (+49)</option>
                    <option value="233" data-country="Ghana" data-code="GH">GH (+233)</option>
                    <option value="350" data-country="Gibraltar" data-code="GI">GI (+350)</option>
                    <option value="30" data-country="Greece" data-code="GR">GR (+30)</option>
                    <option value="299" data-country="Greenland" data-code="GL">GL (+299)</option>
                    <option value="1473" data-country="Grenada" data-code="GD">GD (+1473)</option>
                    <option value="590" data-country="Guadeloupe" data-code="GP">GP (+590)</option>
                    <option value="1671" data-country="Guam" data-code="GU">GU (+1671)</option>
                    <option value="502" data-country="Guatemala" data-code="GT">GT (+502)</option>
                    <option value="44" data-country="Guernsey" data-code="GG">GG (+44)</option>
                    <option value="224" data-country="Guinea" data-code="GN">GN (+224)</option>
                    <option value="245" data-country="Guinea-Bissau" data-code="GW">GW (+245)</option>
                    <option value="592" data-country="Guyana" data-code="GY">GY (+592)</option>
                    <option value="509" data-country="Haiti" data-code="HT">HT (+509)</option>
                    <option value="0" data-country="Heard Island and Mcdonald Islands" data-code="HM">HM (+0)</option>
                    <option value="379" data-country="Holy See (Vatican City State)" data-code="VA">VA (+379)</option>
                    <option value="504" data-country="Honduras" data-code="HN">HN (+504)</option>
                    <option value="852" data-country="Hong Kong" data-code="HK">HK (+852)</option>
                    <option value="36" data-country="Hungary" data-code="HU">HU (+36)</option>
                    <option value="354" data-country="Iceland" data-code="IS">IS (+354)</option>
                    <option value="91" data-country="India" data-code="IN">IN (+91)</option>
                    <option value="62" data-country="Indonesia" data-code="ID">ID (+62)</option>
                    <option value="98" data-country="Iran - Islamic Republic of Persian Gulf" data-code="IR">IR (+98)</option>
                    <option value="964" data-country="Iraq" data-code="IQ">IQ (+964)</option>
                    <option value="353" data-country="Ireland" data-code="IE">IE (+353)</option>
                    <option value="44" data-country="Isle of Man" data-code="IM">IM (+44)</option>
                    <option value="972" data-country="Israel" data-code="IL">IL (+972)</option>
                    <option value="39" data-country="Italy" data-code="IT">IT (+39)</option>
                    <option value="1876" data-country="Jamaica" data-code="JM">JM (+1876)</option>
                    <option value="81" data-country="Japan" data-code="JP">JP (+81)</option>
                    <option value="44" data-country="Jersey" data-code="JE">JE (+44)</option>
                    <option value="962" data-country="Jordan" data-code="JO">JO (+962)</option>
                    <option value="7" data-country="Kazakhstan" data-code="KZ">KZ (+7)</option>
                    <option value="254" data-country="Kenya" data-code="KE">KE (+254)</option>
                    <option value="686" data-country="Kiribati" data-code="KI">KI (+686)</option>
                    <option value="850" data-country="Democratic People's Republic of Korea" data-code="KP">KP (+850)</option>
                    <option value="82" data-country="Republic of South Korea" data-code="KR">KR (+82)</option>
                    <option value="383" data-country="Kosovo" data-code="XK">XK (+383)</option>
                    <option value="965" data-country="Kuwait" data-code="KW">KW (+965)</option>
                    <option value="996" data-country="Kyrgyzstan" data-code="KG">KG (+996)</option>
                    <option value="856" data-country="Laos" data-code="LA">LA (+856)</option>
                    <option value="371" data-country="Latvia" data-code="LV">LV (+371)</option>
                    <option value="961" data-country="Lebanon" data-code="LB">LB (+961)</option>
                    <option value="266" data-country="Lesotho" data-code="LS">LS (+266)</option>
                    <option value="231" data-country="Liberia" data-code="LR">LR (+231)</option>
                    <option value="218" data-country="Libyan Arab Jamahiriya" data-code="LY">LY (+218)</option>
                    <option value="423" data-country="Liechtenstein" data-code="LI">LI (+423)</option>
                    <option value="370" data-country="Lithuania" data-code="LT">LT (+370)</option>
                    <option value="352" data-country="Luxembourg" data-code="LU">LU (+352)</option>
                    <option value="853" data-country="Macao" data-code="MO">MO (+853)</option>
                    <option value="389" data-country="Macedonia" data-code="MK">MK (+389)</option>
                    <option value="261" data-country="Madagascar" data-code="MG">MG (+261)</option>
                    <option value="265" data-country="Malawi" data-code="MW">MW (+265)</option>
                    <option value="60" data-country="Malaysia" data-code="MY">MY (+60)</option>
                    <option value="960" data-country="Maldives" data-code="MV">MV (+960)</option>
                    <option value="223" data-country="Mali" data-code="ML">ML (+223)</option>
                    <option value="356" data-country="Malta" data-code="MT">MT (+356)</option>
                    <option value="692" data-country="Marshall Islands" data-code="MH">MH (+692)</option>
                    <option value="596" data-country="Martinique" data-code="MQ">MQ (+596)</option>
                    <option value="222" data-country="Mauritania" data-code="MR">MR (+222)</option>
                    <option value="230" data-country="Mauritius" data-code="MU">MU (+230)</option>
                    <option value="262" data-country="Mayotte" data-code="YT">YT (+262)</option>
                    <option value="52" data-country="Mexico" data-code="MX">MX (+52)</option>
                    <option value="691" data-country="Federated States of Micronesia" data-code="FM">FM (+691)</option>
                    <option value="373" data-country="Moldova" data-code="MD">MD (+373)</option>
                    <option value="377" data-country="Monaco" data-code="MC">MC (+377)</option>
                    <option value="976" data-country="Mongolia" data-code="MN">MN (+976)</option>
                    <option value="382" data-country="Montenegro" data-code="ME">ME (+382)</option>
                    <option value="1664" data-country="Montserrat" data-code="MS">MS (+1664)</option>
                    <option value="212" data-country="Morocco" data-code="MA">MA (+212)</option>
                    <option value="258" data-country="Mozambique" data-code="MZ">MZ (+258)</option>
                    <option value="95" data-country="Myanmar" data-code="MM">MM (+95)</option>
                    <option value="264" data-country="Namibia" data-code="NA">NA (+264)</option>
                    <option value="674" data-country="Nauru" data-code="NR">NR (+674)</option>
                    <option value="977" data-country="Nepal" data-code="NP">NP (+977)</option>
                    <option value="31" data-country="Netherlands" data-code="NL">NL (+31)</option>
                    <option value="599" data-country="Netherlands Antilles" data-code="AN">AN (+599)</option>
                    <option value="687" data-country="New Caledonia" data-code="NC">NC (+687)</option>
                    <option value="64" data-country="New Zealand" data-code="NZ">NZ (+64)</option>
                    <option value="505" data-country="Nicaragua" data-code="NI">NI (+505)</option>
                    <option value="227" data-country="Niger" data-code="NE">NE (+227)</option>
                    <option value="234" data-country="Nigeria" data-code="NG">NG (+234)</option>
                    <option value="683" data-country="Niue" data-code="NU">NU (+683)</option>
                    <option value="672" data-country="Norfolk Island" data-code="NF">NF (+672)</option>
                    <option value="1670" data-country="Northern Mariana Islands" data-code="MP">MP (+1670)</option>
                    <option value="47" data-country="Norway" data-code="NO">NO (+47)</option>
                    <option value="968" data-country="Oman" data-code="OM">OM (+968)</option>
                    <option value="92" data-country="Pakistan" data-code="PK">PK (+92)</option>
                    <option value="680" data-country="Palau" data-code="PW">PW (+680)</option>
                    <option value="970" data-country="Palestinian Territory" data-code="PS">PS (+970)</option>
                    <option value="507" data-country="Panama" data-code="PA">PA (+507)</option>
                    <option value="675" data-country="Papua New Guinea" data-code="PG">PG (+675)</option>
                    <option value="595" data-country="Paraguay" data-code="PY">PY (+595)</option>
                    <option value="51" data-country="Peru" data-code="PE">PE (+51)</option>
                    <option value="63" data-country="Philippines" data-code="PH">PH (+63)</option>
                    <option value="64" data-country="Pitcairn" data-code="PN">PN (+64)</option>
                    <option value="48" data-country="Poland" data-code="PL">PL (+48)</option>
                    <option value="351" data-country="Portugal" data-code="PT">PT (+351)</option>
                    <option value="1939" data-country="Puerto Rico" data-code="PR">PR (+1939)</option>
                    <option value="974" data-country="Qatar" data-code="QA">QA (+974)</option>
                    <option value="40" data-country="Romania" data-code="RO">RO (+40)</option>
                    <option value="7" data-country="Russia" data-code="RU">RU (+7)</option>
                    <option value="250" data-country="Rwanda" data-code="RW">RW (+250)</option>
                    <option value="262" data-country="Reunion" data-code="RE">RE (+262)</option>
                    <option value="590" data-country="Saint Barthelemy" data-code="BL">BL (+590)</option>
                    <option value="290" data-country="Saint Helena - Ascension and Tristan Da Cunha" data-code="SH">SH (+290)</option>
                    <option value="1869" data-country="Saint Kitts and Nevis" data-code="KN">KN (+1869)</option>
                    <option value="1758" data-country="Saint Lucia" data-code="LC">LC (+1758)</option>
                    <option value="590" data-country="Saint Martin" data-code="MF">MF (+590)</option>
                    <option value="508" data-country="Saint Pierre and Miquelon" data-code="PM">PM (+508)</option>
                    <option value="1784" data-country="Saint Vincent and the Grenadines" data-code="VC">VC (+1784)</option>
                    <option value="685" data-country="Samoa" data-code="WS">WS (+685)</option>
                    <option value="378" data-country="San Marino" data-code="SM">SM (+378)</option>
                    <option value="239" data-country="Sao Tome and Principe" data-code="ST">ST (+239)</option>
                    <option value="966" data-country="Saudi Arabia" data-code="SA">SA (+966)</option>
                    <option value="221" data-country="Senegal" data-code="SN">SN (+221)</option>
                    <option value="381" data-country="Serbia" data-code="RS">RS (+381)</option>
                    <option value="248" data-country="Seychelles" data-code="SC">SC (+248)</option>
                    <option value="232" data-country="Sierra Leone" data-code="SL">SL (+232)</option>
                    <option value="65" data-country="Singapore" data-code="SG">SG (+65)</option>
                    <option value="421" data-country="Slovakia" data-code="SK">SK (+421)</option>
                    <option value="386" data-country="Slovenia" data-code="SI">SI (+386)</option>
                    <option value="677" data-country="Solomon Islands" data-code="SB">SB (+677)</option>
                    <option value="252" data-country="Somalia" data-code="SO">SO (+252)</option>
                    <option value="27" data-country="South Africa" data-code="ZA">ZA (+27)</option>
                    <option value="211" data-country="South Sudan" data-code="SS">SS (+211)</option>
                    <option value="500" data-country="South Georgia and the South Sandwich Islands" data-code="GS">GS (+500)</option>
                    <option value="34" data-country="Spain" data-code="ES">ES (+34)</option>
                    <option value="94" data-country="Sri Lanka" data-code="LK">LK (+94)</option>
                    <option value="249" data-country="Sudan" data-code="SD">SD (+249)</option>
                    <option value="597" data-country="Suriname" data-code="SR">SR (+597)</option>
                    <option value="47" data-country="Svalbard and Jan Mayen" data-code="SJ">SJ (+47)</option>
                    <option value="268" data-country="Swaziland" data-code="SZ">SZ (+268)</option>
                    <option value="46" data-country="Sweden" data-code="SE">SE (+46)</option>
                    <option value="41" data-country="Switzerland" data-code="CH">CH (+41)</option>
                    <option value="963" data-country="Syrian Arab Republic" data-code="SY">SY (+963)</option>
                    <option value="886" data-country="Taiwan" data-code="TW">TW (+886)</option>
                    <option value="992" data-country="Tajikistan" data-code="TJ">TJ (+992)</option>
                    <option value="255" data-country="United Republic of Tanzania" data-code="TZ">TZ (+255)</option>
                    <option value="66" data-country="Thailand" data-code="TH">TH (+66)</option>
                    <option value="670" data-country="Timor-Leste" data-code="TL">TL (+670)</option>
                    <option value="228" data-country="Togo" data-code="TG">TG (+228)</option>
                    <option value="690" data-country="Tokelau" data-code="TK">TK (+690)</option>
                    <option value="676" data-country="Tonga" data-code="TO">TO (+676)</option>
                    <option value="1868" data-country="Trinidad and Tobago" data-code="TT">TT (+1868)</option>
                    <option value="216" data-country="Tunisia" data-code="TN">TN (+216)</option>
                    <option value="90" data-country="Turkey" data-code="TR">TR (+90)</option>
                    <option value="993" data-country="Turkmenistan" data-code="TM">TM (+993)</option>
                    <option value="1649" data-country="Turks and Caicos Islands" data-code="TC">TC (+1649)</option>
                    <option value="688" data-country="Tuvalu" data-code="TV">TV (+688)</option>
                    <option value="256" data-country="Uganda" data-code="UG">UG (+256)</option>
                    <option value="380" data-country="Ukraine" data-code="UA">UA (+380)</option>
                    <option value="971" data-country="United Arab Emirates" data-code="AE">AE (+971)</option>
                    <option value="44" data-country="United Kingdom" data-code="GB">GB (+44)</option>
                    <option value="1" data-country="United States" data-code="US">US (+1)</option>
                    <option value="598" data-country="Uruguay" data-code="UY">UY (+598)</option>
                    <option value="998" data-country="Uzbekistan" data-code="UZ">UZ (+998)</option>
                    <option value="678" data-country="Vanuatu" data-code="VU">VU (+678)</option>
                    <option value="58" data-country="Bolivarian Republic of Venezuela" data-code="VE">VE (+58)</option>
                    <option value="84" data-country="Vietnam" data-code="VN">VN (+84)</option>
                    <option value="1284" data-country="British Virgin Islands" data-code="VG">VG (+1284)</option>
                    <option value="1340" data-country="U.S. Virgin Islands" data-code="VI">VI (+1340)</option>
                    <option value="681" data-country="Wallis and Futuna" data-code="WF">WF (+681)</option>
                    <option value="967" data-country="Yemen" data-code="YE">YE (+967)</option>
                    <option value="260" data-country="Zambia" data-code="ZM">ZM (+260)</option>
                    <option value="263" data-country="Zimbabwe" data-code="ZW">ZW (+263)</option>
                  </select>
                </span>
                <input type="tel" name="phone" value="{{ old('phone') }}" required autocomplete="off" class="form--control @error('phone') is-invalid @enderror" placeholder="Mobile Number...">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="form-group col-sm-6">
              <label>Country</label>
              <input type="text" name="country"  autocomplete="off" readonly class="form--control @error('country') is-invalid @enderror" placeholder="Country...">
              @error('country')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <input type="hidden" name="country_code">
            </div>
            <div class="form-group col-sm-6">
              <label>Password</label>
              <input type="password" name="password" class="form--control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password..." >
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group col-sm-6">
              <label>Confirm Password</label>
              <input type="password" name="password_confirmation" required autocomplete="new-password" class="form--control" placeholder="Confirm Password...">
            </div>
            <div class="form-group col-12 mb-0">
              <button type="submit" class="btn btn--base w-100">Register Now</button>
            </div>
          </div>
        </form>
      </div>
      <div class="bottom w-100 text-center">
        <p>© 2021 - {{ date('Y') }}
          <a href="{{ url('/') }}" class="text--base">ERUDIENCE</a>. All Rights Reserved.</p>
      </div>
    </div>
  </section>
  <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/lightcase.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/app.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/iziToast.min.css') }}">
  <script src="{{ asset('frontend/assets/js/iziToast.min.js') }}"></script>
  <script>
  function notify(status,message) {
              iziToast[status]({
                  message: message,
                  position: "topRight"
              });
          }
  </script>
  <script>
  "use strict";
    
    var t = $('option[data-code=BD]').attr('selected','');
      $('select[name=dial_code]').change(function(){
      $('input[name=country_code]').val($('select[name=dial_code] :selected').data('code'));
      $('input[name=country]').val($('select[name=dial_code] :selected').data('country'));
    }).change();
  </script>
</body>

</html>
