<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Log in</title>

<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">

<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">

<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/iCheck/square/blue.css">


<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<script nonce="cdd90aca-be60-43fe-88bc-1704b4be9794">try{(function(w,d){!function(bB,bC,bD,bE){bB[bD]=bB[bD]||{};bB[bD].executed=[];bB.zaraz={deferred:[],listeners:[]};bB.zaraz._v="5683";bB.zaraz.q=[];bB.zaraz._f=function(bF){return async function(){var bG=Array.prototype.slice.call(arguments);bB.zaraz.q.push({m:bF,a:bG})}};for(const bH of["track","set","debug"])bB.zaraz[bH]=bB.zaraz._f(bH);bB.zaraz.init=()=>{var bI=bC.getElementsByTagName(bE)[0],bJ=bC.createElement(bE),bK=bC.getElementsByTagName("title")[0];bK&&(bB[bD].t=bC.getElementsByTagName("title")[0].text);bB[bD].x=Math.random();bB[bD].w=bB.screen.width;bB[bD].h=bB.screen.height;bB[bD].j=bB.innerHeight;bB[bD].e=bB.innerWidth;bB[bD].l=bB.location.href;bB[bD].r=bC.referrer;bB[bD].k=bB.screen.colorDepth;bB[bD].n=bC.characterSet;bB[bD].o=(new Date).getTimezoneOffset();if(bB.dataLayer)for(const bO of Object.entries(Object.entries(dataLayer).reduce(((bP,bQ)=>({...bP[1],...bQ[1]})),{})))zaraz.set(bO[0],bO[1],{scope:"page"});bB[bD].q=[];for(;bB.zaraz.q.length;){const bR=bB.zaraz.q.shift();bB[bD].q.push(bR)}bJ.defer=!0;for(const bS of[localStorage,sessionStorage])Object.keys(bS||{}).filter((bU=>bU.startsWith("_zaraz_"))).forEach((bT=>{try{bB[bD]["z_"+bT.slice(7)]=JSON.parse(bS.getItem(bT))}catch{bB[bD]["z_"+bT.slice(7)]=bS.getItem(bT)}}));bJ.referrerPolicy="origin";bJ.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bB[bD])));bI.parentNode.insertBefore(bJ,bI)};["complete","interactive"].includes(bC.readyState)?zaraz.init():bB.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="https://adminlte.io/themes/AdminLTE/index2.html"><b>SIM Data Peralatan</b></a>
</div>

<div class="login-box-body">
<p class="login-box-msg">Sign in to start your session</p>
<form action="proses_login.php" method="post">
<div class="form-group has-feedback">
<input name="username" type="text" class="form-control" placeholder="Username">
<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
</div>
<div class="form-group has-feedback">
<input name="password" type="password" class="form-control" placeholder="Password">
<span class="glyphicon glyphicon-lock form-control-feedback"></span>
</div>
<div class="row">
<div class="col-xs-8">
<div class="checkbox icheck">
<label>
<input type="checkbox"> Remember Me
</label>
</div>
</div>

<div class="col-xs-4">
<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
</div>

</div>
</form>

</div>

</div>


<script src="https://adminlte.io/themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>

<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="https://adminlte.io/themes/AdminLTE/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>