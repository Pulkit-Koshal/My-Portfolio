const form = document.querySelector('#my-form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const messageInput = document.querySelector('#message');
const submitButton = document.querySelector('#submit');

submitButton.addEventListener('click', function(event) {
  event.preventDefault();
  const xhr = new XMLHttpRequest();
  xhr.open('POST', '/send-email.php');
  xhr.setRequestHeader('Content-Type', 'application/json');

  const data = {
    name: nameInput.value,
    email: emailInput.value,
    message: messageInput.value
  };

  const json = JSON.stringify(data);

  xhr.send(json);

  xhr.onload = function() {
    if (xhr.status === 200) {
      alert('Message sent successfully!');
      
      nameInput.value = '';
      emailInput.value = '';
      messageInput.value = '';
    } else {
      alert('Error sending message');
    }
  };
});
