<!-- resources/views/quizzes/create.blade.php -->
<h1>Create New Quiz</h1>

<form method="post" action="{{ route('quizzes.store') }}">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <br>
    <label for="description">Description:</label>
    <textarea name="description" required></textarea>
    <br>
    <button type="submit">Create Quiz</button>
</form>