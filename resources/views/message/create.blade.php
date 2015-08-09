
{!! Form::open(['route' => 'messages.store']) !!}
<div class="col-md-12">
    <!-- Subject Form Input -->
    <div class="form-group">
        {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}
        {!! Form::text('subject', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Message Form Input -->
    <div class="form-group">
        {!! Form::label('message', 'Message', ['class' => 'control-label']) !!}
        {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
    </div>


    <!-- Submit Form Input -->
    <div class="form-group">
        <button class="btn btn-primary form-control" type="submit" id="btn-submit"><span class="fa fa-envelope"></span> Send</button>
    </div>
</div>
{!! Form::close() !!}