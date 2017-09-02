<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>欢迎来到Jimmy的技术乐园</title>
	<link rel="shortcut icon" href="/images/favicon.ico">
	<link rel="stylesheet" href="{{ mix('css/home.css') }}">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css">body{margin:0;padding:0;}#particles{position:absolute;width:100%;height:100%;}.full-height{background-color:#fff;color:#6289ad;font-family:'Raleway';font-weight:100;height:100vh;margin:0;overflow:hidden;}.full-height{height:100vh;}.flex-center{align-items:center;display:flex;justify-content:center;}.position-ref{position:relative;}.top-right{position:absolute;right:10px;top:18px;}.content{text-align:center;z-index:100;margin-bottom:15vh;}.title{font-size:84px;}.description{margin:30px 0;font-size:24px;font-weight:bold;}.links>a{color:#9caebf;padding:0 25px;font-size:14px;font-weight:600;letter-spacing:.1rem;text-decoration:none;text-transform:uppercase;}.links>a:hover{color:#52697f;}.m-b-md{margin-bottom:30px;}.avatar{width:120px !important;}</style>
</head>
<body>
	<div class="flex-center position-ref full-height">
		<div id="particles"></div>
		<div class="content">
			<div class="title m-b-md">
				<img class="avatar img-circle" style="border-radius:500px" src="https://ws4.sinaimg.cn/large/006tNc79gy1fhkma5ei3pj30ak0akt8w.jpg" alt="Jimmy">
			</div>
			<div class="description">
				原blog地址👉<a href="http://jimmy9876.top" style="color: #5E88AE">点我进入</a>👈
			</div>
			<div class="links">
				<a href="/article"><i class="fa fa-globe"></i>博客</a>
				{{--  <a href="/share">Share</a>  --}}
				{{--  <a target="_blank" href="http://weibo.com/u/3270306430">微博</a>  --}}
				{{--  <a target="_blank" href="https://github.com/jimmy9876">github</a>  --}}
				<a href="/Jimmy/index.html"><i class="fa fa-user-circle"></i>虞城工作室</a>
				<a href="/donate"><i class="fa fa-usd"></i>打赏</a> 
			</div>
		</div>
	</div>
	<script async src="//dn-lbstatics.qbox.me/busuanzi/2.3/busuanzi.pure.mini.js"></script>
	<script src="//cdn.bootcss.com/particles.js/2.0.0/particles.min.js"></script> 
	{{-- <script type="text/javascript" src="http://7u2ss1.com1.z0.glb.clouddn.com/love.js"></script> --}}
	{{--  <script type="text/javascript" color="255,0,0" opacity="0.3" count="99" src="http://7u2ss1.com1.z0.glb.clouddn.com/particle.js"></script>  --}}
	 <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create','UA-81634754-1','auto');ga('send','pageview');</script>
	<script>particlesJS("particles",{"particles":{"number":{"value":160,"density":{"enable":true,"value_area":800
	}
},"color":{"value":"#FFD74D"
},"shape":{"type":"circle","stroke":{"width":0,"color":"#B0F566"
},"polygon":{"nb_sides":5
},"image":{"src":"img/github.svg","width":100,"height":100
}
},"opacity":{"value":1,"random":true,"anim":{"enable":true,"speed":1,"opacity_min":0,"sync":false
}
},"size":{"value":5,"random":true,"anim":{"enable":false,"speed":4,"size_min":0.3,"sync":false
}
},"line_linked":{"enable":false,"distance":150,"color":"#52697f","opacity":0.4,"width":1
},"move":{"enable":true,"speed":1,"direction":"none","random":true,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":600
}
}
},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"bubble"
},"onclick":{"enable":true,"mode":"repulse"
},"resize":true
},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1
}
},"bubble":{"distance":250,"size":3,"duration":2,"opacity":0,"speed":3
},"repulse":{"distance":400,"duration":0.4
},"push":{"particles_nb":4
},"remove":{"particles_nb":2
}
}
},"retina_detect":true
});</script>   

<footer>
    <div class="copy-right text-center">
        <span style="color: #5E88AE">{!! config('blog.footer.meta') !!}
		<br>
		<span id="busuanzi_container_site_pv" style="color: #F78AE0"><i class="fa fa-free-code-camp"></i>热度<span id="busuanzi_value_site_pv"></span>℃</span>
    </div>
</footer>

</body>
</html>