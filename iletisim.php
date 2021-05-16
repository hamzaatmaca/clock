<style>
#iletisim input
{
	height: 30px;
	border-radius: 15px;
	border:none;
	text-align: center;

}
#iletisim input:focus
{
	outline: 0;
}
#iletisim input::placeholder
{
	text-align: center;

}
#iletisim textarea
{
	border-radius: 10px;
	width: 40%;
	height: 100px;
}
#yolla
{
width: 15em;
cursor: pointer;
background-color: #20363D;
color: skyblue;
border:10px skyblue solid;
box-shadow: 0 0 4px skyblue, inset 0 0 2px skyblue;
letter-spacing: 5px;
transition: .5s;
}
#yolla:hover
{
	box-shadow: 0 0 10px blue, inset 0 0 5px blue;
	color:white;
	text-shadow: 0 0 5px white;
}

</style>
<h1 align="center"style="color:skyblue;
	text-shadow: 0 0 3px skyblue;">İletişim</h1>
<div id="iletisim" align="center" style="margin-top:30px;display:flex;flex-direction: column;justify-content: center;align-items: center;">
	<form action="index.php?sk=25" method="post">
	<p><b>Bizlere iletmek istediğiniz bütün görüş ve bildirilerinizi buradan kolayca yazabilirsiniz.<br><br> En kısa sürede sizinle iletişime geçilecektir.</b></p><br>
	<input type="text" name="isim" placeholder="İsim Soyisim"><br><br>
	<input type="email" name="email" placeholder="E-Mail"><br><br>
	<textarea name="iletyazi"></textarea><br><br>
	<input id="yolla" type="submit" value="Gönder">
	</form>

</div>