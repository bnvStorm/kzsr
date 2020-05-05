'use strict';
importScripts('/assets/js/sw-toolbox.js');
toolbox.precache(['https://kzsr.kz/assets/js/revolution-addons/panorama/three.min.js', 'https://kzsr.kz/assets/fonts/Linearicons.woff2']);
toolbox.router.get('/assets/img/*', toolbox.cacheFirst);
toolbox.router.get('/*', toolbox.networkFirst, { networkTimeoutSeconds: 5});