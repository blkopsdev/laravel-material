(function(){

var dropleftOpen = false;
var droprightOpen = false;

//events: 

$('body').on('click', '#newuser', function(){
	$('.userprompt1').children().remove();
	appendStructure('.userprompt1', newuserform);
});

$('body').on('click', '#userlogin', function(){
	$('.userprompt1').children().remove();
	appendStructure('.userprompt1', alreadyAccount);
});

$('body').on('click', '.alreadyhaveaccount', function(e){
	e.preventDefault();
	console.log('TEST');
	$('.userprompt1').children().remove();
	appendStructure('.userprompt1', alreadyAccount);

});
$('body').on('click', '.neednewaccount', function(e){
	e.preventDefault();
	console.log('TEST');
	$('.userprompt1').children().remove();
	appendStructure('.userprompt1', newuserform);

});



$('#getstarted').on('click', function(){
 	showOverlay('showOverlay');
    addMenu(overlay, overlaymenu);
    $('.overlaymenu').addClass('showOverlayMenu');
});

$('body').on('click', '#exit1', function(){
	$('.overlay').removeClass('showOverlay');
	$('.overlaymenu').removeClass('showOverlayMenu');
	setTimeout(() => {
		$('.overlaymenu').remove();
	}, 333);
});

$('#left-button').on('click', function(e){
	if(dropleftOpen){
		$('.selectCurrencyCtn1').remove();
	} else {
	  $(this).after("<div class='selectCurrencyCtn selectCurrencyCtn1'><div>")
	  $('.selectCurrencyCtn1').append(showdropdown(listIcons));
	  e.stopPropagation();
	  dropleftOpen = true;
    }
});

$('#right-button').on('click', function(e){
	if(droprightOpen){
		$('.selectCurrencyCtn2').remove();
	} else {
	  $(this).after("<div class='selectCurrencyCtn selectCurrencyCtn2'><div>");
	  $('.selectCurrencyCtn2').append(showdropdown(listIcons));
	  e.stopPropagation();
	  droprightOpen = true;
    }
});

$('body').on('click', function(){
	if(droprightOpen && dropleftOpen){
		$('.selectCurrencyCtn').remove();
		dropleftOpen = false;
		droprightOpen = false;
	} else if (droprightOpen){
		$('.selectCurrencyCtn2').remove();
		droprightOpen = false;
	} else {
		$('.selectCurrencyCtn1').remove();
		dropleftOpen = false;
	}
});

//functions

// let removeStructure = (slct)
let appendStructure = (slct, struct) => {
	console.log(struct);
	$(slct).append(struct);
}
let addOverlay = (html) => (
	$('body').prepend(html).css('overflow', 'hidden')
)
let showOverlay = (name) => {
	$('.overlay').addClass(name);
}
let removeOverlay = () => {
	$('body').css('overflow', 'initial');
	$('.overlay').remove();
}
let addMenu = (el, html) => {
	$('.overlay').before(html);
}
let removeMenu = () => {
	$('.overlaymenu').remove();
}


function showdropdown(data){
  return listItems = data.map((item) => {
  	let icon = item.icon;
  	let name = item.name;
  	let idx =  name.indexOf('.svg');
  	let newitem = name.slice(0, idx);
  	
  	return "<li class='iconName'><h5 class='currencyTxt'>"+name+"</h5><img class='currencyImg' width='20px' src='"+'css/icons/'+icon+"'>"+"</li>"
  });
  
}
//html 

let overlay = "";
// let overlaymenu = "<div class='overlaymenu'>"+
// 					"<button id='exit1'>X</button>"+
// 					"<div class='userprompt1'>"+
// 					  "<h1 class='center-txt'>Hello!</h1>"+
// 					  "<button id='newuser' class='ctr-btn'>New User</h1>"+
// 					  "<button id='userlogin' class='ctr-btn'>Already Have An Account</button>"+
// 					"<div>"+
// 				  "</div>"

let overlaymenu = "<div class='overlaymenu'>"+
					"<button id='exit1'>X</button>"+
					"<div class='userprompt1'>"+
					  "<h1 class='center-txt title'>Hello!</h1>"+
					  "<hr>"+
					  "<h4 class='center-txt title'>Contact: Support@coinpaper.io</h4>"+
					"<div>"+
				  "</div>"

let newuserform = "<div class='userprompt2 center-txt'>"+
				"<h3>Enter Email</h3>"+
				"<input type='text' name='email'>"+
				"<button class='gotoaccount'><a href='dash.html'>Submit</a></button>"+
				"<hr>"+
				"<button>Sign Up With Google</button>"+
				"<button>Sign Up With Facebook</button>"+
				"<button>Sign Up With Twitter</button>"+
				"<a href='' class='alreadyhaveaccount'>Actually, I already have an account</a>"+
			  "</div>"	

let alreadyAccount = "<div class='userprompt3 center-txt'>"+
					   "<input type='email' name='email'>"+
					   "<input type='password' name='password'>"+
					   "<button class='gotoaccount'><a href='dash.html'>Submit</a></button>"+
					   "<hr>"+
					   "<a href='' class='neednewaccount'>Just kidding, I need a new account</a>"+
					 "</div>"

var price = $('#bitcoinPrice');
var currency = 'USD';

function getBitCoinPrice(){
	var XHR = new XMLHttpRequest();
	XHR.onreadystatechange = function(){
		if(XHR.readyState == 4 && XHR.status == 200){
			var data = JSON.parse(XHR.responseText);
			// console.log(data);
			var USD = data.bpi[currency].rate
			// console.log(USD);
			price.text(USD + " " + currency);
			
		}
	}
  XHR.open('get', 'https://api.coindesk.com/v1/bpi/currentprice.json')
  XHR.send();
}

function getcoinprice() {
	var url = "https://apiv2.bitcoinaverage.com/convert/global?from=BTC&to=USD&amount=1"
    // code goes here
	$.ajax({
	  url: url,
	}).done(function(data) {
	  var btc_price = JSON.stringify(data.price);
	  var currency = 'USD';
	  price.text(btc_price + " " + currency);
	});
}

function countDown(timer){

 var timer = timer;
 var run = setInterval(function(){
  timer--;
  $('#timer').text(timer);
  if(timer===0){
    timer = 60;
    $('#timer').text(timer);
    }
  }, 1000);
}

countDown(60);
// getBitCoinPrice();
getcoinprice();
setInterval(function(){
	getcoinprice();
}, 60000)

const listIcons = [
{name: 'Bitcoin', icon: 'btc.svg'},
{name: 'Ethereum', icon: 'eth.svg'},
{name: 'Ripple', icon: 'xrp.svg'},
{name: 'Iota', icon: 'iot.svg'},
{name: 'Cardano', icon: 'bcap.svg'},
{name: 'Dash', icon: 'dash.svg'}
]



const icons = [ '1st.svg',
 'amp.svg',
 'ans.svg',
 'ant.svg',
 'ardr.svg',
 'ark.svg',
 'bay.svg',
 'bcap.svg',
 'bcn.svg',
 'btc.svg',
 'btcc.svg',
 'btcd.svg',
 'bts.svg',
 'clam.svg',
 'crbit.svg',
 'dash.svg',
 'dcr.svg',
 'dgb.svg',
 'dgd.svg',
 'doge.svg',
 'emc.svg',
 'etc.svg',
 'eth.svg',
 'fct.svg',
 'game.svg',
 'gbyte.svg',
 'gno.svg',
 'gnt.svg',
 'grc.svg',
 'gup.svg',
 'hmq.svg',
 'icn.svg',
 'ion.svg',
 'iot.svg',
 'kmd.svg',
 'lbc.svg',
 'lkk.svg',
 'lsk.svg',
 'ltc.svg',
 'maid.svg',
 'mln.svg',
 'mona.svg',
 'mue.svg',
 'nlg.svg',
 'nmc.svg',
 'nvc.svg',
 'nxt.svg',
 'omni.svg',
 'pivx.svg',
 'ppc.svg',
 'rby.svg',
 'rep.svg',
 'rlc.svg',
 'round.svg',
 'sbd.svg',
 'sc.svg',
 'sjcx.svg',
 'smc.svg',
 'sngls.svg',
 'steem.svg',
 'strat.svg',
 'swt.svg',
 'sys.svg',
 'time.svg',
 'tkn.svg',
 'trst.svg',
 'ubq.svg',
 'usdt.svg',
 'vtc.svg',
 'waves.svg',
 'wct.svg',
 'wings.svg',
 'xaur.svg',
 'xcp.svg',
 'xem.svg',
 'xlm.svg',
 'xmr.svg',
 'xpm.svg',
 'xrp.svg',
 'xzc.svg',
 'zec.svg',]




//data structures:

// function showdropdown(data){
//   return listItems = data.map((item) => {
//   	let idx = item.indexOf('.svg');
//   	let newitem = item.slice(0, idx);
//   	return "<li class='iconName'><h5 class='currencyTxt'>"+newitem+"</h5><img class='currencyImg' width='50px' src='"+'css/icons/'+item+"'>"+"</li>"
//   });
  
// }


// var btn = $('button');
// btn.click(getBitCoinPrice);
// btn.click(function(){console.log('clicked')});



// $('#right-button').on('click', function(){
// 	if(droprightOpen === false){
// 		$('.input-grp2').append("<ul class='currencydrp2'></ul>");
// 		$('.currencydrp2').append(showdropdown(icons));
// 		setTimeout(function(){
// 			$('.currencydrp2').css('opacity', '1');
// 		}, 100);
// 		droprightOpen = true;
// 	} else {
// 		$('.currencydrp2').css('opacity', '0');
// 		setTimeout(function(){
// 			$('.currencydrp2').remove();
// 		}, 400);
// 		droprightOpen = false;
// 	}
// });

// $('#right-button').on('click', function(){
// 	console.log('right button click');
// });


// $('body').on('click', function(e){
//   if(droprightOpen || dropleftOpen){
//   	console.log('one of the 2 are true')
//   	$('.currencydrp1').css('opacity', '0');
// 		setTimeout(function(){
// 	  	 $('.currencydrp1').remove();
// 	  },400);
// 	$('.currencydrp2').css('opacity', '0');
// 		setTimeout(function(){
// 			$('.currencydrp2').remove();
// 		}, 400);
// 		droprightOpen = false;
//   }
// });




})();
