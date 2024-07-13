@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Laravel Query Builder</h1>
    <div class="card">
        <div class="card-body">
            <h2>Explanation:</h2>
            <p>The problem with the original code is that the <code>orWhere</code> conditions aren't properly combined with the initial <code>where</code> condition. Because of this, the query might return more results than you want. Specifically, the <code>orWhere</code> conditions are applied to the whole query instead of being grouped together.</p>

            <h2>Solution:</h2>

            <h4>PHP Code:</h4>
            <pre>
<code>
&lt;?php
// Filter customers based on the 'mailing_list' parameter.
if ($request->has('mailing_list') && $request->mailing_list) {
    $customers->where('mailing_list', 1);
} else {
    $customers->where('mailing_list', 0);
}

// Group the search conditions using a nested query
$customers->where(function($query) use ($request) {
    $query->where('id', 'like', "%{$request->search}%")
        ->orWhere('company', 'like', "%{$request->search}%")
        ->orWhere('first_name', 'like', "%{$request->search}%")
        ->orWhere('last_name', 'like', "%{$request->search}%")
        ->orWhere('email', 'like', "%{$request->search}%");
});

$customers->paginate(8)->withQueryString();
?>
</code>
                </pre>
        </div>
    </div>
@endsection
