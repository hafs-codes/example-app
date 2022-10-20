<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{asset('/css/chat.css')}}">
</head>

@extends('navbar')

@section('content')

<style>


                  body {
  font: 15px arial, sans-serif;
  background-color: #d9d9d9;
  padding-top: 15px;
  padding-bottom: 15px;
}

#bodybox {
  margin: auto;
  margin-top:80px;
  max-width: 550px;
  font: 15px arial, sans-serif;
  background-color: white;
  border: 5px solid #007bff;
  padding-top: 20px;
  padding-bottom: 25px;
  padding-right: 25px;
  padding-left: 25px;
  box-shadow: 5px 5px 5px grey;
  border-radius: 15px;
}

#chatborder {
 
  background-color: white;
  border: 1px solid black;
  margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 20px;
  margin-right: 20px;
  padding-top: 10px;
  padding-bottom: 15px;
  padding-right: 20px;
  padding-left: 15px;
  border-radius: 15px;
}

.chatlog {
   font: 15px arial, sans-serif;
}

#chatbox {
  font: 17px arial, sans-serif;
  height: 22px;
  width: 100%;
}

h1 {
  margin: auto;
}

pre {
  background-color: #f0f0f0;
  margin-left: 20px;
}
button{
  padding:3px;
  
}
input{
  border: black;
}
                </style>
</head>
<body>


  <div id='bodybox' class="wrapper">
                  
  <div id='chatborder' >

  
    <p id="chatlog7" class="chatlog">&nbsp;</p>
    <p id="chatlog6" class="chatlog">&nbsp;</p>
    <p id="chatlog5" class="chatlog">&nbsp;</p>
    <p id="chatlog4" class="chatlog">&nbsp;</p>
    <p id="chatlog3" class="chatlog">&nbsp;</p>
    <p id="chatlog2" class="chatlog">&nbsp;</p> 
    <p id="chatlog1" class="chatlog">&nbsp;</p>

    <input type="text" name="chat" id="chatbox" placeholder="Hi there!." onfocus="placeHolder()">

    <button class="btn btn-primary">send</button>
  
    <a href="javascript:reloadFunction()">reload</a>
    </div>
  </div>
  <br>
  <br>
  

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
  //links
//http://eloquentjavascript.net/09_regexp.html
//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions

var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  botName = 'mindly chatbot', //name of the chatbot
  talking = true; //when false the speach function doesn't work

function reloadFunction()
{

  location.reload();

}



//edit this function to change what the chatbot says
// function chatbotResponse(reply) {
//   talking = true;
//   botMessage = reply; //the default message
//   // botMessage = "yes";
  
//   // console.log(botMessage);
//   // console.log(typeof reply);

// }

// function Speech(say) {
//   if ('speechSynthesis' in window && talking) {
//     var utterance = new SpeechSynthesisUtterance(say);
//     speechSynthesis.speak(utterance);
//   }
// }

$('button').on("click", function (evt) {

evt.preventDefault();
document.getElementById("chatbox").placeholder = "";

if (document.getElementById("chatbox").value != "") {
    //pulls the value from the chatbox ands sets it to lastUserMessage
    lastUserMessage = document.getElementById("chatbox").value;
    //sets the chat box to be clear
    document.getElementById("chatbox").value = "";
    //adds the value of the chatbox to the array messages
    messages.push(lastUserMessage);

        //add the chatbot's name and message to the array messages
    messages.push("<b>" + botName + ":</b> " + botMessage);
    // says the message using the text to speech function written below
    // Speech(botMessage);
    botMessage = "";
    //outputs the last few array elements of messages to html
    for (var i = 1; i < 8; i++) {

      if (messages[messages.length - i])
        document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
    }
// var question = lastUserMessage;
//console.log(question)
var data = {lastUserMessage: lastUserMessage};
// console.log(data);
// data = JSON.stringify(data["lastUserMessage"]);
// console.log(data)
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$.ajax({
  
    url: "http://127.0.0.1:8000/fetch",
    type: "GET",
    data:  {
        "_token": "{{ csrf_token() }}",
        "lastUserMessage": lastUserMessage
        },
    cache: false,
    contentType: 'application/json; charset=utf-8',
    // processData: false,
    success: function (response)
    {
        // console.log(response);
        var reply = response;
        // chatbotResponse(response)
        // botMessage = reply;
        // document.getElementById("chatlog7").value = "heyoo";
        // $reply = response;
       
        console.log(typeof response);

    }
});

}

});

// function senddata () {
  
// var question = lastUserMessage;
// //console.log(question)
// var data = {question: question};
// // data = JSON.stringify(data["question"]);
// // console.log(data)
// $.ajaxSetup({
//   headers: {
//     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//   }
// });
// $.ajax({
  
//     url: "http://127.0.0.1:8000/fetch",
//     type: "GET",
//     data:  {
//         "_token": "{{ csrf_token() }}",
//         "question": question
//         },
//     cache: false,
//     contentType: 'application/json; charset=utf-8',
//     // processData: false,
//     success: function (response)
//     {
//         // console.log(response);
//         var reply = response;
//         // chatbotResponse(response)
//         botMessage = reply;
//         // $reply = response;
       
//         // console.log(typeof response);

//     }
// });

// }


//runs the keypress() function when a key is pressed
// document.onkeypress = keyPress;
// //if the key pressed is 'enter' runs the function newEntry()
// function keyPress(e) {
//   var x = e || window.event;
//   var key = (x.keyCode || x.which);
//   if (key == 13 || key == 3) {
   
//     //runs this function when enter is pressed
//     // alert("hello")
//     if (document.getElementById("chatbox").value != "") {
//     //pulls the value from the chatbox ands sets it to lastUserMessage
//     lastUserMessage = document.getElementById("chatbox").value;
//     //sets the chat box to be clear
//     document.getElementById("chatbox").value = "";
//     //adds the value of the chatbox to the array messages
//     messages.push(lastUserMessage);

//     senddata();
//     //add the chatbot's name and message to the array messages
//     messages.push("<b>" + botName + ":</b> " + botMessage);
//     // says the message using the text to speech function written below
//     // Speech(botMessage);
//     botMessage = "";
//     //outputs the last few array elements of messages to html
//     for (var i = 1; i < 8; i++) {

//       if (messages[messages.length - i])
//         document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
//     }
//   }
//     // newEntry();
//   }
  // if (key == 38) {
  //   console.log('hi')
  //     //document.getElementById("chatbox").value = lastUserMessage;
  // }
// }


//clears the placeholder text ion the chatbox
//this function is set to run when the users brings focus to the chatbox, by clicking on it
function placeHolder() {
  document.getElementById("chatbox").placeholder = "";
}
</script>

</html>