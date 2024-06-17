@include('partials.usernav')


<div class="container">
    <div class="messages" id="messages">
        <div class="message bot-message">
            <span>Welcome to the chat!</span>
        </div>
    </div>
    <input type="text" id="user-input" placeholder="Type your message...">
    <input type="file" id="image-input">
    <button class="button" onclick="sendMessage()">Send</button>
</div>

<script>
function sendMessage() {
    var userInput = document.getElementById("user-input").value;
    var imageInput = document.getElementById("image-input").files[0];
    var messagesDiv = document.getElementById("messages");

    if (userInput.trim() === "" && !imageInput) {
        return;
    }

    var userMessageDiv = document.createElement("div");
    userMessageDiv.classList.add("message", "user-message");

    var userMessageContent = document.createElement("span");
    userMessageContent.textContent = userInput;

    userMessageDiv.appendChild(userMessageContent);
    if (imageInput) {
        var image = document.createElement("img");
        image.src = URL.createObjectURL(imageInput);
        userMessageDiv.appendChild(image);
    }

    messagesDiv.appendChild(userMessageDiv);

    // Simulate bot reply (you can replace this with actual bot reply logic)
    setTimeout(function() {
        var botMessageDiv = document.createElement("div");
        botMessageDiv.classList.add("message", "bot-message");

        var botMessageContent = document.createElement("span");
        botMessageContent.textContent = "This is a bot reply.";

        botMessageDiv.appendChild(botMessageContent);

        messagesDiv.appendChild(botMessageDiv);

        // Scroll to the bottom of the messages
        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    }, 1000);

    // Clear input fields after sending message
    document.getElementById("user-input").value = "";
    document.getElementById("image-input").value = "";
}
</script>

@include('partials.footer')