@extends('layouts.app')

@section('content')
    <h1 class="mb-4">JavaScript Conditional Completion</h1>
    <div class="card">
        <div class="card-body">
            <h2>JavaScript Code:</h2>
            <pre>
<code>
const max_char = 42;

let items = [{name: 'abc'}, {name: null}, {name: 'defg'}, {name: 'hijklmnop'}, {name: 'qrs'}];

// Calculate total characters count. And this could have been done in other ways too
let total_chars_count = items.reduce((acc, item) => acc + (item.name?.length || 0), 0);

if(total_chars_count > max_char) {
    // main code
    console.log('Total characters count is greater than 42');
} else {
    // other code
    console.log('Total characters count is less than 42');
}
</code>
                </pre>
        </div>
    </div>
@endsection
