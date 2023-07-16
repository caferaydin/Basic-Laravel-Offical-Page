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
                            <h3 class="card-title">İletişim Bilgileri</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <form action="{{ route('contactPost') }}" method="POST">
                                    @csrf
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Adres<span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="address" value="{{ $contact->address }}" required>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Telefon<span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="phone" value="{{ $contact->phone }}" required>

                                            <label class="form-label">Email<span class="text-red">*</span></label>
                                            <input type="text" class="form-control" name="email" value="{{ $contact->email }}" required>
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


