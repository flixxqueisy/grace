@extends('layout.main')
@section('content')
    <div class="app-content-padding flex-grow-1 overflow-hidden" data-scrollbar="true" data-height="100%">

        <ol class="breadcrumb float-xl-end">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
            <li class="breadcrumb-item active">Page with Footer</li>
        </ol>


        <h1 class="page-header">Page with Fixed Footer <small>header small text goes here...</small></h1>


        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Installation Settings</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i
                            class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i
                            class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i
                            class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i
                            class="fa fa-times"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <p>
                    Add the <code>.app-content-full-height</code> css class to <code>.app</code> container for full height
                    page element.
                    <br />
                    <b>If</b> you only need the footer to be fixed at the bottom for <b>minimum max page height</b>, you are
                    not required to add the <code>data-scrollbar="true"</code> and <code>data-height="100%"</code>;
                </p>
            </div>
            <div class="hljs-wrapper">
                <pre><code class="html" data-url="../assets/data/page-with-fixed-footer/code-1.json"></code></pre>
            </div>
        </div>

    </div>
@endsection
