@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Regular Expressions Transformation</h1>
    <div class="card">
        <div class="card-body">
            <h2>Methodology:</h2>
            <ol>
                <li>Define the HTML content.</li>
                <li>Define the regular expression pattern: <code>__([a-zA-Z0-9_]+)__</code>.</li>
                <li>Define the replacement pattern: <code>[[$1]]</code>.</li>
                <li>Use the <code>replace</code> method in JavaScript or <code>preg_replace</code> method in PHP with the regular expression to transform <code>__variable__</code> to <code>[[variable]]</code>.</li>
                <li>Output the transformed content.</li>
            </ol>

            <h3>Example of transforming <code>__variable__</code> to <code>[[variable]]</code> using regular expression in JavaScript and PHP:</h3>

            <h4>JavaScript Code:</h4>
            <pre>
<code>
// Define template
let content = `
&lt;template id="option-template"&gt;
   &lt;option value="__value__" class="{{ __('option.class') }}"&gt;__label__&lt;/option&gt;
   &lt;li class="__name__"&gt;__value__&lt;/li&gt;
&lt;/template&gt;
`;

// Define the regular expression and replacement
let pattern = /__([a-zA-Z0-9_]+)__/g;
let replacement = '[[$1]]';

// Replace content
content = content.replace(pattern, replacement);

// Output the transformed content
console.log(content);
</code>
                </pre>

            <h4>PHP Code:</h4>
            <pre>
<code>
&lt;?php

// Define template
$content = &lt;&lt;&lt;HTML
&lt;template id="option-template"&gt;
   &lt;option value="__value__" class="{{ __('option.class') }}"&gt;__label__&lt;/option&gt;
   &lt;li class="__name__"&gt;__value__&lt;/li&gt;
&lt;/template&gt;
HTML;

// Define the regular expression and perform the replacement
$pattern = '/__([a-zA-Z0-9_]+)__/';
$replacement = '[[$1]]';

// Replace content
$content = preg_replace($pattern, $replacement, $content);

// Output the transformed content
echo $content;
?>
</code>
                </pre>
        </div>
    </div>
@endsection
