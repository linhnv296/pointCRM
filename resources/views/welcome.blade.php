@extends('master')
@section('content')
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=K2D:300,400,500,700,800" rel="stylesheet">
    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
<!--Header Section-->
    @if(!auth()->user())
<section class="bg-gradient pt-5 pb-6">
    <div class="container">
        <div class="row mt-6">
            <div class="col-md-8 mx-auto text-center">
                <h1>What is Lorem Ipsum?</h1>
                <p class="lead mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
                <a href="{{route("auth.register")}}" class="btn btn-success svg-icon">
                    <em class="mr-2" data-feather="github"></em>
                    Register
                </a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-9 mx-auto">
                <div class="code-window">
                    <div class="dots">
                        <div class="red"></div>
                        <div class="orange"></div>
                        <div class="green"></div>
                    </div>
                    <pre class="language-javascript line-numbers">
<code class="language-javascript">
{{--import {DomSanitizer} from '@angular/platform-browser';--}}
{{--import {Pipe, PipeTransform} from '@angular/core';--}}

{{--import { icons } from 'feather-icons'; // v4+--}}

{{--@Pipe({ name: 'feather' })--}}
{{--export class FeatherIconsPipe implements PipeTransform {--}}

{{--constructor(private sanitizer: DomSanitizer) {}--}}

{{--transform(icon: string, size: number = 24, color: string = 'inherit') {--}}
{{--return this.sanitizer.bypassSecurityTrustHtml(icons[icon].toSvg({--}}
{{--    width: size,--}}
{{--    height: size,--}}
{{--    color: color--}}
{{--}));--}}
{{--}--}}
{{--}--}}
</code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--Features Section-->
<section class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-center text-md-left">Lorem Ipsum is simply dummy <span class="text-success">Point.CRM</span></h2>
                <div class="row feature-grid">
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="check-circle" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Dead Simple
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="command" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Highly Intuitive
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="feather" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Light as a Feather
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="zap" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Blazing Fast
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="git-pull-request" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Extensible
                            </div>
                        </div>
                    </div><div class="col-sm-6">
                        <div class="media">
                            <div class="icon-box">
                                <div class="icon-box-inner">
                                    <span data-feather="droplet" width="28" height="28"></span>
                                </div>
                            </div>
                            <div class="media-body">
                                Easy Styling
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Used By Section-->
<section class="pb-6">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 class="text-center text-md-left">Used by Thousands of Companies</h2>
                <p class="lead text-muted">Point.CRM Lorem Ipsum is simply dummy.</p>
                <div class="mt-5 d-flex flex-row justify-content-md-between flex-wrap press-icons">
                    <img src="https://logo.clearbit.com/google.com?size=60" alt="Google"/>
                    <img src="https://logo.clearbit.com/twitter.com?size=60" alt="Twitter"/>
                    <img src="https://logo.clearbit.com/vuejs.org?size=60" alt="Veu.js"/>
                    <img src="https://logo.clearbit.com/stripe.com?size=60" alt="Stripe"/>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/plugins/line-numbers/prism-line-numbers.min.js"></script>
<script src="../../public/js/scripts.js"></script>
@endsection
