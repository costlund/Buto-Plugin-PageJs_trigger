# Buto-Plugin-PageJs_trigger

<p>Log with javascript when user click a button.</p>
<ul>
<li>Include js in html head section</li>
<li>Add a page to theme page folder named as page_trigger.yml.</li>
<li>Then use plugin page/counter_v2 to log request to db (see this plugin documentation).</li>
<li>Then data in db can be used to create click reports.</li>
</ul>
<pre><code>onclick: PluginPageJs_trigger.trigger('follow_us_facebook');</code></pre>
<p>A request is sent to this page.</p>
<pre><code>/d/page_trigger/tag/follow_us_facebook

"d" is theme settings default_class.</code></pre>

<a name="key_0"></a>

## Widgets



<a name="key_0_0"></a>

### widget_include

<p>Include this widget in html head section.</p>

<a name="key_1"></a>

## Report

<pre><code>SELECT * 
FROM page_counter_v2_page 
where request_uri like '%/page_trigger/%'
order by created_at desc;</code></pre>

