@extends('layouts.master2')

@section('content')
<div class="container">
  <br>
  <br>
  <div class="card">
    <div class="card-header bg-light">
      <h3 class="card-title">FORM BERTANYA</h3>
    </div>
    
     <form action="/pertanyaan" method="POST">
          @csrf
          <div class="card-body bg-light">
              <div class="form-group">
                <label >Judul Pertanyaan</label>
                <input type="text" class="form-control" name="judul" placeholder=" Judul" required="true">
              </div>
              <div class="form-group">
                <label>Isi Pertanyaan</label>
                <textarea class="form-control" rows="5" name="isi" placeholder="Mo nanya donk ..." required="true"></textarea>
              </div>
              
                <div class="form-group">
                  <label for="exampleInputEmail1">#Tag</label>
                  <input type="text" class="form-control" name="tag" placeholder="Contoh: tag1, tag2, tag3">
                </div>
              
              <input hidden name="id_penanya" value={{ Auth::user()->id }}>
              
          </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          
      </form>
</div>
<br>
</div>


@endsection