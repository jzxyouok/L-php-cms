@include('admin.header')
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if ('sf-dump-compact' == oldClass) { arrow = '&#9660;'; newClass = 'sf-dump-expanded'; } else if ('sf-dump-expanded' == oldClass) { arrow = '&#9654;'; newClass = 'sf-dump-compact'; } else { return false; } a.lastChild.innerHTML = arrow; s.className = newClass; if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (a[s].className !== newClass) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; return function (root) { root = doc.getElementById(root); function a(e, f) { addEventListener(root, e, function (e) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a) { if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = 'pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if ('sf-dump-compact' == r.className) { toggle(s, isCtrlKey(e)); } } if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } }); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), elt = root.getElementsByTagName('A'), len = elt.length, i = 0, t = []; while (i < len) t.push(elt[i++]); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); root = t; len = t.length; i = t = 0; while (i < len) { elt = root[i]; if ("SAMP" == elt.tagName) { elt.className = "sf-dump-expanded"; a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += '<span>&#9660;</span>'; a.className += ' sf-dump-toggle'; if ('sf-dump' != elt.parentNode.className) { toggle(a); } } else if ("sf-dump-ref" == elt.className && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { t = a.nextSibling; elt.appendChild(a); t.parentNode.insertBefore(a, t); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>&#9654;</span>'; } else { elt.innerHTML = '<span>&#9654;</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '&hellip;'; elt.className = 'sf-dump-ref'; } } } } ++i; } }; })(document); </script> <style> pre.sf-dump { display: block; white-space: pre; padding: 5px; } pre.sf-dump span { display: inline; } pre.sf-dump .sf-dump-compact { display: none; } pre.sf-dump abbr { text-decoration: none; border: none; cursor: help; } pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; }pre.sf-dump{background-color:#fff; color:#222; line-height:1.2em; font-weight:normal; font:12px Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:100000}pre.sf-dump .sf-dump-num{color:#a71d5d}pre.sf-dump .sf-dump-const{color:#795da3}pre.sf-dump .sf-dump-str{color:#df5000}pre.sf-dump .sf-dump-cchr{color:#222}pre.sf-dump .sf-dump-note{color:#a71d5d}pre.sf-dump .sf-dump-ref{color:#a0a0a0}pre.sf-dump .sf-dump-public{color:#795da3}pre.sf-dump .sf-dump-protected{color:#795da3}pre.sf-dump .sf-dump-private{color:#795da3}pre.sf-dump .sf-dump-meta{color:#b729d9}pre.sf-dump .sf-dump-key{color:#df5000}pre.sf-dump .sf-dump-index{color:#a71d5d}</style><pre class=sf-dump id=sf-dump-541122332 data-indent-pad="  "><span class=sf-dump-note>array:1</span> [<samp>
  "<span class=sf-dump-key>Filedata</span>" => <abbr title="Illuminate\Http\UploadedFile" class=sf-dump-note>UploadedFile</abbr> {<a class=sf-dump-ref>#239</a><samp>
    -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">test</span>: <span class=sf-dump-const>false</span>
    -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">originalName</span>: "<span class=sf-dump-str title="12 characters">20625882.jpg</span>"
    -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">mimeType</span>: "<span class=sf-dump-str title="24 characters">application/octet-stream</span>"
    -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">size</span>: <span class=sf-dump-num>8024</span>
    -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">error</span>: <span class=sf-dump-num>0</span>
    <span class=sf-dump-meta>path</span>: "<span class=sf-dump-str title="11 characters">C:\wamp\tmp</span>"
    <span class=sf-dump-meta>filename</span>: "<span class=sf-dump-str title="9 characters">php64.tmp</span>"
    <span class=sf-dump-meta>basename</span>: "<span class=sf-dump-str title="9 characters">php64.tmp</span>"
    <span class=sf-dump-meta>pathname</span>: "<span class=sf-dump-str title="21 characters">C:\wamp\tmp\php64.tmp</span>"
    <span class=sf-dump-meta>extension</span>: "<span class=sf-dump-str title="3 characters">tmp</span>"
    <span class=sf-dump-meta>realPath</span>: "<span class=sf-dump-str title="21 characters">C:\wamp\tmp\php64.tmp</span>"
    <span class=sf-dump-meta>aTime</span>: <span class=sf-dump-const title="1497959288">2017-06-20 11:48:08</span>
    <span class=sf-dump-meta>mTime</span>: <span class=sf-dump-const title="1497959288">2017-06-20 11:48:08</span>
    <span class=sf-dump-meta>cTime</span>: <span class=sf-dump-const title="1497959288">2017-06-20 11:48:08</span>
    <span class=sf-dump-meta>inode</span>: <span class=sf-dump-num>0</span>
    <span class=sf-dump-meta>size</span>: <span class=sf-dump-num>8024</span>
    <span class=sf-dump-meta>perms</span>: <span class=sf-dump-const title="33206">0100666</span>
    <span class=sf-dump-meta>owner</span>: <span class=sf-dump-num>0</span>
    <span class=sf-dump-meta>group</span>: <span class=sf-dump-num>0</span>
    <span class=sf-dump-meta>type</span>: "<span class=sf-dump-str title="4 characters">file</span>"
    <span class=sf-dump-meta>writable</span>: <span class=sf-dump-const>true</span>
    <span class=sf-dump-meta>readable</span>: <span class=sf-dump-const>true</span>
    <span class=sf-dump-meta>executable</span>: <span class=sf-dump-const>false</span>
    <span class=sf-dump-meta>file</span>: <span class=sf-dump-const>true</span>
    <span class=sf-dump-meta>dir</span>: <span class=sf-dump-const>false</span>
    <span class=sf-dump-meta>link</span>: <span class=sf-dump-const>false</span>
    <span class=sf-dump-meta>linkTarget</span>: "<span class=sf-dump-str title="21 characters">C:\wamp\tmp\php64.tmp</span>"
  </samp>}
</samp>]
</pre><script>Sfdump("sf-dump-541122332")</script>
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if ('sf-dump-compact' == oldClass) { arrow = '&#9660;'; newClass = 'sf-dump-expanded'; } else if ('sf-dump-expanded' == oldClass) { arrow = '&#9654;'; newClass = 'sf-dump-compact'; } else { return false; } a.lastChild.innerHTML = arrow; s.className = newClass; if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (a[s].className !== newClass) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; return function (root) { root = doc.getElementById(root); function a(e, f) { addEventListener(root, e, function (e) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a) { if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = 'pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if ('sf-dump-compact' == r.className) { toggle(s, isCtrlKey(e)); } } if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } }); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), elt = root.getElementsByTagName('A'), len = elt.length, i = 0, t = []; while (i < len) t.push(elt[i++]); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); root = t; len = t.length; i = t = 0; while (i < len) { elt = root[i]; if ("SAMP" == elt.tagName) { elt.className = "sf-dump-expanded"; a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += '<span>&#9660;</span>'; a.className += ' sf-dump-toggle'; if ('sf-dump' != elt.parentNode.className) { toggle(a); } } else if ("sf-dump-ref" == elt.className && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { t = a.nextSibling; elt.appendChild(a); t.parentNode.insertBefore(a, t); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>&#9654;</span>'; } else { elt.innerHTML = '<span>&#9654;</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '&hellip;'; elt.className = 'sf-dump-ref'; } } } } ++i; } }; })(document); </script> <style> pre.sf-dump { display: block; white-space: pre; padding: 5px; } pre.sf-dump span { display: inline; } pre.sf-dump .sf-dump-compact { display: none; } pre.sf-dump abbr { text-decoration: none; border: none; cursor: help; } pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; }pre.sf-dump{background-color:#fff; color:#222; line-height:1.2em; font-weight:normal; font:12px Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:100000}pre.sf-dump .sf-dump-num{color:#a71d5d}pre.sf-dump .sf-dump-const{color:#795da3}pre.sf-dump .sf-dump-str{color:#df5000}pre.sf-dump .sf-dump-cchr{color:#222}pre.sf-dump .sf-dump-note{color:#a71d5d}pre.sf-dump .sf-dump-ref{color:#a0a0a0}pre.sf-dump .sf-dump-public{color:#795da3}pre.sf-dump .sf-dump-protected{color:#795da3}pre.sf-dump .sf-dump-private{color:#795da3}pre.sf-dump .sf-dump-meta{color:#b729d9}pre.sf-dump .sf-dump-key{color:#df5000}pre.sf-dump .sf-dump-index{color:#a71d5d}</style><pre class=sf-dump id=sf-dump-1710557720 data-indent-pad="  "><abbr title="Illuminate\Http\UploadedFile" class=sf-dump-note>UploadedFile</abbr> {<a class=sf-dump-ref>#239</a><samp>
  -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">test</span>: <span class=sf-dump-const>false</span>
  -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">originalName</span>: "<span class=sf-dump-str title="21 characters">html5up-editorial.zip</span>"
  -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">mimeType</span>: "<span class=sf-dump-str title="24 characters">application/octet-stream</span>"
  -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">size</span>: <span class=sf-dump-num>983177</span>
  -<span class=sf-dump-private title="Private property defined in class:&#10;`Symfony\Component\HttpFoundation\File\UploadedFile`">error</span>: <span class=sf-dump-num>0</span>
  <span class=sf-dump-meta>path</span>: "<span class=sf-dump-str title="11 characters">C:\wamp\tmp</span>"
  <span class=sf-dump-meta>filename</span>: "<span class=sf-dump-str title="11 characters">phpEAC4.tmp</span>"
  <span class=sf-dump-meta>basename</span>: "<span class=sf-dump-str title="11 characters">phpEAC4.tmp</span>"
  <span class=sf-dump-meta>pathname</span>: "<span class=sf-dump-str title="23 characters">C:\wamp\tmp\phpEAC4.tmp</span>"
  <span class=sf-dump-meta>extension</span>: "<span class=sf-dump-str title="3 characters">tmp</span>"
  <span class=sf-dump-meta>realPath</span>: "<span class=sf-dump-str title="23 characters">C:\wamp\tmp\phpEAC4.tmp</span>"
  <span class=sf-dump-meta>aTime</span>: <span class=sf-dump-const title="1497959675">2017-06-20 11:54:35</span>
  <span class=sf-dump-meta>mTime</span>: <span class=sf-dump-const title="1497959675">2017-06-20 11:54:35</span>
  <span class=sf-dump-meta>cTime</span>: <span class=sf-dump-const title="1497959675">2017-06-20 11:54:35</span>
  <span class=sf-dump-meta>inode</span>: <span class=sf-dump-num>0</span>
  <span class=sf-dump-meta>size</span>: <span class=sf-dump-num>983177</span>
  <span class=sf-dump-meta>perms</span>: <span class=sf-dump-const title="33206">0100666</span>
  <span class=sf-dump-meta>owner</span>: <span class=sf-dump-num>0</span>
  <span class=sf-dump-meta>group</span>: <span class=sf-dump-num>0</span>
  <span class=sf-dump-meta>type</span>: "<span class=sf-dump-str title="4 characters">file</span>"
  <span class=sf-dump-meta>writable</span>: <span class=sf-dump-const>true</span>
  <span class=sf-dump-meta>readable</span>: <span class=sf-dump-const>true</span>
  <span class=sf-dump-meta>executable</span>: <span class=sf-dump-const>false</span>
  <span class=sf-dump-meta>file</span>: <span class=sf-dump-const>true</span>
  <span class=sf-dump-meta>dir</span>: <span class=sf-dump-const>false</span>
  <span class=sf-dump-meta>link</span>: <span class=sf-dump-const>false</span>
  <span class=sf-dump-meta>linkTarget</span>: "<span class=sf-dump-str title="23 characters">C:\wamp\tmp\phpEAC4.tmp</span>"
</samp>}
</pre><script>Sfdump("sf-dump-1710557720")</script>
<script> Sfdump = window.Sfdump || (function (doc) { var refStyle = doc.createElement('style'), rxEsc = /([.*+?^${}()|\[\]\/\\])/g, idRx = /\bsf-dump-\d+-ref[012]\w+\b/, keyHint = 0 <= navigator.platform.toUpperCase().indexOf('MAC') ? 'Cmd' : 'Ctrl', addEventListener = function (e, n, cb) { e.addEventListener(n, cb, false); }; (doc.documentElement.firstElementChild || doc.documentElement.children[0]).appendChild(refStyle); if (!doc.addEventListener) { addEventListener = function (element, eventName, callback) { element.attachEvent('on' + eventName, function (e) { e.preventDefault = function () {e.returnValue = false;}; e.target = e.srcElement; callback(e); }); }; } function toggle(a, recursive) { var s = a.nextSibling || {}, oldClass = s.className, arrow, newClass; if ('sf-dump-compact' == oldClass) { arrow = '&#9660;'; newClass = 'sf-dump-expanded'; } else if ('sf-dump-expanded' == oldClass) { arrow = '&#9654;'; newClass = 'sf-dump-compact'; } else { return false; } a.lastChild.innerHTML = arrow; s.className = newClass; if (recursive) { try { a = s.querySelectorAll('.'+oldClass); for (s = 0; s < a.length; ++s) { if (a[s].className !== newClass) { a[s].className = newClass; a[s].previousSibling.lastChild.innerHTML = arrow; } } } catch (e) { } } return true; }; return function (root) { root = doc.getElementById(root); function a(e, f) { addEventListener(root, e, function (e) { if ('A' == e.target.tagName) { f(e.target, e); } else if ('A' == e.target.parentNode.tagName) { f(e.target.parentNode, e); } }); }; function isCtrlKey(e) { return e.ctrlKey || e.metaKey; } addEventListener(root, 'mouseover', function (e) { if ('' != refStyle.innerHTML) { refStyle.innerHTML = ''; } }); a('mouseover', function (a) { if (a = idRx.exec(a.className)) { try { refStyle.innerHTML = 'pre.sf-dump .'+a[0]+'{background-color: #B729D9; color: #FFF !important; border-radius: 2px}'; } catch (e) { } } }); a('click', function (a, e) { if (/\bsf-dump-toggle\b/.test(a.className)) { e.preventDefault(); if (!toggle(a, isCtrlKey(e))) { var r = doc.getElementById(a.getAttribute('href').substr(1)), s = r.previousSibling, f = r.parentNode, t = a.parentNode; t.replaceChild(r, a); f.replaceChild(a, s); t.insertBefore(s, r); f = f.firstChild.nodeValue.match(indentRx); t = t.firstChild.nodeValue.match(indentRx); if (f && t && f[0] !== t[0]) { r.innerHTML = r.innerHTML.replace(new RegExp('^'+f[0].replace(rxEsc, '\\$1'), 'mg'), t[0]); } if ('sf-dump-compact' == r.className) { toggle(s, isCtrlKey(e)); } } if (doc.getSelection) { try { doc.getSelection().removeAllRanges(); } catch (e) { doc.getSelection().empty(); } } else { doc.selection.empty(); } } }); var indentRx = new RegExp('^('+(root.getAttribute('data-indent-pad') || ' ').replace(rxEsc, '\\$1')+')+', 'm'), elt = root.getElementsByTagName('A'), len = elt.length, i = 0, t = []; while (i < len) t.push(elt[i++]); elt = root.getElementsByTagName('SAMP'); len = elt.length; i = 0; while (i < len) t.push(elt[i++]); root = t; len = t.length; i = t = 0; while (i < len) { elt = root[i]; if ("SAMP" == elt.tagName) { elt.className = "sf-dump-expanded"; a = elt.previousSibling || {}; if ('A' != a.tagName) { a = doc.createElement('A'); a.className = 'sf-dump-ref'; elt.parentNode.insertBefore(a, elt); } else { a.innerHTML += ' '; } a.title = (a.title ? a.title+'\n[' : '[')+keyHint+'+click] Expand all children'; a.innerHTML += '<span>&#9660;</span>'; a.className += ' sf-dump-toggle'; if ('sf-dump' != elt.parentNode.className) { toggle(a); } } else if ("sf-dump-ref" == elt.className && (a = elt.getAttribute('href'))) { a = a.substr(1); elt.className += ' '+a; if (/[\[{]$/.test(elt.previousSibling.nodeValue)) { a = a != elt.nextSibling.id && doc.getElementById(a); try { t = a.nextSibling; elt.appendChild(a); t.parentNode.insertBefore(a, t); if (/^[@#]/.test(elt.innerHTML)) { elt.innerHTML += ' <span>&#9654;</span>'; } else { elt.innerHTML = '<span>&#9654;</span>'; elt.className = 'sf-dump-ref'; } elt.className += ' sf-dump-toggle'; } catch (e) { if ('&' == elt.innerHTML.charAt(0)) { elt.innerHTML = '&hellip;'; elt.className = 'sf-dump-ref'; } } } } ++i; } }; })(document); </script> <style> pre.sf-dump { display: block; white-space: pre; padding: 5px; } pre.sf-dump span { display: inline; } pre.sf-dump .sf-dump-compact { display: none; } pre.sf-dump abbr { text-decoration: none; border: none; cursor: help; } pre.sf-dump a { text-decoration: none; cursor: pointer; border: 0; outline: none; }pre.sf-dump{background-color:#fff; color:#222; line-height:1.2em; font-weight:normal; font:12px Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:100000}pre.sf-dump .sf-dump-num{color:#a71d5d}pre.sf-dump .sf-dump-const{color:#795da3}pre.sf-dump .sf-dump-str{color:#df5000}pre.sf-dump .sf-dump-cchr{color:#222}pre.sf-dump .sf-dump-note{color:#a71d5d}pre.sf-dump .sf-dump-ref{color:#a0a0a0}pre.sf-dump .sf-dump-public{color:#795da3}pre.sf-dump .sf-dump-protected{color:#795da3}pre.sf-dump .sf-dump-private{color:#795da3}pre.sf-dump .sf-dump-meta{color:#b729d9}pre.sf-dump .sf-dump-key{color:#df5000}pre.sf-dump .sf-dump-index{color:#a71d5d}</style><pre class=sf-dump id=sf-dump-955065355 data-indent-pad="  ">"<span class=sf-dump-str title="23 characters">C:\wamp\tmp\phpC3D5.tmp</span>"
</pre><script>Sfdump("sf-dump-955065355")</script>

<div class="content-wrapper" ng-controller="mediaManageUpload">

    <section class="content-header">
        <h1>
            {{$cms}}
            <small>{{$item}}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>主页</a></li>
            <li><a href="#">{{$category }}</a></li>
            <li class="active">{{$item}}</li>
        </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">


                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{$item}}</h3>
                    </div>

                    <div class="box-body">

                        <p id="media_manage_upload"></p>
                        <p class="help-block">支持多文件上传。</p>
                        <p class="help-block">最大上传文件大小：64 MB。</p>
                        <table class="table table-bordered">
                            <tbody>

                            <tr>
                                <td>  <div class="media_manage_upload_img">
                                        <img src="/public/upload/images/meida-default.jpg" title="" alt="Product Image">

                                    </div></td>
                                <td>文件名</td>
                                <td>
                                   10MB
                                </td>
                                <td>  <button type="button" class="btn btn-primary btn-xs btn-flat" data-toggle="modal"
                                              data-target="#admin_user_group_all_edit_modal" ng-click="edit(x)">编辑
                                    </button></td>
                            </tr>


                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>

    </section>

</div>

<script>
    $('#media_manage_upload').uploadify({

        'swf': '/public/plugins/uploadify/uploadify.swf',//指定swf文件
        'uploader': '/admin/manage/file_manage/media_manage_upload',//后台处理的页面+ '?postTitle=' + 'post_title' + '&type=' + 'images' + '&key=' + 'post_img'
        'method': 'post',
        'formData': {
            '_token': "{{csrf_token()}}"
        },
        'buttonText': '选择文件',//按钮显示的文字
        'buttonClass': 'uploadify-btn-primary',//按钮显示的文字
        'width': 66,//显示的高度和宽度，默认 height 30；width 120
        'height': 30,//显示的高度和宽度，默认 height 30；width 120
        //  'fileTypeDesc': 'Image Files',//上传文件的类型  默认为所有文件    'All Files'  ;  '*.*'
        'fileTypeExts': '*.gif; *.jpg; *.png;*.zip;*.rar;*.pdf;',//允许上传的文件后缀
        'fileSizeLimit': '64MB',//上传文件大小限制
        'auto': true,//选择文件后自动上传
        'multi': true,//设置为true将允许多文件上传

        'onUploadSuccess': function (file, data, response) {//上传成功的回调
            console.log(file);
            console.log(data);
            console.log(response);
        },
        //
        // 'onComplete': function(event, queueID, fileObj, response, data) {//当单个文件上传完成后触发
        //   //event:事件对象(the event object)
        //   //ID:该文件在文件队列中的唯一表示
        //   //fileObj:选中文件的对象，他包含的属性列表
        //   //response:服务器端返回的Response文本，我这里返回的是处理过的文件名称
        //   //data：文件队列详细信息和文件上传的一般数据
        //   alert("文件:" + fileObj.name + " 上传成功！");
        // },
        //
        // 'onUploadError' : function(file, errorCode, errorMsg, errorString) {//上传错误
        //   alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
        // },
        //
        // 'onError': function(event, queueID, fileObj) {//当单个文件上传出错时触发
        //   alert("文件:" + fileObj.name + " 上传失败！");
        // }


    });
</script>
@include('admin.footer')