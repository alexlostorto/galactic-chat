<style>
    #submit-area {
        position: relative;
        box-shadow: 0 0 60px 50px black; /* Horizontal offset, Vertical offset, Blur radius, Color (fully dark) */
    }

    #submit-area::before {
        content: '';
        position: absolute;
        top: 0;
        z-index: -1;
        width: 17rem;
        height: 12rem;
        border: 2px solid black;
        background-color: black;
    }

    #message-input {
        width: 16rem;
        height: 3.8rem;
        padding: 0.5rem 1rem;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        border: 2px solid white;
        border-bottom: none;
        background-color: black;
        color: white;
    }

    #message-input:focus-visible {
        outline: none;
    }

    /* Style the placeholder text */
    #message-input::-webkit-input-placeholder {
        /* Webkit browsers (Chrome, Safari) */
        text-align: center; /* Center text horizontally */
        vertical-align: middle; /* Center text vertically */
        color: white; /* Adjust the color changing this value */
        opacity: 0.8; /* Adjust the opacity changing this value */
    }
    #message-input:-moz-placeholder {
        /* Firefox 18- */
        text-align: center;
        vertical-align: middle;
        color: white;
        opacity: 0.8;
    }
    #message-input::-moz-placeholder {
        /* Firefox 19+ */
        text-align: center;
        vertical-align: middle;
        color: white;
        opacity: 0.8;
    }
    #message-input:-ms-input-placeholder {
        /* IE */
        text-align: center;
        vertical-align: middle;
        color: white;
        opacity: 0.8;
    }

    #submit-button {
        width: 16rem;
        height: 2.5rem;
        border-bottom-left-radius: 12px;
        border-bottom-right-radius: 12px;
        border: 2px solid white;
        background-color: white;
    }

    #submit-button:hover {
        background-color: black;
        color: white;
    }
</style>

<form action="/galactic-chat/scripts/send-message.php" method="POST" id="submit-area" class="d-flex flex-column justify-content-center align-items-center my-4">
    <input id="message-input" type="text" name="message" placeholder="Type message here..." required>
    <input type="hidden" id="date-input" name="date" value="00-00-00 00:00:00">
    <input type="submit" id="submit-button" value="Submit">
</form>

<script>

function getCurrentDateTime() {
    const now = new Date();
    
    // Get date components
    const year = String(now.getUTCFullYear()).substring(2);
    const month = String(now.getUTCMonth() + 1).padStart(2, '0'); // Month is zero-based
    const day = String(now.getUTCDate()).padStart(2, '0');
    
    // Get time components
    const hours = String(now.getUTCHours()).padStart(2, '0');
    const minutes = String(now.getUTCMinutes()).padStart(2, '0');
    const seconds = String(now.getUTCSeconds()).padStart(2, '0');
    
    // Assemble the date-time string
    const dateTimeString = `${day}-${month}-${year} ${hours}:${minutes}:${seconds}`;
    
    return dateTimeString;
}

function createMessage(message, small_message) {
    // Create the outer div element
    const messageDiv = document.createElement('div');
    messageDiv.classList.add('message', 'my-4');

    // Create the paragraph element for the message variable
    const messageParagraph = document.createElement('p');
    messageParagraph.classList.add('py-2', 'px-4', 'my-0', 'text-center');
    messageParagraph.textContent = message;

    // Create the span element for the small_message variable
    const smallMessageSpan = document.createElement('span');
    smallMessageSpan.classList.add('my-1');
    smallMessageSpan.textContent = small_message;

    // Append the paragraph and span elements to the outer div
    messageDiv.appendChild(messageParagraph);
    messageDiv.appendChild(smallMessageSpan);

    return messageDiv;
}

document.getElementById("submit-area").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the default form submission

    const date = getCurrentDateTime();
    const dateInput = document.getElementById("date-input");
    const messageInput = document.getElementById("message-input");

    dateInput.value = date;

    // Perform a POST request using Fetch API
    fetch("/galactic-chat/scripts/send-message.php", {
        method: "POST",
        body: new FormData(this) // Serialize the form data
    })
    .then(response => {
        // Handle the response if needed
    })
    .catch(error => {
        // Handle any errors
    });

    
    document.querySelector('.messages').children[0].insertAdjacentElement("afterend", createMessage(messageInput.value, date));

    messageInput.value = "";

});

</script>