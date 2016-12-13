 <html>
 <head>
   <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style type="text/css" media="screen">
     body {
         background-image: url("back.png");


     }
     aside{
       width: 687px;
       height: 800px;
       float:left;
     }
     article{
       width: 642px;
       height: 1137px;
       float: right;
     }
     iframe{
       width: 90%;
       height: 70%;
       background-color: white;
     }
     .ace_editor {
         position: relative !important;
         border: 1px solid lightgray;
         margin: auto;
         height: 800px;
         width: 80%;
     }
     #menu ul {
	padding:0px;
	margin:0px;
	background-color:#318495;
	list-style:none;
  box-shadow: 5px 5px 0 #333;
   -webkit-box-shadow: 5px 5px 0 #333;
   -moz-box-shadow: 5px 5px 0 #333;
}
#menu ul li { display: inline; }

#logo{
  font-size: 45px;
  background-color: rgb(49, 132, 149);
  color: white;
  word-spacing: -12px;
  letter-spacing: -3px;
  font-family: "Lucida Console", Monaco;
  text-shadow: 1px 0px 0px black,
                -1px 0px 0px black,
                0px 1px 0px black,
                0px -1px 0px black;


}
.btn {
  background: #ffffff;
  padding: 5px 4px 6px 2px;
  margin-left: 309px;
}

.btn:hover {
  background: #3cb0fd;

}


   </style>


 </head>
 <body>
   <header>
     <nav id="menu">
	<ul>
		<li id="logo">Code is fun</li>
		<li ><button class = "btn" onclick="enviar()" ><img src="play.png"></button></li>

	</ul>
</nav>
   </header>
   <br />
   <aside>
     <pre id="editor"></pre>
   </aside>

   <article>
   <iframe  name="frame" src="http://www.gabriela.x-br.com/code/editor/novo.php"></iframe>
   </article>
   <!-- load ace -->
   <script src="ace-builds-master/src/ace.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"> </script>
   <script>
       var editor = ace.edit("editor")
       editor.setTheme("ace/theme/twilight")
       editor.session.setMode("ace/mode/php")
       editor.resize(true)
       editor.setHighlightActiveLine(true);

function enviar(){
var enviar= editor.getValue();

$.ajax({
        type      : 'get',

        url       : 'action.php',

        data      : 'nome='+ escape(enviar),

        dataType  : 'html',

        success : function(txt){
                $('body p').html(txt);
            }
    });
setTimeout(function(){window.frames['frame'].location.reload()},4000);
}
   </script>

 </body>
 </html>
