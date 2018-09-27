<!DOCTYPE {!! $page->doctype ?? 'html' !!}>
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

  <table class="wrapper w-full bg-white" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
      <td align="center">
        <table class="w-600 sm-w-full" cellpadding="0" cellspacing="0" role="presentation">
          <tr>
            <td class="p-48 sm-p-16 pb-24">
              <table class="w-full" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td class="w-1-2 sm-inline-block sm-w-full sm-text-center sm-pb-16">
                    <img src="img/maizzle.png" alt="Maizzle" class="w-64">
                  </td>
                  <td class="w-1-2 sm-inline-block sm-w-full text-right sm-text-center text-sm">
                    <a href="https://maizzle.com" class="text-grey no-underline all-hover-text-grey-dark">Features</a>
                    <span class="text-grey">&bull;</span>
                    <a href="https://maizzle.com/docs/" class="text-grey no-underline all-hover-text-grey-dark">Docs</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td class="px-48 sm-px-16 font-open-sans">
              @if($page->headline)
              <h1 class="text-2xl leading-32 all-font-roboto">{{ $page->headline }}</h1>
              @endif

              <div class="text-base leading-32">
                @yield('content')
              </div>
            </td>
          </tr>
          <tr>
            <td class="text-center py-16">
              <h3 class="text-xl mt-0"><![if gte mso 16]>👋<![endif]></h3>
            </td>
          </tr>
          <tr>
            <td class="px-48 sm-px-16">
              <div class="h-px bg-grey-light leading-px">&zwnj;</div>
            </td>
          </tr>
          <tr>
            <td class="px-48 py-24">
              <table class="w-full" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                  <td class="w-1-2 text-grey-dark text-sm">&copy; {{ date('Y') }} Maizzle</td>
                  <td class="w-1-2 text-right">
                    <a href="https://maizzle.com" class="text-grey-dark hover-text-grey-darker text-sm">Unsubscribe</a>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>


</body>
</html>
