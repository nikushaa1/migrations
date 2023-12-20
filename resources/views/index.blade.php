<!-- resources/views/quizzes/index.blade.php -->
<h1>Quizzes</h1>

@foreach ($quizzes as $quiz)
    <p>
        <strong>{{ $quiz->title }}</strong>
        <br>
        {{ $quiz->description }}
        <br>
        <a href="{{ route('quizzes.edit', $quiz->id) }}">Edit</a>
    </p>
@endforeach

<a href="{{ route('quizzes.create') }}">Create New Quiz</a>




<!-- resources/views/quizzes/index.blade.php -->
<h1>Quizzes</h1>

@foreach ($quizzes as $quiz)
    <p>
        <strong>Title:</strong> {{ $quiz->title }}
        <br>
        <strong>Description:</strong> {{ $quiz->description }}
        <br>
        <a href="{{ route('quizzes.edit', $quiz->id) }}">Edit</a>
    </p>
@endforeach

<a href="{{ route('quizzes.create') }}">Create New Quiz</a>







