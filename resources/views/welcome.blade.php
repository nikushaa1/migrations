<!DOCTYPE html>
<html>
<head>
  <title>Quiz Form</title>
</head>
<body>
  <h1>Create/Update Quiz</h1>
  
  <form id="quizForm">
    <input type="hidden" id="quizId" name="quizId" value="">
    <label for="quizTitle">Quiz Title:</label>
    <input type="text" id="quizTitle" name="quizTitle"><br><br>
    
    <label for="quizDescription">Quiz Description:</label><br>
    <textarea id="quizDescription" name="quizDescription" rows="4" cols="50"></textarea><br><br>
    
    <button type="submit" id="submitBtn">Save Quiz</button>
  </form>

  <script>
    document.getElementById("quizForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the default form submission
      
      // Retrieve form values
      const quizId = document.getElementById("quizId").value;
      const quizTitle = document.getElementById("quizTitle").value;
      const quizDescription = document.getElementById("quizDescription").value;
      
      // Simulate sending data to the server (in real scenario, you'd use AJAX or fetch API)
      if (quizId) {
        // Update existing quiz
        console.log("Updating quiz with ID: ", quizId);
        console.log("Updated Title: ", quizTitle);
        console.log("Updated Description: ", quizDescription);
      } else {
        // Create a new quiz
        console.log("Creating a new quiz:");
        console.log("Title: ", quizTitle);
        console.log("Description: ", quizDescription);
      }
      
      // Reset form after submission
      document.getElementById("quizForm").reset();
    });
    
  </script>
</body>
</html>