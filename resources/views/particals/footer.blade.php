<footer id="footer" class="footer">
    <div class="container text-center">
        <div class="row content">
            <div class="col-md-4 col-md-offset-4">
                <ul class="connect">
                    <li>
                        <a href="{{ url('/') }}">
                            <i class="fa fa-home fa-2x"></i>
                        </a>
                    </li>
                    @if(config('blog.footer.github.open'))
                    <li>
                        <a href="{{ config('blog.footer.github.url') }}" target="_blank">
                            <i class="fa fa-github fa-2x"></i>
                        </a>
                    </li>
                    @endif
                    @if(config('blog.footer.weibo.open'))
                    <li>
                        <a href="{{ config('blog.footer.weibo.url') }}" target="_blank">
                            <i class="fa fa-weibo fa-2x"></i>
                        </a>
                    </li>
                    @endif
                </ul>
                <div class="links">
                    <a href="{{ url('link') }}">{{ lang('Links') }}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right text-center">
        <span>{!! config('blog.footer.meta') !!}</a>
    </div>
</footer>