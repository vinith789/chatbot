document.addEventListener('DOMContentLoaded', function () {
  const chatMessages = document.getElementById('chat-messages');
  const userInput = document.getElementById('user-input');

  function sendMessage(message, sender) {
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message', sender);
    if(sender === "user")
    {
      messageDiv.innerHTML = `<div style="background: rgba(0,0,0,0.1); padding: 10px; border-radius: 10px; margin-top: 4px;">
                                <p style="text-align: right; margin-left: 10px;">
                                  ${message}
                                </p>
                              </div>`;
    }
    else
    {
      timeOut();
      messageDiv.innerHTML = `<div style="background: rgba(0,0,0,0.3); padding: 10px; border-radius: 10px; margin-top: 4px;">
                                <p style="text-align: left; margin-right: 10px; ">
                                  ${message}
                                </p>
                              </div>`;
    }
    
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

  function timeOut(){
    setTimeout(1000);
  }
  userInput.addEventListener('keyup', function (event) {
    if (event.key === 'Enter') {
      processUserInput();
    }
  });
  });
