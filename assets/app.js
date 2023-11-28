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
import * as L from "leaflet";

import "@geoman-io/leaflet-geoman-free";
import "@geoman-io/leaflet-geoman-free/dist/leaflet-geoman.css";
L.PM.setOptIn(true);

global.L = L
window.L = L

