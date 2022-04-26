'use strict';
const MANIFEST = 'flutter-app-manifest';
const TEMP = 'flutter-temp-cache';
const CACHE_NAME = 'flutter-app-cache';
const RESOURCES = {
  "assets/AssetManifest.json": "a9d6f7dfb3917525b6f91e546b75e2b0",
"assets/assets/fuentes/OpenSans-Bold.ttf": "1025a6e0fb0fa86f17f57cc82a6b9756",
"assets/assets/fuentes/OpenSans-Light.ttf": "2d0bdc8df10dee036ca3bedf6f3647c6",
"assets/assets/fuentes/OpenSans-Regular.ttf": "3ed9575dcc488c3e3a5bd66620bdf5a4",
"assets/assets/images/candado-abierto.png": "f18382cecf381cf519e973e0d0883d92",
"assets/assets/images/candado-cerrado.png": "f4f2386ebfc00471ede0f2093ce5087f",
"assets/assets/images/cerebroleyendo.gif": "2257ddff6558d127ef2b66722f06db25",
"assets/assets/images/cerebropesasgif.gif": "d2b5323a04193940b6e3d6b867fda033",
"assets/assets/images/ejercicios/cerebropesas.png": "24cd8f1476d3891275fdc1ebb2ca6cc3",
"assets/assets/images/fime.png": "12c2dc1b50362e47df4d74bc553b4f7c",
"assets/assets/images/isotipo.png": "5bd51c0f238ea0e80b5cf2700a71e3f3",
"assets/assets/images/lecciones/icon-abc.png": "9b332738336c3965187d67da03a9a97a",
"assets/assets/images/lecciones/icon-adjetivos.png": "fb79b01b143bc974641a9f49208b6c94",
"assets/assets/images/lecciones/icon-comida.png": "c7ed62e8d3be5299042cf83bb5f86bdf",
"assets/assets/images/lecciones/icon-cortesia.png": "265e6f1dea69b6046c07045d4028886d",
"assets/assets/images/lecciones/icon-dias.png": "a7942aefcf9c772960c3e719dd201ef8",
"assets/assets/images/lecciones/icon-estaciones.png": "8aeb9b26f44c3cee652f58985fefb920",
"assets/assets/images/lecciones/icon-familia.png": "4b68264cdc76f5b526ad76a88d62d70b",
"assets/assets/images/lecciones/icon-meses.png": "ea5272e641ff6fd1b32d85272876afe2",
"assets/assets/images/lecciones/icon-numeros.png": "077e155a6f94d1470f9d9b434aef5c35",
"assets/assets/images/lecciones/icon-pronombres.png": "a0e4435bda261364634468940cb2e116",
"assets/assets/images/lecciones/icon-saludos.png": "d57210feec9755a613bd03910722ec36",
"assets/assets/images/lecciones/icon-sentimientos.png": "5b49ee75703b5b7f1a0ff13c80956a8f",
"assets/assets/images/lecciones/icon-tiempo.png": "732245b03e31e8ef949306cf168c6e58",
"assets/assets/images/lecciones/icon-verbo.png": "cb36fb9025d2abc05a8be6977bfdedd9",
"assets/assets/images/logo.png": "0ef57f633f69c3a17c559b7a1560da1b",
"assets/assets/images/logocompleto.png": "1178211a2807524f7a25092253157d3e",
"assets/assets/images/logros/buenaracha.png": "6e9de5444405bf6e7153374b0eea8bde",
"assets/assets/images/logros/cerebrito.png": "2c92fc457d904c82f56bf323fc6c5277",
"assets/assets/images/logros/dragon.png": "02d6187b5a73139280fe7d3393755b36",
"assets/assets/images/logros/guerrero.png": "5d6fed39a836443af859c21eb6381a98",
"assets/assets/images/logros/leon.png": "c66aeded81f6dae58eb4c0c1dea4bb2e",
"assets/assets/images/logros/leyenda.png": "fbb5e4879a04c5294835044c91f3a145",
"assets/assets/images/logros/mirandolasestrellas.png": "b5058c036031dc88f902712deff9ca6e",
"assets/assets/images/logros/otrascosas.png": "46db4aa0973ff5feec63e925a17c2a57",
"assets/assets/images/logros/primerospasos.png": "7a9c0d69d4b06aeb9810e253b7703cdd",
"assets/assets/images/logros/tiroalblanco.png": "3f59b33a36ddb504614cdf9fd9afd87c",
"assets/assets/images/oscuro.png": "6db97172d83fcac1e7219daeace9d1bd",
"assets/assets/images/perfil/cebra-amarillo.png": "15b9b459226b94348931170dbb43f5ee",
"assets/assets/images/perfil/cebra-celeste.png": "6d6c465432fc09a4a2c7d94e937023d7",
"assets/assets/images/perfil/cebra-morado.png": "ac6a10a9c0fa88da707444816db53601",
"assets/assets/images/perfil/cebra-naranja.png": "66017d09ef1ab400a8c1f030523e3230",
"assets/assets/images/perfil/cebra-rojo.png": "762455afef2da2c22d771f765536b74d",
"assets/assets/images/perfil/cebra-rosa.png": "72a8185dc1e2f01fc438161b8f5a8d4f",
"assets/assets/images/perfil/cebra-verde.png": "8384005839b9d3f473bc42954f1cb41a",
"assets/assets/images/perfil/cerdo-amarillo.png": "75210bdc924d213262ea460117fce81c",
"assets/assets/images/perfil/cerdo-celeste.png": "37ae476e15972460b5675dffc6656347",
"assets/assets/images/perfil/cerdo-morado.png": "575f7ec3906d4f9c63500046e18b3153",
"assets/assets/images/perfil/cerdo-naranja.png": "0d293f03812f9f9ea1dd9e7e01600753",
"assets/assets/images/perfil/cerdo-rojo.png": "6caddf72128e486c2b9c5f362582abb6",
"assets/assets/images/perfil/cerdo-rosa.png": "5916051e6bacc29d65ef4815f68132b2",
"assets/assets/images/perfil/cerdo-verde.png": "20e9b9ff13a0d069c2c51b646b70e69a",
"assets/assets/images/perfil/delfin-amarillo.png": "c96c2f267ab3fe596838d1bbaca2895c",
"assets/assets/images/perfil/delfin-celeste.png": "760200a6969493d4b201e1fd9496f99d",
"assets/assets/images/perfil/delfin-morado.png": "eb75e8c5927e4e72a398fddeb3fcde79",
"assets/assets/images/perfil/delfin-naranja.png": "7aa11e58c91e7433e018e93f6474e389",
"assets/assets/images/perfil/delfin-rojo.png": "99a0b5a2b5c89ec2d66fd07583e5d632",
"assets/assets/images/perfil/delfin-rosa.png": "3b17ed9d16eb795a7813d2f43401efee",
"assets/assets/images/perfil/delfin-verde.png": "a8fcd76d2b7419348d3a377277ef2004",
"assets/assets/images/perfil/elefante-amarillo.png": "08c7d4aa0308184375a15bdcb134ca43",
"assets/assets/images/perfil/elefante-celeste.png": "3cf09bbe6b3f8224bf888763387b0143",
"assets/assets/images/perfil/elefante-morado.png": "c6e6527e8c629f1e030f135395681329",
"assets/assets/images/perfil/elefante-naranja.png": "60e7e8217c02d4fe67ce3d5786acd6b5",
"assets/assets/images/perfil/elefante-rojo.png": "d7402ebcf275f9a404911cb620c41228",
"assets/assets/images/perfil/elefante-rosa.png": "c9ef3593dcbbe35da910e4473e5da52a",
"assets/assets/images/perfil/elefante-verde.png": "993391af6a7784d4b20d0df3f798c437",
"assets/assets/images/perfil/mapache-amarillo.png": "0a1b98eb6deedbc1cf690970d21af3a2",
"assets/assets/images/perfil/mapache-celeste.png": "17814a09a948e2ceeb595164bb8fe2b1",
"assets/assets/images/perfil/mapache-morado.png": "0f294705d4c129f4c267b161b51e241c",
"assets/assets/images/perfil/mapache-naranja.png": "920912f9305850c5865fc85ab5fefc42",
"assets/assets/images/perfil/mapache-rojo.png": "4d7848177ff3bcff141aba1505956162",
"assets/assets/images/perfil/mapache-rosa.png": "fab9679ed4a1110feae6754c1544f797",
"assets/assets/images/perfil/mapache-verde.png": "26795c4cf79bbd2a34c42d702bc6c0fc",
"assets/assets/images/perfil/panda-amarillo.png": "181370803422b36191e88bac88b0719b",
"assets/assets/images/perfil/panda-celeste.png": "dd6d97323e079e1d0d4e7fb7281d7a1c",
"assets/assets/images/perfil/panda-morado.png": "f692e1de312af003c36adb805524788b",
"assets/assets/images/perfil/panda-naranja.png": "3b35148091906196be5dff84dd8d46fe",
"assets/assets/images/perfil/panda-rojo.png": "4d7bd1e7ef92be2b2fed69a727cfd639",
"assets/assets/images/perfil/panda-rosa.png": "845fe4cc3f363c8fba6b152a6718f44c",
"assets/assets/images/perfil/panda-verde.png": "aaf4d898212b129c8ecbde4668d323c2",
"assets/assets/images/perfil/tucan-amarillo.png": "6383f9930d8e43a7d6f0cc04c052bd3b",
"assets/assets/images/perfil/tucan-celeste.png": "a266038a2feaf6cd7cab87046d28a020",
"assets/assets/images/perfil/tucan-morado.png": "11772fa776ba8a5a8ccd08ffe2c01498",
"assets/assets/images/perfil/tucan-naranja.png": "92a49bc60afe6a265a3a08fb39d79d0b",
"assets/assets/images/perfil/tucan-rojo.png": "16555f0b8be8b272c056690304881660",
"assets/assets/images/perfil/tucan-rosa.png": "b8b9ec2273c9784bd24a8a4b172f4852",
"assets/assets/images/perfil/tucan-verde.png": "378dc8c1a5a83aaca519a8a05c33ba6c",
"assets/assets/images/pngegg.png": "9ed3a16db6c7e9634d8ea4f66c64aaa7",
"assets/FontManifest.json": "09f08dc906082b6c628ba0be80140f35",
"assets/fonts/MaterialIcons-Regular.otf": "4e6447691c9509f7acdbf8a931a85ca1",
"assets/NOTICES": "b165475c3b86cfdfcdd89474ea5ff4b9",
"assets/packages/cupertino_icons/assets/CupertinoIcons.ttf": "6d342eb68f170c97609e9da345464e5e",
"assets/packages/font_awesome_flutter/lib/fonts/fa-brands-400.ttf": "00bb2b684be61e89d1bc7d75dee30b58",
"assets/packages/font_awesome_flutter/lib/fonts/fa-regular-400.ttf": "4b6a9b7c20913279a3ad3dd9c96e155b",
"assets/packages/font_awesome_flutter/lib/fonts/fa-solid-900.ttf": "dffd9504fcb1894620fa41c700172994",
"assets/packages/wakelock_web/assets/no_sleep.js": "7748a45cd593f33280669b29c2c8919a",
"favicon.png": "5dcef449791fa27946b3d35ad8803796",
"icons/Icon-192.png": "ac9a721a12bbc803b44f645561ecb1e1",
"icons/Icon-512.png": "96e752610906ba2a93c65f8abe1645f1",
"index.html": "2d5531224050beb3021fe6e7f4b99c17",
"/": "2d5531224050beb3021fe6e7f4b99c17",
"main.dart.js": "d7db318dd03845510605bbc4c1b8dc29",
"manifest.json": "9e3e6c6ef98af6024c868d5ef4c51ad5",
"online.html": "4815ba631997ad77231da0ce681b664b",
"splash/img/dark-1x.png": "2094f71a3e8cc80d16700c857c40cec6",
"splash/img/dark-2x.png": "15e552cd92c9a720bac2fbb44d23084b",
"splash/img/dark-3x.png": "bae859cb3d987c7c40a7025749d3054b",
"splash/img/dark-4x.png": "822243fb9f3757175ee73aa8ef6eff44",
"splash/img/light-1x.png": "2094f71a3e8cc80d16700c857c40cec6",
"splash/img/light-2x.png": "15e552cd92c9a720bac2fbb44d23084b",
"splash/img/light-3x.png": "bae859cb3d987c7c40a7025749d3054b",
"splash/img/light-4x.png": "822243fb9f3757175ee73aa8ef6eff44",
"splash/style.css": "e6e8ee2d90947f47b31550f62ef3afe7",
"version.json": "a7a2f57eba18dd20962e3747b9e1a3c1"
};

// The application shell files that are downloaded before a service worker can
// start.
const CORE = [
  "/",
"main.dart.js",
"index.html",
"assets/NOTICES",
"assets/AssetManifest.json",
"assets/FontManifest.json"];
// During install, the TEMP cache is populated with the application shell files.
self.addEventListener("install", (event) => {
  self.skipWaiting();
  return event.waitUntil(
    caches.open(TEMP).then((cache) => {
      return cache.addAll(
        CORE.map((value) => new Request(value, {'cache': 'reload'})));
    })
  );
});

// During activate, the cache is populated with the temp files downloaded in
// install. If this service worker is upgrading from one with a saved
// MANIFEST, then use this to retain unchanged resource files.
self.addEventListener("activate", function(event) {
  return event.waitUntil(async function() {
    try {
      var contentCache = await caches.open(CACHE_NAME);
      var tempCache = await caches.open(TEMP);
      var manifestCache = await caches.open(MANIFEST);
      var manifest = await manifestCache.match('manifest');
      // When there is no prior manifest, clear the entire cache.
      if (!manifest) {
        await caches.delete(CACHE_NAME);
        contentCache = await caches.open(CACHE_NAME);
        for (var request of await tempCache.keys()) {
          var response = await tempCache.match(request);
          await contentCache.put(request, response);
        }
        await caches.delete(TEMP);
        // Save the manifest to make future upgrades efficient.
        await manifestCache.put('manifest', new Response(JSON.stringify(RESOURCES)));
        return;
      }
      var oldManifest = await manifest.json();
      var origin = self.location.origin;
      for (var request of await contentCache.keys()) {
        var key = request.url.substring(origin.length + 1);
        if (key == "") {
          key = "/";
        }
        // If a resource from the old manifest is not in the new cache, or if
        // the MD5 sum has changed, delete it. Otherwise the resource is left
        // in the cache and can be reused by the new service worker.
        if (!RESOURCES[key] || RESOURCES[key] != oldManifest[key]) {
          await contentCache.delete(request);
        }
      }
      // Populate the cache with the app shell TEMP files, potentially overwriting
      // cache files preserved above.
      for (var request of await tempCache.keys()) {
        var response = await tempCache.match(request);
        await contentCache.put(request, response);
      }
      await caches.delete(TEMP);
      // Save the manifest to make future upgrades efficient.
      await manifestCache.put('manifest', new Response(JSON.stringify(RESOURCES)));
      return;
    } catch (err) {
      // On an unhandled exception the state of the cache cannot be guaranteed.
      console.error('Failed to upgrade service worker: ' + err);
      await caches.delete(CACHE_NAME);
      await caches.delete(TEMP);
      await caches.delete(MANIFEST);
    }
  }());
});

// The fetch handler redirects requests for RESOURCE files to the service
// worker cache.
self.addEventListener("fetch", (event) => {
  if (event.request.method !== 'GET') {
    return;
  }
  var origin = self.location.origin;
  var key = event.request.url.substring(origin.length + 1);
  // Redirect URLs to the index.html
  if (key.indexOf('?v=') != -1) {
    key = key.split('?v=')[0];
  }
  if (event.request.url == origin || event.request.url.startsWith(origin + '/#') || key == '') {
    key = '/';
  }
  // If the URL is not the RESOURCE list then return to signal that the
  // browser should take over.
  if (!RESOURCES[key]) {
    return;
  }
  // If the URL is the index.html, perform an online-first request.
  if (key == '/') {
    return onlineFirst(event);
  }
  event.respondWith(caches.open(CACHE_NAME)
    .then((cache) =>  {
      return cache.match(event.request).then((response) => {
        // Either respond with the cached resource, or perform a fetch and
        // lazily populate the cache.
        return response || fetch(event.request).then((response) => {
          cache.put(event.request, response.clone());
          return response;
        });
      })
    })
  );
});

self.addEventListener('message', (event) => {
  // SkipWaiting can be used to immediately activate a waiting service worker.
  // This will also require a page refresh triggered by the main worker.
  if (event.data === 'skipWaiting') {
    self.skipWaiting();
    return;
  }
  if (event.data === 'downloadOffline') {
    downloadOffline();
    return;
  }
});

// Download offline will check the RESOURCES for all files not in the cache
// and populate them.
async function downloadOffline() {
  var resources = [];
  var contentCache = await caches.open(CACHE_NAME);
  var currentContent = {};
  for (var request of await contentCache.keys()) {
    var key = request.url.substring(origin.length + 1);
    if (key == "") {
      key = "/";
    }
    currentContent[key] = true;
  }
  for (var resourceKey of Object.keys(RESOURCES)) {
    if (!currentContent[resourceKey]) {
      resources.push(resourceKey);
    }
  }
  return contentCache.addAll(resources);
}

// Attempt to download the resource online before falling back to
// the offline cache.
function onlineFirst(event) {
  return event.respondWith(
    fetch(event.request).then((response) => {
      return caches.open(CACHE_NAME).then((cache) => {
        cache.put(event.request, response.clone());
        return response;
      });
    }).catch((error) => {
      return caches.open(CACHE_NAME).then((cache) => {
        return cache.match(event.request).then((response) => {
          if (response != null) {
            return response;
          }
          throw error;
        });
      });
    })
  );
}
