<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="{{ $page->charset ?? 'utf8' }}">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  @if($page->title)<title>{{ $page->title }}</title>@endif

  @if($page->googleFonts)
  <!--[if !mso]><!--><link rel="stylesheet" href="https://fonts.googleapis.com/css?family={{ $page->googleFontsString() }}"><!--<![endif]-->
  @endif

  @include('_partials.css.email')
</head>
<body class="{{ $page->bodyClasses ?? '' }}">

  @if($page->preheader)
  <div class="hidden text-0 leading-0">{!! $page->preheader !!}</div>
  @endif

  @yield('content')

</body>
</html>
