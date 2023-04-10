
 @extends('menu.navbar')
 @section('components')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <ul class="list-group">
        <li class="list-group-item active text-center fw-bold fs-4">List Pengajuan Surat</li>
        @forelse ($domisili as $item)
        <li class="list-group-item d-flex justify-content-between">
          <span class="fw-bold fs-5">Sembarang</span>
          <a href="" class="btn btn-info fw-bold">show</a>
        </li>
        @empty
        <li class="list-group-item">
          <p class="text-center mt-3">Sory Data Note Found</p>
        </li>
        @endforelse
        
       </ul>
    </div>
  </div>
</div>




 @endsection