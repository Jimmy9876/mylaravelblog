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
					<div class="panel-heading">
						Who am I?
					</div>
					<div class="panel-body personal-info">
						<ul class="list-unstyled">
							<li>
								<em>Name</em>
								<span>陈家健（Jiajian Chan）</span>
							</li>
							<li>
								<em>Gender</em>
								<span>男</span>
							</li>
							<li>
								<em>Age</em>
								<span>95 后</span>
							</li>
							<li>
								<em>Email</em>
								<span>changejian@gmail.com</span>
							</li>
							<li>
								<em>Website</em>
								<span><a target="_blank" href="https://pigjian.com">https://pigjian.com</a></span>
							</li>
							<li>
								<em>Github</em>
								<span><a target="_blank" href="https://github.com/jcc"><i class="ion-social-github"></i></a></span>
							</li>
							<li>
								<em>Wechat</em>
								<span>CJJ09157</span>
							</li>
							<li>
								<em>QQ</em>
								<span>601360343</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection