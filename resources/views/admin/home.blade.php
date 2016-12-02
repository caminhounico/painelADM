@extends('admin.layouts.app')

@section('content')



        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Início
                <small>Visão Geral</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{env('app_url')}}">WebSystems</a></li>
                <li class="active"><i class="fa fa-home"></i> Perfil</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">


            <!-- WIDGETS -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>150</h3>

                            <p>Vendas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informações &nbsp;<i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>53<sup style="font-size: 20px">%</sup></h3>

                            <p>Metas Atingidas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informações &nbsp; <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Usuários Ativos</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informações &nbsp;<i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Visitas</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mais informações &nbsp; <i
                                    class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->


            <!-- TASKS AND PROJECT List -->
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <i class="fa fa-tasks"></i>

                            <h3 class="box-title">Tarefas</h3>

                            <div class="box-tools pull-right">
                                <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="todo-list">
                                <li>

                                    <!-- todo text -->
                                    <span class="text">Iniciar projeto</span>
                                    <!-- Emphasis label -->
                                    <small class="label label-danger"><i class="fa fa-clock-o"></i> 60 dias</small>
                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <!-- Projects List -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <i class="fa fa-tasks"></i>

                            <h3 class="box-title">Projetos</h3>

                            <div class="box-tools pull-right">
                                <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="todo-list">
                                <li class="project-list">

                                    <!-- todo text -->
                                    <span class="text">WS COND</span>
                                    <small class="subtitle">Painel de controle administrativo de condomínios</small>
                                    <!-- Emphasis label -->
                                    <small class="label label-danger"><i class="fa fa-clock-o"></i>&nbsp; 0%</small>
                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fa fa-info"></i>
                                    </div>
                                </li>


                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix no-border">
                            <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i>
                                Adicionar
                            </button>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            </div>


            {{----}}

            {{--<span class="btn btn-success fileinput-button">--}}
            {{--<i class="glyphicon glyphicon-plus"></i>--}}
            {{--<span>Select files...</span>--}}
            {{--<!-- The file input field used as target for the file upload widget -->--}}
            {{--<input id="fileupload" type="file" name="image" data-token="{{csrf_token()}}"/>--}}
            {{--</span>--}}
            {{--<br>--}}
            {{--<br>--}}
            {{--<!-- The global progress bar -->--}}
            {{--<div id="progress" class="progress">--}}
            {{--<div class="progress-bar progress-bar-success"></div>--}}
            {{--</div>--}}
            {{--<!-- The container for the uploaded files -->--}}
            {{--<div id="files" class="files">--}}
            {{--<p class="file"></p>--}}
            {{--</div>--}}


        </section>
        <!-- /.content -->




@endsection

@section('script')
    <script>
        $(function () {
            'use strict';
            // Change this to the location of your server-side upload handler:
            var url = 'admin/avatar';
            var fileUpload = '#fileupload';
            $(fileUpload).fileupload({
                url: url,
                dataType: 'json',
                formData: {_token: $(fileUpload).data('token')},
                done: function () {

                },
                progressall: function (e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    $('#progress .progress-bar').css(
                            'width',
                            progress + '%'
                    );
                }
            }).prop('disabled', !$.support.fileInput)
                    .parent().addClass($.support.fileInput ? undefined : 'disabled');

            $('.menu-home').addClass('active');
        });


    </script>

@endsection
