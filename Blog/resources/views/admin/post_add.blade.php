@extends('admin.layouts.main')

@section ('contenido')
<h1>Agregar Post</h1>
<div id="editor">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br /></p>
</div>

@endsection
@section("scripts")
<script>
  const quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>
@endsection