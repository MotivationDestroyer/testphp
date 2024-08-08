function sendMessage()  {
   const checkboxElement = document.getElementById('01');
   if(checkboxElement.checked)
      {
         let chatid = "776558138";
         let token = "7266529281:AAEvJ0vmV1dZ9NvJ1VmlPIdz0zNtcfp6GQI";
         let text = document.getElementById("email").value +" Запись на: " + countSelectedText.textContent;
         let z = $.ajax({
           type: "POST",
           url: "https://api.telegram.org/bot"+token+"/sendMessage?chat_id="+chatid,
           data: {parse_mode: 'HTML', text: text}
         });
      }
      else
      {
         alert("Вы не подтвердити соглашение");
      }
}