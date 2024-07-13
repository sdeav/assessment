@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Programming Assessment Questions</h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <a href="{{route('question_1')}}" class="question-link">
                <i class="fas fa-code question-icon"></i>
                Question 1: Create a Bootstrap Form
            </a>
            <a href="{{route('question_2')}}" class="question-link">
                <i class="fas fa-database question-icon"></i>
                Question 2: Regular Expressions Transformation
            </a>
            <a href="{{route('question_3')}}" class="question-link">
                <i class="fas fa-js question-icon"></i>
                Question 3: JavaScript Conditional Completion
            </a>
            <a href="{{route('question_4')}}" class="question-link">
                <i class="fas fa-cogs question-icon"></i>
                Question 4: Laravel Query Builder
            </a>
            <a href="{{route('question_5')}}" class="question-link">
                <i class="fas fa-bug question-icon"></i>
                Question 5: PHP Code Troubleshooting
            </a>
        </div>
    </div>
@endsection
