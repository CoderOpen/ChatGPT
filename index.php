<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chat GPT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

<div class="sidebar">
<!--  <h2 class="tablink sidebar-header">Create Chat</h2>
    <button class="tablink" onclick="openTab(event, 'tab1')">Lorem ipsum</button>
    <button class="tablink" onclick="openTab(event, 'tab2')">Dolor sit amet</button>-->
    <h2 class="tablink sidebar-header">联系作者</h2>
    <image src='./wechat.png' style="width:100%;height:auto" >
</div>
<section class="msger">
    <div style="text-align:right"> <a href="https://github.com/CoderOpen/ChatGPT"><img style="width:50px" alt="展示不出" src="github.png"></a></div>
    <header class="msger-header">
        <div class="msger-header-title">
            <i class="fas fa-comment-alt"></i> ChatGPT
            &nbsp;| ID: <input type="text" id="id" hidden> <span class="id_session"></span>
        </div>
        <div class="msger-header-options">
            <button id="delete-button">删除记录</button>
        </div>
    </header>

    <main class="msger-chat">
    </main>

    <form class="msger-inputarea">
        <input class="msger-input" placeholder="Enter your message..." require>
        <button type="submit" class="msger-send-btn">发送</button>
    </form>
</section>
<script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script>
<script src="./script.js"></script>
<script>
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>

</html>