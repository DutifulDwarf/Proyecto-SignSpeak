const socket = io('http://localhost:3000');

// Function to send a message
function sendMessage() {
    const input = document.getElementById('chat-input');
    const message = input.value;
    if (message.trim() !== '') {
        socket.emit('chat message', { type: 'text', content: message });
        input.value = ''; // Clear input after sending
    }
}

// Event listener for the "Send" button
document.querySelector('.chat-input button').addEventListener('click', function() {
    sendMessage();
});

// Event listener for the Enter key in the input field
document.getElementById('chat-input').addEventListener('keydown', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // Prevent the default action (new line in textarea)
        sendMessage();
    }
});

// Function to handle file uploads
function sendFile() {
    const fileInput = document.getElementById('file-input');
    const file = fileInput.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(event) {
            const fileContent = event.target.result;
            socket.emit('chat message', {
                type: file.type.startsWith('image/') ? 'image' : 'file',
                content: fileContent,
                name: file.name
            });
        };
        reader.readAsDataURL(file);
        fileInput.value = ''; // Clear the input after sending
    }
}

// Function to display incoming messages
socket.on('chat message', function(msg) {
    const messages = document.getElementById('chat-messages');
    const messageElement = document.createElement('div');
    messageElement.classList.add('chat-message');

    if (msg.type === 'text') {
        messageElement.innerHTML = '<p>' + msg.content + '</p>'; // No need for emojione.toImage here
    } else if (msg.type === 'image') {
        messageElement.innerHTML = '<img src="' + msg.content + '" alt="Imagen" class="chat-image">';
    } else if (msg.type === 'file') {
        messageElement.innerHTML = `
            <div class="file-message">
                <i class="mdi mdi-file-document-outline"></i>
                <span>${msg.name}</span>
                <button class="file-download-button" onclick="window.open('${msg.content}', '_blank')">
                    <i class="mdi mdi-arrow-down-bold-circle-outline"></i>
                </button>
            </div>`;
    }

    messages.appendChild(messageElement);
    messages.scrollTop = messages.scrollHeight;
});

// Emoji picker functionality
function toggleEmojiPicker() {
    const picker = document.getElementById('emoji-picker');
    picker.style.display = picker.style.display === 'none' || picker.style.display === '' ? 'block' : 'none';
}

// Add emoji to the input field
document.getElementById('emoji-picker').addEventListener('click', function(event) {
    if (event.target && event.target.classList.contains('emoji')) {
        const emoji = event.target.dataset.emoji;
        const input = document.getElementById('chat-input');
        input.value += emoji;
        toggleEmojiPicker(); // Close the picker after selecting an emoji
    }
});

// Load emojis into the picker
function loadEmojis() {
    const picker = document.getElementById('emoji-picker');
    // Example emojis, replace with actual data if needed
    const emojis = [
        '😊', '😂', '😍', '😢', '😎', '👍', '👎', '👏', '🎉', '💔', '❤️', '🔥', '✨', '💯', '🎂', '🎁',
        '🎈', '🌟', '🏆', '🚀', '🐶', '🐱', '🐭', '🐹', '🐰', '🦊', '🐳', '🦄', '🌸', '🌹', '🌺', '🌻', '🌼'
    ];
    let html = '';
    emojis.forEach(emoji => {
        html += `<span class="emoji" data-emoji="${emoji}">${emoji}</span>`;
    });
    picker.innerHTML = html;
}

// Initialize emoji picker
document.addEventListener('DOMContentLoaded', function() {
    loadEmojis();
    document.getElementById('emoji-button').addEventListener('click', function() {
        toggleEmojiPicker();
    });
});
