@extends('master')

@section('content')
<h1>Please sign in</h1>
<?php echo Form::open(array('action'=>'LoginController@check')) ;?>
<?php echo Form::label('unername','Username: ' ) ;?>
<?php echo Form::text('username',null,array('placeholder'=>'Username'))."<br/><br/>";?>


<?php echo Form::label('password', 'Password: ');?>
<?php echo Form::password('password',null,array('placeholder'=>'password'))."<br/><br/>";?>


<?php echo Form::submit('Sign In')."<br/><br/>";?>     

<?php echo Form::close();?>
@endsection