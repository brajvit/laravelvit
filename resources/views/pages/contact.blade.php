
@extends('main')

@section('title','| contact')

@section('content')

    <div class="row">
    <div class="col-md-12">
            <h1>Contact Me</h1>

                <hr>

                <form>
                    <div class="form-group">

                        <lable name="email">Email:</label>
                            <input id="email" name="email" class="form-control">

                    </div>

                      <form>
                    <div class="form-group">

                        <lable name="subject">Email:</label>
                            <input id="subject" name="subject" class="form-control">

                    </div>


                      <form>
                    <div class="form-group">

                        <lable name="massage">Massage:</label>
                            <textarea id="massage" name="massage" class="form-control">type your massage here..
                            </textarea>

                    </div>


                        <input type="submit" value="sendmassage" class="btn btn-success">
                </form>

    </div>
    </div>
   
   @endsection