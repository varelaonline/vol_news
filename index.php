<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="content" content="News feed">
	<meta name="keywords" content="thec news, varelaonline news, cyber security">
	<meta name="description" content="latest web development news"
    />
	<link rel="shortcut icon" type="image/png" href="./media/volnews_logo.png">
	<link rel="stylesheet" type="text/css" href="main.css" />
	 <script type="application/javascript" src="main.js" defer></script>
	<title>Varela online thec News</title>
</head>
<body id="top" class="darkgray-bg">
	<header class="bg-gradient">
		<div id="title-cont">
			<svg id="header_logo" class="volnews_logo" version="1.1" viewBox="0 0 300 100" >
				<path class="volnews_path" d="m149.702 17.0524a128.467 35.4144 0 0 0-128.168 35.4144 128.467 35.4144 0 0 0 128.467 35.4144 128.467 35.4144 0 0 0 128.466-35.4144 128.467 35.4144 0 0 0-128.466-35.4144 128.467 35.4144 0 0 0-0.299 0zm0.112 2.44481a117.606 29.7299 0 0 1 0.187 0 117.606 29.7299 0 0 1 117.605 29.73 117.606 29.7299 0 0 1-117.605 29.73 117.606 29.7299 0 0 1-117.606-29.73 117.606 29.7299 0 0 1 117.419-29.73z"/>
				<text class="volnews_txt" transform="matrix(2.23782 0 0 2.23782 607.598 279.435)" style="font-family:Ubuntu;font-size:16.9333px;font-weight:bold;line-height:1.95;shape-inside:url(#rect3200);">
					<tspan x="-247.68945" y="-101.47458">
						<tspan style="font-family:Ubuntu;font-weight:bold">
							VOL(News)
						</tspan>
					</tspan>
				</text>
			</svg>
			<svg id="nav-trigger" viewBox="0 0 16 16" class="hmenu_icon_cont">
				<rect class="hmenu_icon_fill" width="16" height="4"  y="0"/>
				<rect class="hmenu_icon_fill" width="16" height="4" y="6"/>
				<rect class="hmenu_icon_fill" width="16" height="4" y="12"/>
			</svg>
		</div>
		<nav id='navtag' style="display: none;">
			<ul id='nav-cont' class="stext">
				<a href="https://varelaonline.com"><li>Main</li></a>
				<a href="#top" id="form_trigger"><li>News</li></a>
				<a href="#" >
					<li id='filter_tab'>Filter</li>
					<ul id="categories" class="bg-gradient"></ul>
				</a>
				<a href="#footer"><li>Contact</li></a>
			</ul>
		</nav>
	</header>
	<aside id="from" class="darkgray-bg tpadding">
		<section class="bg-gradient2">
			<textarea id='title' class="pink-text spadding ltext" name="title" placeholder="Title"></textarea>
			<div class="bg-gradient spadding">
				<input id='cat' type="text" name="cat" placeholder="Category" class="black-text tpadding stext"/>

				<textarea id='comm' name='comm' class="silver-text tpadding" placeholder="News Details"></textarea>

				<input id='links' type="text" name="links" placeholder="Links" class="yellow-text tpadding stext"/>
				<input id='media' type="text" name="media" placeholder="Media" class="yellow-text tpadding stext"/>
				<input id='publish' type="submit" name="publish" value="Publish();" class="btn silver-bg tpadding" />
			</div>
		</section>
	</aside>
	<div id="mycont" class="bg-gradient3">

	</div>
	<footer id='footer' class="azure-bg">
		<div style="font-style: italic; font-size: 1.5rem; text-align: center;">
			For exclusive content, Follow us!
		</div>

		<ul>
			<a href="https://varelaonline.com"><li>
				<svg class="vol_logo" width="7rem" version="1.1" viewBox="0 0 300 100">
					<path class="footer_icon" d="m149.783 32.1448a93.5129 25.7787 0 0 0-93.2954 25.7785 93.5129 25.7787 0 0 0 93.513 25.7785 93.5129 25.7787 0 0 0 93.5123-25.7785 93.5129 25.7787 0 0 0-93.5123-25.7785 93.5129 25.7787 0 0 0-0.21765 0zm0.0815 1.77962a85.6069 21.6409 0 0 1 0.13612 0 85.6069 21.6409 0 0 1 85.6064 21.6408 85.6069 21.6409 0 0 1-85.6064 21.6408 85.6069 21.6409 0 0 1-85.6071-21.6408 85.6069 21.6409 0 0 1 85.471-21.6408z"></path>
					<text class="footer_icon" transform="matrix(1.62894 0 0 1.62894 430.8 217.405)"
						style="font-family:Ubuntu;font-size:16.9333px;font-weight:bold;letter-spacing:-.41275px;line-height:1.95 xml:" space="preserve">
						<tspan x="-247.68945" y="-101.47458">
					 		<tspan style="font-family:Ubuntu;font-weight:bold">
								VarelaOnLine(.com)
					 		</tspan>
			 			</tspan>
		 			</text>
				</svg>
			</li></a>
			<a href="#"><li>
				<svg id="github_svg" class="svg_icon github" width="2rem" viewBox="0 0 1024 1024" >
					<path class="footer_icon" d="M511.6 76.3C264.3 76.2 64 276.4 64 523.5 64 718.9 189.3 885 363.8 946c23.5 5.9 19.9-10.8 19.9-22.2v-77.5c-135.7 15.9-141.2-73.9-150.3-88.9C215 726 171.5 718 184.5 703c30.9-15.9 62.4 4 98.9 57.9 26.4 39.1 77.9 32.5 104 26 5.7-23.5 17.9-44.5 34.7-60.8-140.6-25.2-199.2-111-199.2-213 0-49.5 16.3-95 48.3-131.7-20.4-60.5 1.9-112.3 4.9-120 58.1-5.2 118.5 41.6 123.2 45.3 33-8.9 70.7-13.6 112.9-13.6 42.4 0 80.2 4.9 113.5 13.9 11.3-8.6 67.3-48.8 121.3-43.9 2.9 7.7 24.7 58.3 5.5 118 32.4 36.8 48.9 82.7 48.9 132.3 0 102.2-59 188.1-200 212.9a127.5 127.5 0 0 1 38.1 91v112.5c.8 9 0 17.9 15 17.9 177.1-59.7 304.6-227 304.6-424.1 0-247.2-200.4-447.3-447.5-447.3z"></path>
				</svg>
			</li></a>
			<a href="#"><li>
				<svg id="discord_svg" class="svg_icon discord" width="2rem" viewBox="0 0 24 24" >
					<g>
						<path class="footer_icon" d="M13.914 14.58a8.998 8.998 0 0 1-.484.104 7.06 7.06 0 0 1-2.664-.01c-.154-.03-.372-.083-.653-.158l-.921 1.197c-2.273-.073-3.137-1.596-3.137-1.596 0-3.381 1.481-6.122 1.481-6.122 1.481-1.133 2.89-1.102 2.89-1.102l.403.525a1.12 1.12 0 0 1 .112-.01 8.527 8.527 0 0 1 2.314.01l.442-.525s1.41-.031 2.89 1.103c0 0 1.482 2.74 1.482 6.121 0 0-.875 1.522-3.148 1.596l-1.007-1.134zM10.076 11C9.475 11 9 11.45 9 12s.485 1 1.076 1c.6 0 1.075-.45 1.075-1 .01-.55-.474-1-1.075-1zm3.848 0c-.6 0-1.075.45-1.075 1s.485 1 1.075 1c.601 0 1.076-.45 1.076-1s-.475-1-1.076-1zM21 23l-4.99-5H19V4H5v14h11.003l.57 2H5a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v19z"></path>
					</g>
				</svg>
			</li></a>
		</ul>
		<ul>
			<li className='fcolumns'>
                <h5>Privacy policy</h5>
                <div>Cookies</div>
                <div>Local storage</div>
            </li>
            <li className='fcolumns'>
                <h5>Copyrights</h5>
                <div>Jack Veneno Mortal</div>
            </li>
            <li className='fcolumns'>
                <h5 >Credits</h5>
                <h3 style={{margin: '1rem 0'}}>...</h3>
                <div>react-icons.github.io</div>
                <div>github.com/moharnadreza/react-toast</div>
                <div>Jack, web designer</div>
                <div>Coding Den, Discord server</div>
            </li>
        </ul>
		<div id="admin_btn">

		</div>
	</footer>
</body>
</html>
