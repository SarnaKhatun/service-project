// Global variables
var formId; // Store the created form ID
var formFields = []; // Store the form fields dynamically

// Function to initialize Google API client
function initClient() {
    gapi.client.init({
        apiKey: 'YOUR_API_KEY',
        discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/forms/v1/rest'],
    }).then(function() {
        console.log('API client initialized');
    }, function(error) {
        console.log('API client initialization error', error);
    });
}

// Function to create a new Google Form
function createForm() {
    gapi.load('client', initClient);
    gapi.client.forms.newForm().then(function(response) {
        var form = response.result;
        formId = form.formId; // Store the form ID
        console.log('Form created with ID:', formId);
        addQuestion('text', 'What is your name?'); // Example: Add a text question
        addQuestion('multipleChoice', 'What is your favorite color?', ['Red', 'Blue', 'Green']); // Example: Add a multiple-choice question
    }, function(error) {
        console.log('Error creating form:', error);
    });
}

// Function to add a question to the form
function addQuestion(questionType, questionText, choices) {
    var request = {
        'formId': formId,
        'question': {
            'type': questionType,
            'title': questionText
        }
    };

    if (questionType === 'multipleChoice' && choices && choices.length > 0) {
        request.question['choices'] = choices.map(function(choice) {
            return { 'text': choice };
        });
    }

    gapi.client.forms.questions.create(request).then(function(response) {
        var question = response.result;
        formFields.push(question); // Store the added question
        console.log('Question added:', question);
    }, function(error) {
        console.log('Error adding question:', error);
    });
}
