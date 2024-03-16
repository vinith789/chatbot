document.addEventListener('DOMContentLoaded', function () {
  const chatMessages = document.getElementById('chat-messages');
  const userInput = document.getElementById('user-input');

  function sendMessage(message, sender) {
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message', sender);
    messageDiv.innerHTML = `<p>${message}</p>`;
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
  }

  function processUserInput() {
    const userMessage = userInput.value.trim();
    if (userMessage !== '') {
      sendMessage(userMessage, 'user');

      // Send user message to the server
      fetch('/chat', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: `message=${encodeURIComponent(userMessage)}`
      })
        .then(response => response.json())
        .then(data => {
          sendMessage(data.botResponse, 'bot');
        })
        .catch(error => console.error('Error:', error));

      userInput.value = '';
    }
  }

  userInput.addEventListener('keyup', function (event) {
    if (event.key === 'Enter') {
      processUserInput();
    }
  });
});
