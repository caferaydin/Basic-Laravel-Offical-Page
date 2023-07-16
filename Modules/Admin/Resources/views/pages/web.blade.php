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
                            <h3 class="card-title">Web Site Ayarları</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="{{ route('webPost') }}" method="POST">
                                    @csrf
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Web Site Başlığı<span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="title" value="{{ $web->title }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Anahtar Kelime <span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="keywords" value="{{ $web->keywords }}">
                                            <p> <label for=""> Google Optimizasyon için anahtar kelimeler ',' ile ayrılarak yazılmalı.  </label></p>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label">Açıklama <span class="text-red">*</span></label>
                                            <textarea type="text" class="form-control" name="description" placeholder="Home Address"> {{ $web->description }} </textarea>
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
