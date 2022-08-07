@extends('layouts.app')

@section('content')

    <body class="image-container set-full-height" style="background-image: url('assets/img/bg1.jpg')">

        <!-- pachedu code -->
        <a href="/">
            <div class="logo-container">
                <div class="logo">
                    <img src="assets/img/new_logo.png">
                </div>
                <div class="brand">
                    <strong>Taal-NET Online Application</strong>
                </div>
            </div>
        </a>

        <!-- Signature -->
        <a href="/" class="made-with-mk">
            <div class="brand">CH</div>
            <div class="made-with">Developed By <strong>Taal-NET</strong> </div>
        </a>

        <!-- Big Container -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <!-- Wizard Container -->
                    <div class="wizard-container">
                        <div class="card wizard-card" data-color="blue" id="wizard">
                            <!-- Form Part -->
                            <form action="{{ route('applicant.submit') }}" method="post" enctype="multipart/form-data">

                                @csrf

                                <!-- include header partial -->
                                @include('wizard.header')
                                <!-- Tab content -->
                                <div class="tab-content">

                                    <!-- start -->
                                    @include('wizard.start')

                                    <!-- parent -->
                                    @include('wizard.parent')

                                    <!-- child -->
                                    @include('wizard.child')

                                    <!-- enrollment -->
                                    @include('wizard.enrollment')

                                    <!-- uploads -->
                                    @include('wizard.uploads')

                                    <!-- finish -->
                                    @include('wizard.finish')

                                </div>
                                    <!-- Wizard Footer -->
                                    @include('wizard.footer')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Finale -->
        @include('partials.footer')

    </body>

    @endsection