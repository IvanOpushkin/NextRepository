<div id="file-example">
<pre class="brush: html notranslate"><code><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">name</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>myFile<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>file<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
</code></pre>
</div>

ADDITION ADDITION ADDITION ADDITION ADDITION

<p><iframe class="sample-code-frame" id="frame_file-example" width="650" height="60" src="https://yari-demos.prod.mdn.mozit.cloud/ru/docs/Web/HTML/Element/Input/file/_samples_/file-example" loading="lazy"></iframe></p>

<table class="properties">
 <tbody>
  <tr>
   <td><strong><a href="#value">Value</a></strong></td>
   <td><a href="/ru/docs/Web/API/DOMString"><code>DOMString</code></a> представляет собой путь до выбранного файла.</td>
  </tr>
  <tr>
   <td><strong>Действия</strong></td>
   <td><code><a href="/en-US/docs/Web/API/HTMLElement/change_event" title="Currently only available in English (US)" class="only-in-en-us">change (en-US)</a></code> и<code><a href="/en-US/docs/Web/API/HTMLElement/input_event" title="Currently only available in English (US)" class="only-in-en-us">input (en-US)</a></code></td>
  </tr>
  <tr>
   <td><strong>Поддерживаемые атрибуты</strong></td>
   <td><a href="/ru/docs/Web/HTML/Element/Input#attr-accept"><code>accept</code></a>, <a href="/ru/docs/Web/HTML/Element/Input#attr-multiple"><code>multiple</code></a>, <a href="/ru/docs/Web/HTML/Element/Input#attr-required"><code>required</code></a></td>
  </tr>
  <tr>
   <td><strong>IDL атрибуты</strong></td>
   <td><code>files</code> and <code>value</code></td>
  </tr>
  <tr>
   <td><strong>Методы</strong></td>
   <td><a class="only-in-en-us" title="Currently only available in English (US)" href="/en-US/docs/Web/API/HTMLInputElement/select"><code>select()</code> <span>(en-US)</span></a></td>
  </tr>
 </tbody>
</table></div><h2 id="value"><a href="#value" title="Permalink to Value">Value</a></h2><div><p>Атрибут <a href="/ru/docs/Web/HTML/Element/Input#attr-value"><code>value</code></a> элемента input содержит <a href="/ru/docs/Web/API/DOMString"><code>DOMString</code></a>, который представляет путь к выбранным файлам. Если пользователь выбрал несколько файлов, <code>value</code>&nbsp;представляет первый файл из списка. Остальные файлы можно определить используя <a class="page-not-created" title="Документация об этом ещё не написана; пожалуйста, поспособствуйте её написанию!"><code>HTMLInputElement.files</code></a> свойство элемента input.</p>

<div class="note notecard"><strong>Note:</strong>

<ol>
