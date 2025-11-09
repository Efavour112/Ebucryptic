
<div class="col-lg-3">
    <div class="quiz-container sticky-top" style="top: 100px;">
        <h4 class="mb-4">Quiz: Test Your Crypto Knowledge</h4>

        <div id="quiz-content">
            <div class="quiz-question" id="question-text">
                Who created Bitcoin under the pseudonym Satoshi Nakamoto?
            </div>

            <div class="progress mt-3 mb-3">
                <div class="progress-bar" role="progressbar" style="width: 20%">1 of 5</div>
            </div>

            <div class="quiz-options">
                <div class="quiz-option" data-correct="false">Vitalik Buterin</div>
                <div class="quiz-option" data-correct="true">Unknown person or group</div>
                <div class="quiz-option" data-correct="false">Elon Musk</div>
                <div class="quiz-option" data-correct="false">Changpeng Zhao</div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <button class="btn btn-outline-secondary" id="prev-btn" disabled>
                    <i class="bi bi-arrow-left me-1"></i> Previous
                </button>
                <button class="btn btn-primary" id="next-btn">
                    Next <i class="bi bi-arrow-right ms-1"></i>
                </button>
            </div>
        </div>

        <div id="quiz-results" class="text-center" style="display: none;">
            <h4 class="mb-3">Quiz Complete!</h4>
            <div class="display-4 text-primary mb-3" id="final-score">4/5</div>
            <p class="mb-4" id="result-message">Excellent! You're ready to explore the crypto world.</p>
            <button class="btn btn-outline-primary" id="restart-btn">Restart Quiz</button>
        </div>
    </div>
</div>

<!-- Custom JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Quiz functionality
        const quizOptions = document.querySelectorAll('.quiz-option');
        const nextBtn = document.getElementById('next-btn');
        const prevBtn = document.getElementById('prev-btn');
        const questionText = document.getElementById('question-text');
        const quizContent = document.getElementById('quiz-content');
        const quizResults = document.getElementById('quiz-results');
        const finalScore = document.getElementById('final-score');
        const resultMessage = document.getElementById('result-message');
        const restartBtn = document.getElementById('restart-btn');
        
        let currentQuestion = 0; // Changed to 0-based indexing
        const totalQuestions = 5;
        let selectedOption = null;
        let score = 0;
        let userAnswers = new Array(totalQuestions).fill(null);
        
        // Sample questions data
        const questions = [
            {
                question: "What is cryptocurrency?",
                options: [
                    { text: "Physical money", correct: false },
                    { text: "Government money", correct: false },
                    { text: "Digital money", correct: true },
                    { text: "none of the above", correct: false }
                ]
            },
            {
                question: "What is the maximum supply of Bitcoin that will ever exist?",
                options: [
                    { text: "10 million", correct: false },
                    { text: "50 million", correct: false },
                    { text: "21 million", correct: true },
                    { text: "Unlimited supply", correct: false }
                ]
            },
            {
                question: "Who created Bitcoin?",
                options: [
                    { text: "Vitalik Buterin", correct: false },
                    { text: "Satoshi Nakamoto", correct: true },
                    { text: "Elon Musk", correct: false },
                    { text: "The US Government", correct: false }
                ]
            },
            {
                question: "What technology does Bitcoin use to secure transactions?",
                options: [
                    { text: "Artificial Intelligence", correct: false },
                    { text: "Blockchain", correct: true },
                    { text: "Cloud Computing", correct: false },
                    { text: "Quantum Computing", correct: false }
                ]
            },
            {
                question: "What is the smallest unit of Bitcoin called?",
                options: [
                    { text: "Wei", correct: false },
                    { text: "Satoshi", correct: true },
                    { text: "Gwei", correct: false },
                    { text: "Finney", correct: false }
                ]
            }
        ];
        
        // Initialize the first question
        loadQuestion(currentQuestion);
        
        // Add event listeners to quiz options
        quizOptions.forEach(option => {
            option.addEventListener('click', function() {
                // Remove selected class from all options
                quizOptions.forEach(opt => {
                    opt.classList.remove('selected');
                });
                
                // Add selected class to clicked option
                this.classList.add('selected');
                selectedOption = this;
            });
        });
        
        // Next button functionality
        nextBtn.addEventListener('click', function() {
            if (!selectedOption) {
                alert('Please select an answer before proceeding.');
                return;
            }
            
            // Store user's answer
            userAnswers[currentQuestion] = selectedOption.getAttribute('data-correct') === 'true';
            
            // Check if answer is correct
            const isCorrect = selectedOption.getAttribute('data-correct') === 'true';
            
            if (isCorrect) {
                score++;
                selectedOption.classList.add('correct');
            } else {
                selectedOption.classList.add('incorrect');
                // Highlight correct answer
                quizOptions.forEach(option => {
                    if (option.getAttribute('data-correct') === 'true') {
                        option.classList.add('correct');
                    }
                });
            }
            
            // Disable buttons during transition
            nextBtn.disabled = true;
            prevBtn.disabled = true;
            
            // Wait a moment before moving to next question
            setTimeout(() => {
                currentQuestion++;
                
                if (currentQuestion < totalQuestions) {
                    loadQuestion(currentQuestion);
                    
                    // Update progress bar
                    const progressBar = document.querySelector('.progress-bar');
                    const progressPercent = ((currentQuestion + 1) / totalQuestions) * 100;
                    progressBar.style.width = `${progressPercent}%`;
                    progressBar.textContent = `${currentQuestion + 1} of ${totalQuestions}`;
                    
                    // Enable/disable navigation buttons
                    prevBtn.disabled = currentQuestion === 0;
                    
                    if (currentQuestion === totalQuestions - 1) {
                        nextBtn.textContent = 'Finish Quiz';
                    }
                } else {
                    // Quiz finished, show results
                    showResults();
                }
                
                // Re-enable buttons
                nextBtn.disabled = false;
                prevBtn.disabled = currentQuestion === 0;
            }, 1500);
        });
        
        // Previous button functionality
        prevBtn.addEventListener('click', function() {
            if (currentQuestion > 0) {
                currentQuestion--;
                loadQuestion(currentQuestion);
                
                // Update progress bar
                const progressBar = document.querySelector('.progress-bar');
                const progressPercent = ((currentQuestion + 1) / totalQuestions) * 100;
                progressBar.style.width = `${progressPercent}%`;
                progressBar.textContent = `${currentQuestion + 1} of ${totalQuestions}`;
                
                // Enable/disable navigation buttons
                prevBtn.disabled = currentQuestion === 0;
                nextBtn.textContent = currentQuestion === totalQuestions - 1 ? 'Finish Quiz' : 'Next';
                
                // Restore previous selection if exists
                if (userAnswers[currentQuestion] !== null) {
                    const previousAnswer = userAnswers[currentQuestion];
                    quizOptions.forEach(option => {
                        if (option.getAttribute('data-correct') === 'true' && previousAnswer) {
                            option.classList.add('selected');
                            selectedOption = option;
                        }
                    });
                }
            }
        });
        
        // Restart button functionality
        restartBtn.addEventListener('click', function() {
            currentQuestion = 0;
            score = 0;
            userAnswers = new Array(totalQuestions).fill(null);
            selectedOption = null;
            
            // Reset UI
            quizContent.style.display = 'block';
            quizResults.style.display = 'none';
            
            // Reset progress bar
            const progressBar = document.querySelector('.progress-bar');
            progressBar.style.width = '20%';
            progressBar.textContent = '1 of 5';
            
            // Reset buttons
            prevBtn.disabled = true;
            nextBtn.textContent = 'Next';
            nextBtn.disabled = false;
            
            // Load first question
            loadQuestion(currentQuestion);
        });
        
        // Function to load a question
        function loadQuestion(questionIndex) {
            const questionData = questions[questionIndex];
            questionText.textContent = questionData.question;
            
            // Update options
            quizOptions.forEach((option, index) => {
                option.textContent = questionData.options[index].text;
                option.setAttribute('data-correct', questionData.options[index].correct);
                option.classList.remove('selected', 'correct', 'incorrect');
            });
            
            // Reset selected option
            selectedOption = null;
        }
        
        // Function to show results
        function showResults() {
            quizContent.style.display = 'none';
            quizResults.style.display = 'block';
            
            // Update score in results
            finalScore.textContent = `${score}/${totalQuestions}`;
            
            // Update result message based on score
            if (score === totalQuestions) {
                resultMessage.textContent = "Perfect! You're a crypto expert!";
            } else if (score >= totalQuestions * 0.7) {
                resultMessage.textContent = "Great job! You have solid crypto knowledge.";
            } else if (score >= totalQuestions * 0.5) {
                resultMessage.textContent = "Good effort! Review the material and try again.";
            } else {
                resultMessage.textContent = "Keep learning! Review the basics and try again.";
            }
        }
    });
</script>

<style>
.quiz-container {
    /* background: #f8f9fa; */
    border-radius: 10px;
    border: 1px solid #f8f9fa;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.quiz-question {
    font-weight: 600;
    margin-bottom: 20px;
    font-size: 1.1rem;
}

.quiz-option {
    padding: 12px 15px;
    margin-bottom: 10px;
    border: 2px solid #e9ecef;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.quiz-option:hover {
    background: pink;
    border-color: #007bff;
}

.quiz-option.selected {
    border-color: #f8f9fa;
    /* background: #e7f3ff; */
}

.quiz-option.correct {
    border-color: red;
    /* background: #d4edda; */
}

.quiz-option.incorrect {
    border-color: #dc3545;
    background: #f8d7da;
}

.progress {
    height: 8px;
}

.progress-bar {
    transition: width 0.5s ease;
}
</style>