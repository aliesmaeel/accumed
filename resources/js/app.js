import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
// Initialization for ES Users
// import "tw-elements";
import {
    Datepicker,
    Input,
    Collapse,
    initTE,
    Ripple,
} from "tw-elements";
initTE({ Datepicker, Input, Collapse, Ripple });
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();