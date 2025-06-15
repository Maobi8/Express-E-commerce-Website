<div class="modal fade" id="quickView{{ $product->id }}" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ $product->name }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>{{ $product->description }}</p>
        @foreach ($product->images as $image)
            <img src="{{ asset('storage/' . $image->image_path) }}" class="img-fluid mb-2">
        @endforeach
      </div>
    </div>
  </div>
</div>
