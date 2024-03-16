const express = require('express');
const bodyParser = require('body-parser');
const natural = require('natural');

const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static('public'));

// Sample responses from the legal chatbot
const legalResponses = {
  greeting: "Hello! How can I assist you with legal matters?",
  farewell: "Thank you for using our legal chatbot. Have a great day!",
  default: "I'm sorry, I didn't understand that. How may I assist you with legal questions?"
};

const classifier = new natural.BayesClassifier();

// Train the classifier with sample legal intents
classifier.addDocument('en','What are my legal rights?', 'legal_rights');
classifier.addDocument('How can I get legal help?', 'legal_help');
classifier.addDocument('Tell me about legal contracts.', 'legal_contracts');
classifier.addDocument('What is the process for filing a lawsuit?', 'file_lawsuit');
classifier.addDocument('what is your name', 'jytfs');
classifier.addDocument('unn peru enna', 'tamil');

// language ==== English 

classifier.addDocument('neighbour dog bite me what can i do', 'article_1');

// language ==== Tamil
classifier.addDocument('Pakkattu vittuu nay ennai katittatu naan enna ceyya ventum', 'article_1_tamil');
// language ==== Hindi
classifier.addDocument('padosee kute ne mujhe kaat liya, main kya karoon?', 'article_1_hindi');



// classifier training
classifier.train();


// classifier.train().then(async()=>{
//   classifier.save();
// })


app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

app.post('/chat', (req, res) => {
  const userMessage = req.body.message.trim();

  // Classify the user's input using the trained NLP classifier
  const intent = classifier.classify(userMessage.toLowerCase());

  // Respond based on the classified intent
  let botResponse;
  switch (intent) {
    case 'legal_rights':
      botResponse = 'welcome to the legal rights....';
      break;
    case 'legal_help':
      botResponse = 'You can seek legal help by...';
      break;
    case 'legal_contracts':
      botResponse = 'Legal contracts typically involve...';
      break;
    case 'file_lawsuit':
      botResponse = 'To file a lawsuit, you need to...';
      break;
    case 'jytfs':
      botResponse = 'My name is legalbot';
      break;
    case 'tamil':
      botResponse = 'My name is தினேஷ்';
      break;
    case 'article_1':
      botResponse = 'which has the exact same wordings as Section 291 of the BNS, imposed a fine of upto Rs 1,000, along with imprisonment upto six months.';
      break;
    case 'article_1_tamil':
      botResponse = 'பிஎன்எஸ் பிரிவு 291-ன் அதே வார்த்தைகளைக் கொண்டிருப்பதால், ஆறு மாதங்கள் வரை சிறைத்தண்டனையுடன் ரூ.1,000 வரை அபராதம் விதிக்கப்பட்டது..';
      break;
    case 'article_1_hindi':
      botResponse = 'जिसमें बिल्कुल बीएनएस की धारा 291 के समान शब्द हैं, जिसमें छह महीने तक की कैद के साथ 1,000 रुपये तक का जुर्माना लगाया गया है।';
      break;
    default:
      botResponse = legalResponses.default;
      break;
  }

  res.json({ userMessage, botResponse });
});

app.listen(port, () => {
  console.log(`Server listening on port ${port}`);
});
