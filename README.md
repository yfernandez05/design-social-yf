# design-social-yf
Sección redes sociales , contacto WhatsApp, Facebook, Messenger etc. (html,sass,js,blade)

## usro requerido
- [Bootstrap]
- [FontWeasome]

## using 
### Include blade social in section general blade
@include('layouts.partials.utils.floatingsocialyf')
### Import style in general app.scss
@import 'socialyf';
### Import js in general app.js (option one page)
import './utils/socialsyf';
### Mix Asset Management (option one page)
.copyDirectory('resources/sound', 'public/sound')
### Mix Asset Management 
.js('resources/js/utils/socialsyf.js', 'public/js')
.copyDirectory('resources/sound', 'public/sound')
### Usage JSSocial in view
<script src="{{asset('js/socialsyf.js')}}"></script>
