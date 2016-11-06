<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SMS Gateway</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}" media="screen" title="no title">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="text-center">SMS Gateway</h1>
        <form class="form-horizontal" action="{{url('sms')}}" method="post">
          {!! csrf_field() !!}
          <div class="form-group">
            <input type="text" name="phone_number" placeholder="Phone Number" class="form-control">
          </div>
          <div class="form-group">
            <textarea name="sms_content" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="form-control btn btn-primary">Send</button>
          </div>
        </form>
      </div>
    </div>
  </body>

  <script src="{{url('js/app.js')}}"></script>
</html>
