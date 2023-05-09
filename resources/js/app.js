import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import '@fortawesome/fontawesome-free/scss/fontawesome.scss';
import '@fortawesome/fontawesome-free/scss/brands.scss';
import '@fortawesome/fontawesome-free/scss/regular.scss';
import '@fortawesome/fontawesome-free/scss/solid.scss';
import '@fortawesome/fontawesome-free/scss/v4-shims.scss';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
