
		@font-face {
			font-family: 'Droid Sans';
			font-style: normal;
			font-weight: 400;
			src: local('Droid Sans'), local('DroidSans'), url(<?php echo PATH_THEME; ?>/font/Droid_Sans/DroidSans.ttf) format('ttf');
		}
		@font-face {
			font-family: 'Droid Sans';
			font-style: normal;
			font-weight: 700;
			src: local('Droid Sans Bold'), local('DroidSans-Bold'), url(<?php echo PATH_THEME; ?>/font/Droid_Sans/DroidSans-Bold.ttf) format('ttf');
		}
		@font-face {
			font-family: 'Droid Sans Mono';
			font-style: normal;
			font-weight: 400;
			src: local('Droid Sans Mono'), local('DroidSansMono'), url(<?php echo PATH_THEME; ?>/font/Droid_Sans_Mono/DroidSansMono.ttf) format('ttf');
		}
		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 300;
			src: local('Roboto Light'), local('Roboto-Light'), url(<?php echo PATH_THEME; ?>/font/Roboto/Roboto-Light.ttf) format('ttf');
		}
		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 400;
			src: local('Roboto Regular'), local('Roboto-Regular'), url(<?php echo PATH_THEME; ?>/font/Roboto/Roboto-Regular.ttf) format('ttf');
		}
		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 500;
			src: local('Roboto Medium'), local('Roboto-Medium'), url(<?php echo PATH_THEME; ?>/font/Roboto/Roboto-Medium.ttf) format('ttf');
		}
		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 700;
			src: local('Roboto Bold'), local('Roboto-Bold'), url(<?php echo PATH_THEME; ?>/font/Roboto/Roboto-Bold.ttf) format('ttf');
		}
		body {
			font-family: "Droid Sans", sans-serif;
			font-weight: normal;
			font-style: normal;
			line-height: 1;
			padding-top:50px;
			font-size: 15px;
			-webkit-font-smoothing: antialiased;
			text-shadow: 1px 1px 0px rgba(180, 180, 180, 0.35); /* improves reading when using similar colors */
		}
		
		p{
			text-indent:10px;
		}
		
		h1, h2, h3, h4, h5, h6 {
			font-family: "Roboto", sans-serif;
			font-weight: 400;
			font-style: normal;
			color: #444;
			text-rendering: optimizeLegibility;
			margin-top: 0.2em;
			margin-bottom: 0.5em;
			line-height: 1.2125em;
			/*text-shadow: 2px 1px 2px rgba(150, 150, 150, 0.25);*/
		}
		h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
			font-size: 60%;
			color: gray;
			line-height: 0; 
			text-shadow: 2px 1px 2px rgba(150, 150, 150, 0.25);
		}
		
		h1 {
			font-size: 2.5em;
		}
			
		h2 {
			font-size: 2.1em;
		}
			
		h3 {
			font-size: 1.7em;
		}
			
		h4 {
			font-size: 1.4em;
		}
			
		h5 {
			font-size: 1.2em;
		}
			
		h6 {
			font-size: 1em;
		}
			
		code {
			font-family: "Droid Sans Mono", Courier, monospace;
			word-break:break-all;
			font-weight: 400;
			color: inherit;
		}
		
		kbd {
			background-color:#dddddd;
			background-image:-moz-linear-gradient(#f1f1f1, #ddd);
			background-image:-webkit-linear-gradient(#f1f1f1, #ddd);
			background-image:linear-gradient(#f1f1f1, #ddd);
			background-repeat:repeat-x;
			border-radius:2px;
			border:1px solid #ddd;
			border-bottom-color:#ccc;
			border-right-color:#ccc;
			padding:1px 4px;
			line-height:1.35em;
			display: inline-block;
			font-family: "Droid Sans Mono", "Courier", monospace;
		}
		
		a:{
			color:#0D58A6;
		}
		
		a:hover,a:active{
			color:#26517C;
		}
		
		table { 
			border-spacing: 0;
			/*border-collapse: collapse;*/
		}
		
		table tr td{
			word-break:break-all;
			border-right: solid 1px #ddd;
		}
		
		table tr td:last-child{
			border-right: none;
		}
		
		.dir-bar-button{
			padding: 4px 8px;
			border: 1px solid #aaa;
			color: #000;
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjAiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjA2Ii8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
			background: -moz-linear-gradient(-45deg,  rgba(255,255,255,0) 0%, rgba(0,0,0,0.06) 100%);
			background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(0,0,0,0.06)));
			background: -webkit-linear-gradient(-45deg,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			background: -o-linear-gradient(-45deg,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			background: -ms-linear-gradient(-45deg,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			background: linear-gradient(135deg,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#0f000000',GradientType=1 );
			border-radius: 5px;
			margin:3px 2px;
			font-size: 0.8em;
			text-align: center;
			display: inline-block;
			-webkit-box-shadow: 1.5px 1.5px 3px rgba(40, 40, 40, 0.4);
			-moz-box-shadow:    1.5px 1.5px 3px rgba(40, 40, 40, 0.4);
			box-shadow:         1.5px 1.5px 3px rgba(40, 40, 40, 0.4);
		}
		
		.dir-bar-button.search{
			font-size: 1em;
		}
		
		.dir-items{
			font-size: 1em;
			border:solid #bbb 1.5px;
			border-left:solid #ccc 1.5px;
			border-top:none;
			border-bottom:none;
			margin-bottom:0;
		}
		
		tr,tr:nth-of-type(even),tr:nth-of-type(odd){
			background:#fff;
		}
		
		tr:nth-of-type(even) {
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjA0Ii8+CiAgICA8c3RvcCBvZmZzZXQ9IjUlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjAiLz4KICAgIDxzdG9wIG9mZnNldD0iOTUlIiBzdG9wLWNvbG9yPSIjZmZmZmZmIiBzdG9wLW9wYWNpdHk9IjAiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjA0Ii8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
			background: -moz-linear-gradient(top,  rgba(0,0,0,0.04) 0%, rgba(255,255,255,0) 5%, rgba(255,255,255,0) 95%, rgba(0,0,0,0.04) 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.04)), color-stop(5%,rgba(255,255,255,0)), color-stop(95%,rgba(255,255,255,0)), color-stop(100%,rgba(0,0,0,0.04)));
			background: -webkit-linear-gradient(top,  rgba(0,0,0,0.04) 0%,rgba(255,255,255,0) 5%,rgba(255,255,255,0) 95%,rgba(0,0,0,0.04) 100%);
			background: -o-linear-gradient(top,  rgba(0,0,0,0.04) 0%,rgba(255,255,255,0) 5%,rgba(255,255,255,0) 95%,rgba(0,0,0,0.04) 100%);
			background: -ms-linear-gradient(top,  rgba(0,0,0,0.04) 0%,rgba(255,255,255,0) 5%,rgba(255,255,255,0) 95%,rgba(0,0,0,0.04) 100%);
			background: linear-gradient(to bottom,  rgba(0,0,0,0.04) 0%,rgba(255,255,255,0) 5%,rgba(255,255,255,0) 95%,rgba(0,0,0,0.04) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0a000000', endColorstr='#0a000000',GradientType=0 );
		}
		
		.dir-items tr th{
			font-size: 1em;
			border-bottom: solid 1px #ccc;
		}
		
		.dir-items,.dir-bar{
			-webkit-box-shadow: 4px 4px 10px rgba(30, 30, 30, 0.25);
			-moz-box-shadow:    4px 4px 10px rgba(30, 30, 30, 0.25);
			box-shadow:         4px 4px 10px rgba(30, 30, 30, 0.25);
		}
		
		.info-bar{
			-webkit-box-shadow: 4px 4px 10px rgba(30, 30, 30, 0.25);
			-moz-box-shadow:    4px 4px 10px rgba(30, 30, 30, 0.25);
			box-shadow:         4px 4px 10px rgba(30, 30, 30, 0.25);
		}
		
		a.dir-bar-button:hover,a.dir-bar-button:active,.dir-bar-button.search:hover,.dir-bar-button.search:active{
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMDAwMDAwIiBzdG9wLW9wYWNpdHk9IjAuMDYiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
			background: -moz-linear-gradient(-45deg,  rgba(0,0,0,0.06) 0%, rgba(255,255,255,0) 100%);
			background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,0,0,0.06)), color-stop(100%,rgba(255,255,255,0)));
			background: -webkit-linear-gradient(-45deg,  rgba(0,0,0,0.06) 0%,rgba(255,255,255,0) 100%);
			background: -o-linear-gradient(-45deg,  rgba(0,0,0,0.06) 0%,rgba(255,255,255,0) 100%);
			background: -ms-linear-gradient(-45deg,  rgba(0,0,0,0.06) 0%,rgba(255,255,255,0) 100%);
			background: linear-gradient(135deg,  rgba(0,0,0,0.06) 0%,rgba(255,255,255,0) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0f000000', endColorstr='#00ffffff',GradientType=1 );
			color:#07e;
		}
		
		.dir-up-button{
			/*font-weight: 700;*/
			font-family: "Droid Sans Mono", Sans;
		}
		
		.copyright{
			color: #888;
			text-align: right;
			font-size: 0.85em;
		}
		
		.copyright:after{
			content:"Proudly powered by LastAutoIndex";
			display:block;
		}
		
		.fa-icon{
			margin:0 0.25em;
			font-size:32px;
		}
		
		.fa-icon.small{
			font-size:16px;
		}
		
		.fa-icon.large{
			font-size:48px;
		}
		
		.fa-icon.emsmall{
			font-size:0.8em;
		}
		
		.fa-icon.same{
			font-size:inherit;
		}
		
		.fa-icon.emlarge{
			font-size:1.3em;
		}
		
		.dir-bar{
			width: 99.9%;
			padding: 10px 12px 8px 12px;
			border:solid #bbb 1.5px;
			border-left:solid #ccc 1.5px;
			border-top:solid #ccc 1.5px;
			border-radius: 8px 8px 0 0;
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMC4wNiIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
			background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(0,0,0,0.06) 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(0,0,0,0.06)));
			background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			background: -o-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			background: -ms-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#0f000000',GradientType=0 );
		}
		
		.info-bar{
			font-size: 0.82em;
			width: 99.9%;
			color:#444;
			padding: 7px 12px;
			border:solid #bbb 1.5px;
			border-left:solid #ccc 1.5px;
			border-radius: 0 0 8px 8px;
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMC4wNiIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
			background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(0,0,0,0.06) 100%);
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(0,0,0,0.06)));
			background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			background: -o-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			background: -ms-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			background: linear-gradient(to bottom,  rgba(255,255,255,0) 0%,rgba(0,0,0,0.06) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#0f000000',GradientType=0 );
			background-color: #fff;
		}
		
		.valign-middle{
			vertical-align:middle;
		}
		
		footer{
			padding:2em 0 30px 0;
		}
		
		pre {
			width: 90%;
			margin: 0 auto;
			word-break:break-all;
			font-size: 0.92em;
			white-space: pre-wrap;       /* css-3 */
			white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
			white-space: -pre-wrap;      /* Opera 4-6 */
			white-space: -o-pre-wrap;    /* Opera 7 */
			word-wrap: break-word;       /* Internet Explorer 5.5+ */
		}
		
		#request-details{
			height: 1px;
			padding-top: 1.1em;
			overflow: hidden;
		}
		
		no-float{
			float: none;
		}
		
		.konami-code{
			margin: 3.5em auto;
		}
		
		.dir-items{
			background-color:#f7f7f7;
		}
		
		@media only screen and (min-width: 48em) {
			.text-right-for-large{
				text-align: right !important;
			}
		}
		
		@media only screen and (max-width: 48em) {
			
			.copyright:after{
				text-align: center;
			}
			
			.text-centered-for-small{
				text-align: center !important;
			}
			
			centered-for-small{
				margin-left: auto !important;
				margin-right: auto !important;
			}
			
			no-float-for-small{
				float: none !important;
			}
		}
		
		