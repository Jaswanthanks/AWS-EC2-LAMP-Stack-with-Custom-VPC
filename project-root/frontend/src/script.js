function getMessage() {
  fetch('http://YOUR-BACKEND-ALB-DNS/api/message')
    .then(res => res.json())
    .then(data => {
      document.getElementById('output').innerText = data.message;
    })
    .catch(err => console.error(err));
}
