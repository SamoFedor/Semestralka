const startButton =document.getElementById('start-btn')
const nextButton =document.getElementById('next-btn')
const questionContainerElement = document.getElementById('question-container')
startButton.addEventListener('click',startQuizz)
let currentIndexQuestion
let shuffledQuestion
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')


function startQuizz() {
    startButton.classList.add('hide')
    shuffledQuestion = questions.sort((() =>Math.random()- .5))
    currentIndexQuestion = 0
    questionContainerElement.classList.remove('hide')
    setNextQuestion()
}
function setNextQuestion() {
    reset()
    showQuestion(shuffledQuestion[currentIndexQuestion])
}
function showQuestion(question) {
    questionElement.innerText = question.question
    questions.answer.forEach(answer =>
    {const button = document.createElement('button')
    button.innerText =answer.text
        button.classList.add('btn')
        if(answer.correct) {
            button.dataset.correct = answer.correct
        }
        button.addEventListener('click',selectAnswer)
        answerButtonsElement.appendChild(button)
    })
}
function reset() {
    nextButton.classList.add('hide')
    while (answerButtonsElement.firstChild) {
        answerButtonsElement.removeChild
        (answerButtonsElement.firstChild)
    }
}
function selectAnswer(e) {


}
const questions = [{question: 'Do you like basketball?',
                    answer: [
                        { text: 'Yes', correct: true},
                        {
                          text: 'No', correct: false},
                    ]}]