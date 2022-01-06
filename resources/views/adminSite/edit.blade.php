@extends('layouts.master')

@section('title','edit')
@section('content')

 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Example Form</div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input value="<?php echo @$user['admin_name'];?>" type="text" id="username" name="username" placeholder="Username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input value="<?php echo @$user['admin_email'];?>" type="email" id="email" name="email" placeholder="Email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-asterisk"></i>
                                                    </div>
                                                    <input value="<?php echo @$user['admin_password'];?>" type="password" id="password" name="password" placeholder="Password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm" name="update">update</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            
@endsection
           