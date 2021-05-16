var dizi;
x();

function x()
{
	var slayt=document.getElementsByClassName('image');
	var i;
	for(var i =0; i<slayt.length; i++){
	slayt[i].style.display ="none";


}


dizi=Math.floor(Math.random()*4);
slayt[dizi].style.display ="block";
setTimeout(x,3000);
}

 function cbolum(){
	
	document.cookie="isim='deger'";
	var btn =document.createElement('BUTTON');
	var cerez=document.createElement('DIV');
	var btno =document.createElement('BUTTON');
	btn.innerHTML="Kapat";
	btn.style.background="skyblue";
	btn.style.borderRadius=5+"px";
	btn.style.border="none";
	btn.style.boxShadow="0 0 2px skyblue";
	btn.style.marginLeft=20+"px";
	btn.style.cursor="pointer";
	btn.style.color="grey";
	btno.innerHTML="Onayla";
	btno.style.background="skyblue";
	btno.style.borderRadius=5+"px";
	btno.style.border="none";
	btno.style.boxShadow="0 0 2px skyblue";
	btno.style.marginLeft=50+"px";
	btno.style.cursor="pointer";
	btno.style.color="grey";
	cerez.style.position="fixed";
	cerez.style.opacity=.9;
	cerez.style.bottom=0;
	cerez.style.width=100+'%';
	cerez.style.height="auto";
	cerez.style.textAlign="center";
	cerez.style.paddingTop=10+"px";
	cerez.style.paddingBottom=10+"px";
	cerez.style.background="#20363D";
	cerez.innerHTML="<b>Alışveriş deneyiminizi iyileştirmek ve sizlere daha iyi hizmet verebilmek için yasal düzenlemelere uygun çerezler (cookies) kullanıyoruz. Detaylı bilgi için “Gizlilik ve Kişisel Veriler” sayfamızı ziyaret edebilirsiniz. <a href=''>Daha Fazla..</a></b>";
	
	document.body.appendChild(cerez);
	cerez.appendChild(btn);
	cerez.appendChild(btno);

	function kapat(){
		
			cerez.style.display="none";	
	}

btn.addEventListener("click",kapat);
btno.addEventListener("click",kapat);

}

cbolum();

