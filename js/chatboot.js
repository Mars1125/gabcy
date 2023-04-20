const messageInput = document.getElementById('message-input');
const messages = document.getElementById('messages');
const sendButton = document.getElementById('send-button');

sendButton.addEventListener('click', sendMessage);

function addMessage(sender, message, isUserMessage) {
    const messageElement = document.createElement('div');
    messageElement.className = sender === 'Tú' ? 'message user-message' : 'message chatbot-message';
    messageElement.textContent = message;
    messages.appendChild(messageElement);
    messages.scrollTop = messages.scrollHeight;
}

function sendMessage() {
    const message = messageInput.value;

    // Agrega el mensaje del usuario a la ventana de chat
    addMessage('Tú', message, true);

    // Envía el mensaje del usuario al servidor
    const formData = new FormData();
    formData.append('message', message);

    fetch('../chatbot.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(responseText => {
        // Agrega la respuesta del chatbot a la ventana de chat
        addMessage('Chatbot', responseText, false);
    })
    .catch(error => console.error('Error:', error));

    messageInput.value = '';
}


