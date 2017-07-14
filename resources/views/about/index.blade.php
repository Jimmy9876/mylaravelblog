@extends('layouts.app')

@section('content')
    @component('particals.jumbotron')
        <h3>关于我</h3>
    @endcomponent

<div class="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="user text-center" style="margin-bottom: 20px;">
			<img src="https://ws2.sinaimg.cn/large/006tKfTcgy1fhjh929sthj30ak0akt8w.jpg" class="avatar img-circle">
		</div>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading" style="text-align: center">
						Jimmy
					</div>
					<div class="panel-body personal-info" style="text-align: center">
						<ul class="list-unstyled">
							<li>
								<em>Name</em>
								<span style="color: #9CAEBF">Jimmy Eric</span>
							</li>
							<li>
								<em>Age</em>
								<span style="color: #9CAEBF">22</span>
							</li>
							<li>
								<em>Email</em>
								<span style="color: #9CAEBF">370555337@qq.com</span>
							</li>
							<li>
								<em>Website</em>
								<span style="color: #9CAEBF"><a target="_blank" href="https://aimpeter.xyz">Jimmy的技术乐园</a></span>
							</li>
							<li>
								<em>Github</em>
								<span style="color: #9CAEBF"><a target="_blank" href="https://github.com/jimmy9876"><i class="ion-social-github"></i>Jimmy9876</a></span>
							</li>
							<li>
								<em>Wechat</em>
								<span style="color: #9CAEBF">wujunjie12580</span>
							</li>
							<li>
								<em>QQ</em>
								<span style="color: #9CAEBF">370555337</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection