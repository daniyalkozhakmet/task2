const contact_us = document.querySelector(".btn-primary");
const message = document.querySelector("#message");
contact_us.addEventListener("click", () => {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "main.php");
  xhr.setRequestHeader("Content-Type", "application/json");

  xhr.onreadystatechange = function () {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      const response = JSON.parse(xhr.response);
      if (response.error) {
        message.innerText = response.error;
      } else {
        message.innerText = response.data.text1;
      }
    }
  };
  let id;

  if (message.textContent == "Helping you thrive in all areas of life") {
    id = 2;
  } else {
    id = 1;
  }
  xhr.send(JSON.stringify({ id }));
});
