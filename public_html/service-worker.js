const CACHE_NAME = "app-cache-v1";
const urlsToCache = [
  "/buenas_practicas/private/config/config.php",
  "/buenas_practicas/private/scripts/script.js",
  "/buenas_practicas/private/styles/style.css",
  "/buenas_practicas/public_html/images/icon.png",
  "/buenas_practicas/public_html/user/datos.php",
  "/buenas_practicas/public_html/404.php",
  "/buenas_practicas/public_html/index.php",
  "/buenas_practicas/public_html/manifest.json"
];

self.addEventListener("install", function (event) {
  event.waitUntil(
    caches.open(CACHE_NAME).then(function (cache) {
      return cache.addAll(urlsToCache);
    })
  );
});

self.addEventListener("fetch", function (event) {
  event.respondWith(
    caches.match(event.request).then(function (response) {
      return response || fetch(event.request);
    })
  );
});
