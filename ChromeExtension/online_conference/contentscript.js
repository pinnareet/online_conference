/*
 * Copyright (c) 2010 The Chromium Authors. All rights reserved.  Use of this
 * source code is governed by a BSD-style license that can be found in the
 * LICENSE file.
 */

function checkEmbedUrl() {
  var f = document.getElementById(':sh.Ch');
  if (f != null && f.value.length != 0) {
    var xhr = new XMLHttpRequest();
    var dataToSend = new FormData();
    xhr.onreadystatechange = function() {
      if(xhr.readyState==4 && xhr.status==200) {
      }
    }
    xhr.open('POST', 'http://localhost/onlineconference/embed.php', true);
    dataToSend.append('talk', 'Tracking Currency Flow');
    dataToSend.append('frame', f.value);
    xhr.send(dataToSend);
  }
  else {
    setTimeout(checkEmbedUrl, 3000);
  }
}

setTimeout(checkEmbedUrl, 3000);