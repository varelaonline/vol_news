//vars
const mycont=document.getElementById('mycont');
const nav_trigger=document.getElementById('nav-trigger');
const navTag=document.getElementById('navtag');
var navToggle=false;
const inptitle=document.getElementById('title');
const inpcat=document.getElementById('cat');
const inpcomm=document.getElementById('comm');
const inplinks=document.getElementById('links');
const inpmedia=document.getElementById('media');
const form=document.getElementById('from');
const form_trigger=document.getElementById('form_trigger');
const publish_btn=document.getElementById('publish');
const admin_btn=document.getElementById('admin_btn');
const filter_tab=document.getElementById('filter_tab');
const categories=document.getElementById('categories');




function fetchAPI(headerbody){
	return fetch('./classes/index.php', {
		method: 'post',
		body: headerbody
	})
	.then((resp)=> resp.json())
	.then((data)=> {
		return data;
	});
}


function displayNewsFeed(feed){
	if(feed){
		mycont.innerHTML='';
		feed.forEach((i)=>{
			mycont.innerHTML+=`
				<section class="bg-gradient2">
					<h2 class="darkgray-text spadding ltext">${i.title}</h2>
						<div class="news_date gray-text ttext tpadding">${i.updated}</div>
					<div class="sec_cont bg-gradient spadding">
						${i.pictdir&& (`
							<img src="./media/${i.pictdir}" >
						`)}
						<div class="stext spadding">${i.cat}</div>
						<p class="silver-text stext">
							${i.comm}
						</p>

						<a target="blank" href="${i.link}" class="purplegrape-text spadding stext link-fx" >More here</a>
					</div>
				</section>
			`;
		});
	}
}

function getNews(filter){
	categories.style.display='none';
	if(!filter) filter='get_news';
	switch(filter){
		case 'get_news':
			let formHeader=new FormData();
			formHeader.append('get_news', 'get_news');
			fetchAPI(formHeader).then((feed)=>displayNewsFeed(feed));
		break;

		default:
			let formcat=new FormData();
			formcat.append('get_news', filter);
			fetchAPI(formcat).then((feed)=>displayNewsFeed(feed));
		break;
	}
}

function tokenVerification(user, token){
	let verifyHeader=new FormData();
	verifyHeader.append('verify', 'verify');
	verifyHeader.append('user', user);
	verifyHeader.append('token', token);
	return fetchAPI(verifyHeader).then((token)=>{
		console.log(token);
		return token[0];
	});
}


function displayFrom(){
	let user=localStorage.getItem('user');
	let token=localStorage.getItem('token');
	tokenVerification(user, token).then((token_trigger)=>{
		if(token_trigger){
			form.style.display=='block'? form.style.display='none' : form.style.display='block';
		}
	});
}

function clearForm(){
	console.log('clear form');
	inptitle.value='';
	inpcat.value='';
	inpcomm.value='';
	inplinks.value='';
	inpmedia.value='';
}

function sendForm(){
	let formHeader=new FormData();
	formHeader.append('media', inpmedia.value);
	formHeader.append('title', inptitle.value);
	formHeader.append('cat', inpcat.value);
	formHeader.append('comm', inpcomm.value);
	formHeader.append('links', inplinks.value);
	formHeader.append('publish', 'publish');
	fetchAPI(formHeader).then((response)=>{
		if(response[0]){
			clearForm();
			displayFrom();
			getNews();
		}else{
			if (response[1]==='wrong media format') {
				inpmedia.style.border='3px solid #ECD444';
			}
		}
	});
}



function displayNav(){
	if(navToggle){
		navTag.style.display='none';
		navToggle=false;
	}else{
		navTag.style.display='block';
		navToggle=true;
	}
}


function logInNow(){
	let inpuser=document.getElementById('user').value;
	let inppass=document.getElementById('pass').value;
	let loginForm=new FormData();
	loginForm.append('user', inpuser);
	loginForm.append('pass', inppass);
	loginForm.append('login', login);
	fetchAPI(loginForm).then((res)=>{
		if(res[0]){
			localStorage.setItem('user', res[1]);
			localStorage.setItem('token', res[2]);
			console.log(res);
		}else{
			localStorage.removeItem('user');
			localStorage.removeItem('token');
			console.log(res);
		}
	});
	admin_btn.innerHTML='';
}



function adminLogIn(){
	admin_btn.innerHTML=`
		<input id='user' type="text" name="links" class="black-text tpadding stext"/>
		<input id='pass' type="password" name="pwd" class="black-text tpadding stext"/>
		<input id='login' type="submit" name="login" value="login" onclick="logInNow()" class="btn silver-bg tpadding" />
	`;
}


function getCategories(){
	let form_header= new FormData();
	/*form_header.append('user',localStorage.getItem('user'));
	form_header.append('token',localStorage.getItem('token'));*/
	form_header.append('get_categories', 'get_categories');
	fetchAPI(form_header).then((res)=>{
		if(res[0]){
			res[1].forEach((category_txt) => {
				let cat_element=document.createElement('LI');
				cat_element.classList='category_element tpadding';
				cat_element.innerHTML=category_txt.cat;
				cat_element.onclick=(e)=>getNews(e.target.innerHTML);
				categories.appendChild(cat_element);
			});

		}else{
			console.log(res[1]);
		}
	}).catch((err)=>console.log(err));
}




function toggleDisplayFilters(){
	categories.style.display==='none'? categories.style.display='block': categories.style.display='none';
}




//EVENT LISTENERS ***************************************************
window.onload=()=>{
	getNews();
	getCategories();
}
nav_trigger.addEventListener('click', displayNav);
form_trigger.addEventListener('click', displayFrom);
publish_btn.addEventListener('click', sendForm);
admin_btn.addEventListener('dblclick', adminLogIn);
filter_tab.onclick=toggleDisplayFilters;
