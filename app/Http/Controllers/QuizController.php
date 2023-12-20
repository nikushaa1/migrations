// QuizController.php

use App\Models\Quiz;

public function index()
{
    $quizzes = Quiz::all();
    return view('quizzes.index', compact('quizzes'));

}




