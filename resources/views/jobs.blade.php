@extends('layouts.app')

@section('page-style')
<style>
/* Website template by freewebsitetemplates.com */
body {
	background-color: #e2e2e2;
	min-width: 960px;
	margin: 0;
}
img {
	display: block;
	border: 0;
}
/** box-shadow **/
.box {
	background-color: #e7e7e7; /* Needed for IE */
	display: inline-block;
	-moz-box-shadow: 0 0 1px 3px rgba(207, 207, 207, 0.6);
	-webkit-box-shadow: 0 0 1px 3px rgba(207, 207, 207, 0.6);
	box-shadow: 0 0 1px 3px rgba(207, 207, 207, 0.6);
	/* For IE 5.5 - 7 */
	filter: progid:DXImageTransform.Microsoft.Blur(PixelRadius=3, MakeShdow=true, ShadowOpacity=0.80);
	/* For IE 8 */
	-ms-filter:"progid:DXImageTransform.Microsoft.Blur(PixelRadius=3,MakeShadow=true,ShadowOpacity=0.30)";
	zoom: 1;
}
.box > img {
	display: block;
	position: relative; /* This protects the inner element from being blurred */
}
.clearfix {
	width: 960px;
	margin: 0 auto;
}
.clearfix:after {
	clear:both;
	content:"";
	display:block;
	line-height:0;
	height:1%;
	visibility:hidden;
	}
.content_one
{
  width:fit-content;
  margin: auto;
  
  float:left;
}


/*------------ Sprites ------------*/
.more, .subscribe, input[type='submit'] {
	background: url(../images/interface.png) no-repeat;
}
.phone, .mail, .home, .fax, #footnote .connect a {
	background: url(../images/icons.png) no-repeat;
}
.frame1, .frame2, .frame3, .frame4, .frame5, .news > li {
	background: url(../images/frames.png) no-repeat;
}
.more, .subscribe, input[type='submit'] {
	background-position: -107px 0;
	color: #fff;
	display: inline-block;
	font: 12px/28px Arial, Helvetica, sans-serif;
	height: 28px;
	width: 97px;
	text-align: center;
	text-decoration: none;
	text-shadow: 1px 1px rgba(0, 0, 0, 0.3);
	text-transform: uppercase;
}
.more:hover {
	background-position: 0 0;
}
.subscribe, input[type='submit'] {
	background-position: -222px -38px;
	height: 38px;
	line-height: 38px;
	width: 212px;
}
.subscribe:hover, input[type='submit']:hover {
	background-position: 0 -38px;
}
.home, .phone, .mail, .fax {
	background-position: 0 1px;
	padding-left: 24px;
}
.phone {
	background-position: 0 -26px;
}
.fax {
	background-position: 0 -54px;
}
.mail {
	background-position: 0 -82px;
}
.frame1 {
	background-position: -117px 0;
	height: 150px;
	width: 203px;
	margin: 0 auto 6px;
	padding: 8px 7px 0;
	text-align: center;
}
.frame2 {
	background-position: 0 -517px;
	height: 316px;
	width: 924px;
	margin: 0 auto 18px;
	padding: 6px 7px 0;
	text-align: center;
}
.frame3 {
	background-position: -344px 0;
	height: 221px;
	width: 586px;
	margin: 0 auto 6px;
	padding: 7px 7px 0;
	text-align: center;
}
.frame4 {
	background-position: 0 0;
	height: 108px;
	width: 93px;
	padding: 7px 7px 0;
	text-align: center;
}
.frame5 {
	background-position: -610px -238px;
	height: 220px;
	width: 268px;
	padding: 7px 6px 0;
	text-align: center;
}
/*------------ HEADER ------------*/
#header {
	/* background: #4e5944 url(../images/bg-header.jpg) repeat-x left bottom; */
	background:#545e70;
	padding: 40px 0 46px;
}
/** logo **/
.logo {
	float: left;
	display: inline-block;
}
/** navigation **/
.navigation {
	float: right;
	list-style: none;
	margin: 28px 0 0;
	padding: 0;
}
.navigation li {
	float: left;
	margin-left: 30px;
	position: relative;
}
.navigation li > a {
	color: #b8c6ac;
	font: bold 13px/24px Times, "Times New Roman", serif;
	text-decoration: none;
	text-shadow: 1px 1px #000;
	text-transform: uppercase;
	text-decoration: underline;
}
.navigation li.active > a, .navigation li > a:hover {
	color: #fff;
	text-decoration: underline;
}
.navigation li > div {
	background-color: #888888;
	display: none;
	width: 110px;
	position: absolute;
	left: 0px;
	top: 24px;
}
.navigation li:hover > div {
	display: block;
}
.navigation li > div a {
	color: #b8c6ac;
	font: bold 13px/24px "Times New Roman", Times, serif;
	display: block;
	text-align: center;
	text-decoration: none;
	text-shadow: none;
	text-decoration: underline;
}
.navigation li > div a:hover {
	color: #fff;
	text-decoration: underline;
}
/*------------ CONTENTS ------------*/
#contents {
	padding-bottom: 24px;
}
#contents > div.clearfix:first-child {
	width: 940px;
	padding: 30px 10px 0;
}
#contents img {
	border: 1px solid rgba(231, 231, 231, 0.8);
}
h1 {
	color: #57614e;
	font: 29px/30px "Times New Roman", Times, serif;
	margin: 0 0 12px;
	text-transform: uppercase;
}
h2 {
	color: #626262;
	font: 19px/24px "Times New Roman", Times, serif;
	letter-spacing: 2px;
	margin: 0;
	float:left;
	width:75%;
	
}
p {
	color: #626262;
	font: 14px/24px Arial, Helvetica, sans-serif;
	margin: 0 0 24px;
}
p a {
	color: #626262;
}
p a:hover {
	color: #333333;
}

.opn_txt
{
	color: green;
	
	
}

/** Adbox **/
#adbox {
	background: url(../images/bg-adbox.png) no-repeat center bottom;
	border-bottom: 1px solid #fff;
	padding-top: 15px;
}
#adbox > div {
	background-color: #e9e9e9;
	width: 958px;
	border: 1px solid #fff;
	margin: 0 auto;
	position: relative;
}
#adbox > div img {
	float: right;
}
#adbox .detail {
	font-family: Times, "Times New Roman", serif;
	height: 185px;
	line-height: 48px;
	width: 308px;
	text-align: center;
	position: absolute;
	left: 54px;
	top: 90px;
}
#adbox .detail h1 {
	color: #4e5944;
	font-size: 30px;
	font-weight: normal;
	line-height: 48px;
	margin: 0;
	text-transform: none;
}
#adbox .detail p {
	color: #4e5944;
	font: 25px/48px "Times New Roman", Times, serif;
	margin: 0;
}
.highlight {
	background: #eee url(../images/bg-highlight.jpg) repeat-x left bottom;
	border-bottom: 1px solid #fff;
}
.highlight .clearfix {
	width: 940px;
}
.highlight h1 {
	font-size: 32px;
	line-height: 36px;
	padding: 12px 0 12px;
	text-transform: none;
}
.highlight h2 {
	color: #57614e;
	margin-bottom: 24px;
}
.testimonial, .main, .sidebar > div h2, .sidebar ul li, .main > .section {
	background-image: url(../images/border.png);
	background-position: left top;
	background-repeat: repeat-y;
}
.testimonial {
	float: right;
	width: 260px;
	margin-left: 20px;
	padding: 24px 20px;
}
.testimonial > span {
	color: #626262;
	display: block;
	font: 14px/24px Arial, Helvetica, sans-serif;
	text-align: right;
}
.featured {
	padding: 30px 0;
}
.featured > h2 {
	color: #728063;
	width: 940px;
	margin: 0 auto 24px;
	padding: 0 10px;
}
.featured ul {
	list-style: none;
	padding: 0;
}
.featured li {
	float: left;
	width: 220px;
	margin: 0 10px;
}
.featured li p {
	padding-left: 4px;
}
.featured li p b {
	display: block;
	text-transform: uppercase;
}
.featured li .more {
	margin-left: 4px;
}
.main {
	float: left;
	min-height: 960px;
	width: 600px;
	padding: 0 0 0 32px;
}
.main h1 {
	margin-bottom: 18px;
}
.main h2 {
	margin-bottom: 12px;
}
.main h1 + h2 {
	margin: 0;
}
.main h1 + div.frame3 {
	margin-top: 36px;
}
.main > .section {
	background-position: left bottom;
	background-repeat: repeat-x;
	width: 600px;
	margin-bottom: 16px;
	margin-left: -28px;
	padding-left: 30px;
}
.main > .last-child, .sidebar ul li.last-child {
	background: none;
}
.main > .section ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.main > .section ul li {
	display: inline-block;
	margin: 0 0 24px;
}
.main > .section ul li .frame4 {
	float: left;
	margin-bottom: 1px;
	margin-right: 20px;
}
.main > .section ul li p {
	margin: 1px 0 0;
}
.main > .section ul li p b {
	display: block;
	text-transform: uppercase;
}
.practices {
	list-style: none;
	display: inline-block;
	width: 640px;
	margin: 0 0 0 -20px;
	padding: 0;
}
.practices li {
	float: left;
	margin: 0 20px 36px;
	position: relative;
}
.practices li a {
	text-decoration: none;
}
.practices li a span {
	background-color: #696969;
	color: #e2e2e2;
	display: block;
	font: 19px/46px "Times New Roman", Times, serif;
	height: 46px;
	width: 265px;
	text-transform: uppercase;
	position: absolute;
	bottom: 21px;
	left: 8px;
	*left: 6px;
}
.practices li a:hover span {
	background-color: #393939;
}

.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #4CAF50;
  cursor: pointer;
}


.sidebar {
	float: left;
	width: 290px;
	padding-right: 18px;
	background-color:whitesmoke;
	padding-top:10px;
	
}
.sidebar > div {
	margin: 0 0 30px;
	padding:10px;
}
.sidebar > div h2 {
	background-position: left bottom;
	background-repeat: repeat-x;
	margin: 0 0 6px;
	padding-bottom: 18px;
}
.sidebar > div:first-child h2 {
	margin-bottom: 0;
	margin-top: 6px;
}
.sidebar > div p {
	margin: 0;
	padding-bottom: 24px;
	padding-right: 30px;
}
.sidebar > div p span {
	display: block;
	text-align: right;
}
.sidebar ul {
	list-style: none;
	margin: 0;
	padding: 0;
}
.sidebar ul li {
	background-position: left bottom;
	background-repeat: repeat-x;
	display: inline-block;
	min-height: 36px;
	width: 280px;
	padding: 6px 0 10px 10px;
}
.sidebar ul li > a span.box {
	float: left;
	margin-right: 20px;
}
.sidebar ul li a {
	color: #755c02;
	font: 13px/24px Arial, Helvetica, sans-serif;
	text-decoration: none;
}
.sidebar ul li a:hover {
	color: #728063;
}
.sidebar ul li img.box {
	float: left;
	margin: 4px 20px 12px 0;
}
.sidebar .contact li {
	background: none;
	padding-left: 0;
}
.sidebar .contact li p {
	padding: 0  0 0 30px;
}
.sidebar .contact li p span.home {
	float: left;
	display: inline-block;
	height: 18px;
	width: 18px;
	margin-left: -30px;
	padding: 0;
}
.sidebar .contact li p em {
	display: block;
	font-size: 19px;
	font-style: normal;
}
.news {
	list-style: none;
	margin: 0;
	padding: 0;
}
.news > li {
	background-position: 0 -238px;
	display: inline-block;
	height: 269px;
	width: 578px;
	margin-bottom: 12px;
	padding: 6px 22px 0 6px;
}
.news > li .box {
	float: left;
	margin-right: 20px;
}
.news > li p.info, .details p.info {
	font-size: 11px;
	margin: 0;
	padding-top: 24px;
}
.author {
	color: #755c02;
}
.news > li h2, .details h2 {
	color: #728063;
	letter-spacing: 0;
	margin-bottom: 24px;
}
.news > li .more {
	float: right;
}
.images {
	float: left;
	width: 210px;
	margin-right: 20px;
	padding-right: 10px;
}
#contents .images img.box {
	border: 5px solid #fff;
}
.details {
	float: left;
	width: 360px;
}
.details p.info {
	padding-top: 0;
}
.message label {
	color: #626262;
	display: block;
	font: 13px/24px Arial, Helvetica, sans-serif;
}
.message input[type='text'] {
	height: 24px;
	width: 590px;
	margin: 0 0 18px;
	padding: 0 4px;
}
.message textarea {
	height: 110px;
	width: 590px;
	margin: 0 0 18px;
	padding: 0 4px;
	overflow: auto;
	resize: none;
}
.message input[type='submit'] {
	cursor: pointer;
	border: none;
}
/*------------ FOOTER ------------*/
#footer {
	background: #d9d9d9 url(../images/bg-footer.png) repeat-x left top;
	border-top: 2px solid #fff;
}
#footer .section {
	float: left;
	min-height: 146px;
	width: 259px;
	border-left: 1px solid #c2c2c2;
	padding: 30px;
}
#footer .section h4 {
	color: #626262;
	font: bold 12px/24px Arial, Helvetica, sans-serif;
	margin: 0;
	text-transform: uppercase;
}
#footer .section p {
	font-size: 12px;
	margin: 0;
}
#footer .section:first-child {
	border: 0;
}
#footer .contact p span {
	text-transform: uppercase;
}
#footnote {
	background: url(../images/bg-footnote.jpg) repeat-x left top;
	border-top: 1px solid #fff;
	padding: 6px 0 3px;
}
#footnote p {
	color: #b5c1aa;
	font: 11px/30px Arial, Helvetica, sans-serif;
	margin: 0;
	padding-right: 10px;
	text-align: right;
	text-transform: uppercase;
}
#footnote .connect {
	float: left;
	display: inline-block;
	margin: 0 10px;
	padding: 6px 0;
}
#footnote .connect a {
	display: inline-block;
	height: 18px;
	width: 18px;
	margin-right: 6px;
}
#footnote .connect a.facebook {
	background-position: 0 -112px;
}
#footnote .connect a.twitter {
	background-position: 0 -140px;
}
#footnote .connect a.googleplus {
	background-position: 0 -168px;
}
#footnote .connect a.pinterest {
	background-position: 0 -196px;
}

</style>
@endsection

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Jobs</div>
                    <pre id="content">

                    </pre>
                <div class="card-body">
                @foreach ($jobs as $job)
                    <div class="section">
					<h2>{{ $job->title }}</h2>
					<div class="price">{{ $job->estimated_budget . " CAD" }}</div>
					<ul>
						<li>
							<p>
							 {{ $job->description }}
							</p>
							
							<div class="content_one">
							<p class="opn_txt">{{ $job->status }}</p>
							<p> Skills required: 
                                @for ($i = 0; $i < sizeof($job->required_skills); $i++)
                                    {{ $job->required_skills[$i]->skill_name }}
                                    @if ($i != (sizeof($job->required_skills)-1))
                                        {{ ", " }}
                                    @endif
                                @endfor
                            </p>
							</div>
						</li>
						
					</ul>
				</div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-js-files')
@stop

@section('page-js-script')
<script type="text/javascript">
    $(document).ready(function() {
        var jobs = {!! json_encode($jobs) !!};
        console.log(jobs);
        //print JSON to page
        $("#content").html(JSON.stringify(jobs, undefined, 4));
    });
</script>
@stop
