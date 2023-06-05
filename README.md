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
### Import js in general app.js
import './utils/socialsyf';
### Mix Asset Management
.copyDirectory('resources/sound', 'public/sound')
