# Plugin-SpecList

<ul>
<li>List files to be render with plugin readme/yml.</li>
<li>Items listed in table and item open in new window.</li>
</ul>

<a name="key_0"></a>

## Settings

<pre><code>plugin_modules:
  spec:
    plugin: 'spec/list'
    settings:</code></pre>
<p>Admin layout (optional).</p>
<pre><code>      admin_layout: /theme/[theme]/layout/main_bs4.yml</code></pre>
<p>Item path.</p>
<pre><code>      item: '/../buto_data/theme/[theme]/plugin_spec_list.yml'</code></pre>

<a name="key_1"></a>

## plugin_spec_list.yml

<p>Items.</p>
<pre><code>item:
  -</code></pre>
<p>Name and path.</p>
<pre><code>    name: Invoice
    path: /plugin/invoice/spec/data/spec.yml </code></pre>
<p>Save to readme file (optional).</p>
<pre><code>    save: /plugin/invoice/spec/readme.md </code></pre>

