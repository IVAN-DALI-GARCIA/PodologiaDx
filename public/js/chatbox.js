const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");
const chatbox = document.querySelector(".chatbox");

let userMessage;
const API_KEY = "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";

const createChatLi = (message, className) => {
  //Create a chat  const chatLi = document.createElement("li") passed and className;
  const chatLi = document.createElement("li");
  chatLi.classList.add("chat", className);
  let chatContent =
    className === "outgoing"
      ? `<p>${message}</p> `
      : `<span class="material-symbols-outlined">smart_toy</span><p>${message}</p>`;
  chatLi.innerHTML = chatContent;
  return chatLi;
};

const generateResponse = () => {
  const API_URL = "https://api.openai.com/v1/chat/completions";
  // "https://api.openai.com/v1/chat/completions";

  const requuestOptions = {
    method: "POST",
    headers: {
      Authorization: `Bearer ${API_KEY}`,
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      model: "gpt-3.5-turbo",
      messages: [
        {
          role: "user",
          content: userMessage,
        },
      ],
    }),
  };
  //Send POST request to OpenAI API, get response and append it to the chatbox.
  fetch(API_URL, requuestOptions)
    .then((res) => res.json())
    .then((data) => {
      console.log("data: ", data);
      // const botMessage = data.choices[0].text.trim();
      // chatbox.appendChild(createChatLi(botMessage, "incoming"));
      // chatbox.scrollTop = chatbox.scrollHeight;
    })
    .catch((error) => console.log(error));
};

const handleChat = () => {
  userMessage = chatInput.value.trim();
  if (!userMessage) return;
  // Append the user's message to the chatbox
  chatbox.appendChild(createChatLi(userMessage, "outgoing"));
  setTimeout(() => {
    // Append the bot's message to the chatbox
    chatbox.appendChild(createChatLi("Procesando Respuesta...", "incoming"));
    generateResponse();
  }, 600);

  // console.log("userMessage: ", userMessage);
};
sendChatBtn.addEventListener("click", handleChat);
