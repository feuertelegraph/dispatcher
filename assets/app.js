/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.sass';

// fonts
import '@fontsource-variable/work-sans';
import '@fontsource-variable/open-sans';

// leaflet
import "leaflet/dist/leaflet.css";
import "./scripts/leaflet";
global.L = require('leaflet')
window.L = require('leaflet')

