@extends('admin::layouts.master')


@section('content')

<div class="main-content app-content mt-0">
    <div class="side-app">

        <div class="main-container container-fluid">

            <!--Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Anasayfa</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="{{ route('homePost') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Paraf<span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="name" value="{{ $home->name }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Başlık <span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="title" value="{{ $home->title }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Açıklama <span class="text-red">*</span></label>
                                            <textarea type="text" class="form-control" name="information" placeholder="Home Address"> {{ $home->information }} </textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Resim <span class="text-red">*</span></label>
                                            <input type="file" name="image" class="form-control">
                                        </div>
                                    </div>

                                    <div>
                                        <button type="submit" class="btn btn-success">Kaydet</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--End Row-->

        </div>

    </div>
</div>


@endsection
