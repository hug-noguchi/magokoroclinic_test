// clearCache.js

window.onload = function () {
  // CSSファイルを無効化してキャッシュをクリアする例
  var links = document.getElementsByTagName("link");
  for (var i = 0; i < links.length; i++) {
    var link = links[i];
    if (link.rel === "stylesheet") {
      link.href += "?version=" + new Date().getTime();
    }
  }
};
