<!--[if mso]>
<v:image src="{{ $src }}" xmlns:v="urn:schemas-microsoft-com:vml" style="width:{{ $width }}px;height:{{ $height }}px;" />
<v:rect fill="false" stroke="false" style="position:absolute;width:{{ $width }}px;height:{{ $height }}px;">
<div><![endif]-->
{{ $slot }}
<!--[if mso]></div></v:rect><![endif]-->
